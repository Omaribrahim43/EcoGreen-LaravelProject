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
    
    public function openFormhelp()
    {
        if (auth()->user()) {
            $iduser = auth()->user()->id;
    
            $project = user::findOrFail($iduser);
            $user = user::findOrFail($iduser);
            return view('frontend.helpProject.help-popup', compact('project', 'user'));
        } else {
            return view('auth.login');
            // You cannot have two return statements in a row. The second one will never be executed.
            // return toastr('error', 'Please login or register to donate!');
        }
    }


    public function showDonation(Request $request, $id)
    {

        $projectss = Project::all();

        $projectProgress = [];

        foreach ($projectss as $projects) {
            $totalDonatedAmount = UserProject::where('project_id', $projects->id)->sum('donate_amount');
            $progressPercentage = number_format(($totalDonatedAmount / ($projects->budget)) * 100, 2);

            $projectProgress[$projects->id] = [
                'name' => $projects->name,
                'progress' => $progressPercentage,
                'totalDonatedAmount' => $totalDonatedAmount,
            ];
        }
        // dd($projectProgress);
        $project = Project::find($id); // Retrieve the project
        // dd($project);
        $remainingAmount = $project->budget - $projectProgress[$project->id]['totalDonatedAmount'];


        $project = Project::findOrFail($id);
        return view('frontend.Donation_Project.singelProject.singelProject', ['project' => $project], compact('id', 'projectProgress', 'remainingAmount'));
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
        $id = auth()->user();
        $user = User::where('id', $id);
        return view('frontend.Donation_Project.singelProject.sections.donationPopUp', ['user' => $user]);
    }




    public function storeformDonation(Request $request)
    {
        $projectss = Project::all();
        $id = auth()->user()->id;

        $projectProgress = [];

        foreach ($projectss as $projects) {
            $totalDonatedAmount = UserProject::where('project_id', $projects->id)->sum('donate_amount');
            $progressPercentage = number_format(($totalDonatedAmount / $projects->budget) * 100, 2);

            $projectProgress[$projects->id] = [
                'name' => $projects->name,
                'progress' => $progressPercentage,
                'totalDonatedAmount' => $totalDonatedAmount,
            ];
        }

        if ($request->has('donate_method') && $request->donate_amount != 0) {
            $project = Project::find($request->input('project_id')); // Retrieve the project
            if (!$project) {
                return redirect()->back()->with('error', 'Project not found');
            }

            // Calculate the remaining amount the user can donate
            $remainingAmount = $project->budget - $projectProgress[$project->id]['totalDonatedAmount'];
            // dd($remainingAmount);
            if ($request->donate_amount <= $remainingAmount) {
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
            } else {
                return redirect()->back()->with('error', 'The amount of donation exceeds the remaining amount allowed');
            }
        }

        return redirect()->back()->with('error', 'Please enter a payment method and the amount');
    }


    public function storeformitem(Request $request)
    {

        if ($request->has('donate_item')) {
            $id = auth()->user()->id;
            $userProject = UserProject::create([
                'user_id' => $id,
                'donate_item' => $request->donate_item . " " . (int)$request->donate_itemNo,
                'project_id' => (int) $request->input('project_id')
            ]);

            $data['address'] = $request->address;
            $data['phone'] = $request->phone;
            User::where(['id' => $id])->update($data);

            return view('frontend.layouts.thx');
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

            return view('frontend.layouts.thx');
        }

        return redirect()->back();
    }
}
