<?php

namespace App\Http\Controllers;

use App\Models\UserProject;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Models\Category;
use App\Models\Project;
use App\Models\User;


class SingelProjectController extends Controller
{

    public function openForm()

    {
        $id = auth()->user()->id;

        $user = user::findOrFail($id);
        return view('frontend.layouts.donationPopUp', ['user' => $user]);
    }

    public function openFormservice()

    {
        if (auth()->user()) {
            $id = auth()->user()->id;
            $user = user::findOrFail($id);
            return view('frontend.service_project.singelProject.sections.service-popup', ['user' => $user]);
        } else {
            return view('auth.login');
            return toastr('error', 'Please login or register to donate!');
        }
    }

    public function openFormitem()

    {
        $id = auth()->user()->id;

        $project = user::findOrFail($id);
        $user = user::findOrFail($id);
        return view('frontend.Item_Project.singelProject.sections.item-popup', ['project' => $project], ['user' => $user]);
    }


    public function showDonation($id)
    {
        $project = Project::findOrFail($id);
        return view('frontend.Donation_Project.singelProject.singelProject', ['project' => $project]);
    }
    public function showitem($id)
    {
        $project = Project::findOrFail($id);
        return view('frontend.Item_Project.singelProject.singelProject', compact('project'));
    }
    public function showservice($id)
    {
        $project = Project::findOrFail($id);
        return view('frontend.service_project.singelProject.singelProject', compact('project'));
    }

    public function checkformservice(Request $request)
    {
        if (auth()->user()->check) {
            return redirect()->action([self::class, 'viewformservice'], ['user' => auth()->user()->id]);
        } else {
            return redirect('login');
        }
    }

    public function checkformitem(Request $request)
    {
        if (auth()->user()->check) {
            return redirect()->action([self::class, 'viewformitem'], ['user' => auth()->user()->id]);
        } else {
            return redirect('login');
        }
    }

    public function checkformDonation()
    {

        $user = User::where('id', 1);
        return view('frontend.Donation_Project.singelProject.sections.donationPopUp', ['user' => $user]);
    }




    public function storeformDonation(Request $request)
    {
        $id = auth()->user()->id;
        $user = UserProject::create([
            'donate_amount' =>  $request->donate_amount,
            'donate_method' => $request->donate_method,
            'user_id' => $id,
            'project_id' => $request->project_id
        ]);

        return view('frontend.layouts.thankyouPopUp');
    }


    public function storeformitem(Request $request)
    {

        $id = auth()->user()->id;
        $user = UserProject::create([
            'user_id' => $id,
            'donate_item' => $request->donate_item,
            'project_id' => $request->project_id

        ]);


        return view('frontend.layouts.thankyouPopUp');
    }

    public function storeformservice(Request $request)
    {
        $id = auth()->user()->id;

        $user = User::find($id);

        $user->choosen_shift = $request->choosen_shift;
        $user->update([

            'choosen_shift' => $request->choosen_shift

        ]);

        return view('frontend.layouts.thankyouPopUp');
    }
}
