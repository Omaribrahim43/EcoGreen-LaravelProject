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

    public function openForm($id)
    {
        if (auth()->user()) {
            $iduser = auth()->user()->id;
            $user = user::findOrFail($iduser);
            return view('frontend.layouts.donationPopUp', ['user' => $user], compact('id'));
        } else {
            return view('auth.login');
            return toastr('error', 'Please login or register to donate!');
        }
    }

    public function openFormservice($id)
    {
        if (auth()->user()) {
            $iduser = auth()->user()->id;
            $user = user::findOrFail($iduser);
            return view('frontend.service_project.singelProject.sections.service-popup', ['user' => $user], compact('id'));
        } else {
            return view('auth.login');
            return toastr('error', 'Please login or register to donate!');
        }
    }
    public function openFormitem($id)
    {
        if (auth()->user()) {
            $iduser = auth()->user()->id;
    
            $project = user::findOrFail($iduser);
            $user = user::findOrFail($iduser);
            return view('frontend.Item_Project.singelProject.sections.item-popup', compact('project', 'user', 'id'));
        } else {
            return view('auth.login');
            // You cannot have two return statements in a row. The second one will never be executed.
            // return toastr('error', 'Please login or register to donate!');
        }
    }
    


    public function showDonation($id)
    {
        $project = Project::findOrFail($id);
        return view('frontend.Donation_Project.singelProject.singelProject', ['project' => $project], compact('id'));
    }
    public function showitem($id)
    {
        $project = Project::findOrFail($id);
        return view('frontend.Item_Project.singelProject.singelProject', compact('project'), compact('id'));
    }
    public function showservice($id)
    {
        $project = Project::findOrFail($id);
        return view('frontend.service_project.singelProject.singelProject', compact('project'), compact('id'));
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
        if ($request->has('donate_method')) {
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

            return view('frontend.layouts.thankyouPopUp');
        }
        return redirect()->back();
    }


    public function storeformitem(Request $request)
    {

        if ($request->has('donate_item')) {
            $id = auth()->user()->id;
            $userProject = UserProject::create([
                'user_id' => $id,
                'donate_item' => $request->donate_item,
                'project_id' => (int) $request->input('project_id')
            ]);

            $data['address'] = $request->address;
            $data['phone'] = $request->phone;
            User::where(['id' => $id])->update($data);

            return view('frontend.layouts.thankyouPopUp');
        }

        return redirect()->back();
    }

    public function storeformservice(Request $request)
    {
        if ($request->has('choosen_shift')) {

            $id = auth()->user()->id;
            $user = User::find($id);

            $user = UserProject::create([
                'choosen_shift' => $request->choosen_shift,
                'user_id' => $id,
                'project_id' => (int) $request->input('project_id')
            ]);

            $data['address'] = $request->address;
            $data['phone'] = $request->phone;
            User::where(['id' => $id])->update($data);

            return view('frontend.layouts.thankyouPopUp');
        }

        return redirect()->back();
    }
}