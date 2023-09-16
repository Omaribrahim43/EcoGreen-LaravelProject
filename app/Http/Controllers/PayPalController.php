<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\UserProject;
use App\Models\Project;
use App\Models\User;

class PaypalController extends Controller
{
    public function payment(Request $request)
    {

        if ($request->donate_method == 'PayPal' && $request->donate_amount != 0) {
            $id = auth()->user()->id;

            $user = UserProject::create([
                'donate_amount' => $request->donate_amount,
                'donate_method' => $request->donate_method,
                'user_id' => $id,
                'project_id' => (int) $request->input('project_id')
            ]);

            $data['address'] = $request->address;
            $data['phone'] = $request->phone;
            User::where(['id' => $id])->update($data);



            $provider = new PayPalClient;
            $provider->setApiCredentials(config('paypal'));
            $PaypalToken = $provider->getAccessToken();

            $response = $provider->createOrder([
                "intent" => "CAPTURE",
                "application_context" => [
                    "return_url" => route('paypal_success'),
                    "cancel_url" => route('paypal_cancel'),
                ],
                "purchase_units" => [
                    [
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => $request->donate_amount
                        ]
                    ]
                ]
            ]);

            if (isset($response['id']) && $response['id'] != null) {
                foreach ($response['links'] as $link) {
                    if ($link['rel'] === 'approve') {
                        return redirect()->away($link['href']);
                    }
                }
            } else {
                return redirect()->route('paypal_cancel');
            }
        } elseif ($request->donate_method == 'Cash' && $request->donate_amount != 0) {
            $id = auth()->user()->id;

            $user = UserProject::create([
                'donate_amount' => $request->donate_amount,
                'donate_method' => $request->donate_method,
                'user_id' => $id,
                'project_id' => (int) $request->input('project_id')
            ]);

            $data['address'] = $request->address;
            $data['phone'] = $request->phone;
            User::where(['id' => $id])->update($data);
            return view('frontend.layouts.thankyoupopupcash');
        } else {
            return redirect()->back();
        }
    }


    public function success(Request $request)
    {


        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $PaypalToken = $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request->token);


        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return view('frontend.layouts.thankyouPopUp');
        } else {
            return redirect()->route('paypal_cancel');
        }
    }

    public function cancel()
    {
        return view('frontend.layouts.home');
    }
}
