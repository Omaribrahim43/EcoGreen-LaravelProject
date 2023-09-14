<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;


class PayPalController extends Controller
{
    public function payment($price){
    $data =[];
    $data ['items'] = [

    [
        'name'=> '',
        'price'=> $price,
        'desc' => '',
        'qty'=>1

    ],
    ];

    $data['invoice_id'] = 1;
    $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
    $data['return_url'] = route('success');
    // $data['cancel_url'] = route('cancel');
    $data['total'] = $price *1;

    $provider= new ExpressCheckout;
    $response=$provider->setExpressCheckout($data, true);
// dd($response);
    return redirect($response['paypal_link']);

    }
    

    public function cancel(){
        
        return response()->json('Payment Cancelled', 402);
    }

    public function success(){
    $provider= new ExpressCheckout;
        $response=$provider->getExpressCheckoutDetails($request->token);
        if (in_array(strotoupper($response['ACK']),['SUCCESS', 'SUCCESSWITHWARNING'])){
        return response()->json('Paid success');
        }
        return response()->json('fail payment' , 402 );
    }
}
    
