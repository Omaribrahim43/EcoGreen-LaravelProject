<?php

namespace App\Http\Controllers;

use App\Models\UserProject;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use App\Models\Quick_helps;

class Quickhelp extends Controller
{
    // public function storeQuickProject(Request $request)
    // {
    //     // $request->validate([
    //     //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     // ]);
    //     $imageName = time() . '.' . $request->image->extension();

    //     $request->image->move(public_path('images'), $imageName);
    //     $id = auth()->user()->id;
    //     $user = User::find($id);

    //     $Quickhelp = Quick_helps::create([
    //         'image' => $request->image,
    //         'title' => $request->title,
    //         'location' => $request->location,
    //         'short_description' => $request->short_description,
    //         'long_description' => $request->long_description,
    //         'start_day' => $request->start_day,
    //         'end_day' => $request->end_day,
    //         'volunteering_hours_start' => $request->volunteering_hours_start,
    //         'volunteering_hours_end' => $request->volunteering_hours_end,
    //         'user_id' => $id,
    //         'category_id1' => (int) $request->input('category_id1'),
    //         'category_id2' => (int) $request->input('category_id2'),
    //         'category_id3' => (int) $request->input('category_id3')

    //     ]);
    //     return view('frontend.helpProject.help-Donation_popup');
    // }

    // public function storeformDonation(Request $request)
    // {
    //     if ($request->has('budget') && $request->donate_amount != 0) {
    //         $id = auth()->user()->id;
    //         $user = User::find($id);


    //         $Quickhelp = Quickhelp::create([
    //             'budget' => $request->budget,
    //             'user_id' => $id,
    //             'category_id1' => (int) $request->input('category_id1')
    //         ]);
    //         return view('frontend.helpProject.help-Donation_popup');

    //     }
    //     return redirect()->back()->with('error', 'please enterBudget ');
    // }

    // public function storeformitem(Request $request)
    // {
    //     if ($request->has('donate_item')) {
    //         $id = auth()->user()->id;
    //         $user = User::find($id);

    //         $Quickhelp = Quickhelp::create([
    //             'user_id' => $id,
    //             'tree_type1' => $request->tree_type1,
    //             'tree_type_number1' => $request->tree_type_number1,

    //             'tree_type2' => $request->tree_type2,
    //             'tree_type_number2' => $request->tree_type_number2,

    //             'fertilizer' => $request->fertilizer,
    //             'fertilizer_Kg' => $request->fertilizer_Kg,

    //             'equipments1' => $request->equipments1,
    //             'equipments2' => $request->equipments2,
    //             'category_id2' => (int) $request->input('category_id2')
    //         ]);

    //         return view('frontend.helpProject.help-popup');
    //     }

    //     return redirect()->back();
    // }

    // public function storeformservice(Request $request)
    // {
    //     if ($request->has('choosen_shift')) {

    //         $id = auth()->user()->id;
    //         $user = User::find($id);

    //         $Quickhelp = Quickhelp::create([
    //             'choosen_service1' => $request->choosen_service1,
    //             'choosen_service2' => $request->choosen_service2,
    //             'choosen_service3' => $request->choosen_service3,
    //             'volunteering_number' => $request->volunteering_number,
    //             'user_id' => $id,
    //             'category_id3' => (int) $request->input('category_id3')

    //         ]);



    //         return view('frontend.layouts.thankyouPopUp');

    //     }
    // }
}