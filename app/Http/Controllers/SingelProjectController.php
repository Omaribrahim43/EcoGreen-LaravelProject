<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Models\Category;
use App\Models\Project;
use App\Models\User;


class SingelProjectController extends Controller
{

    public function openForm()
    
    {
        // $id= auth()->user()->id;
        $id=1;
        $user = user::findOrFail($id);
        return view('frontend.layouts.donationPopUp', ['user' => $user]);
    }

    public function openFormservice()
    
    {
        // $id= auth()->user()->id;
        $id=1;
        $user = user::findOrFail($id);
        return view('frontend.service_project.singelProject.sections.service-popup', ['user' => $user]);
    }

    public function openFormitem()
    
    {
        // $id= auth()->user()->id;
        $id=1;
        $project = user::findOrFail($id);
        $user = user::findOrFail($id);
        return view('frontend.Item_Project.singelProject.sections.item-popup', ['project' => $project],['user' => $user]);
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
        return view('frontend.Item_Project.singelProject.singelProject', compact('project'));
        //sara comment 
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
        // dd('hi');
        $user = User::where('id', 1);
        return view('frontend.Donation_Project.singelProject.sections.donationPopUp', ['user' => $user]);


        // dd($user);
        // if (auth()->user()->check) {
        //    $iduser= auth()->user()->id;

        //     return view('frontend.layouts.donationPopUp', ['user' => $user]);   
        // } else {

        //     return redirect('login');
        // }

    }

    public function viewformservice($id)
    {
        $user = User::find($id);
        return view('service_project.singelProject.popup', ['user' => $user]);
    }

    public function viewformitem($id)
    {
        $user = User::find($id);
        return view('Item_Project.singelProject.popup', ['user' => $user]);
    }

    public function viewformDonation($id = 1)
    {
        $user = User::where('id', $id);
        return view('frontend.layouts.donationPopUp', ['user' => $user]);
    }


    public function storeformDonation(Request $request)
    {
            // $id= auth()->user()->id;
         $id=1;

        $user = User::find($id);
        $user->donate_amount = $request->donate_amount;
        $user->donate_method = $request->donate_method;

        return view('frontend.layouts.thankyouPopUp');

    }

    public function storeformitem(Request $request)
    {
        $validatedData = $request->validate([

            'tree_checkbox' => 'sometimes|required_without_all:fertilizer_checkbox,equipments_checkbox',
            'fertilizer_checkbox' => 'sometimes|required_without_all:tree_checkbox,equipments_checkbox',
            'equipments_checkbox' => 'sometimes|required_without_all:tree_checkbox,fertilizer_checkbox',
        ]);
                
        // $id= auth()->user()->id;
        $id=1;
        $user = User::find($id);

        $user->donate_tree = $request->donate_tree;
        $user->donate_fertilizer = $request->donate_fertilizer;
        $user->donate_equipments = $request->donate_equipments;


        return view('frontend.layouts.thankyouPopUp');

    }

    public function storeformservice(Request $request)
    {
            // $id= auth()->user()->id;
            $id=1;

        $user = User::find($id);

        $user->choosen_shift = $request->choosen_shift;


        return view('frontend.layouts.thankyouPopUp');

    }




}