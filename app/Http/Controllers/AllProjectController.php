<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;
use App\Models\User;


class AllProjectController extends Controller
{
    public function show($id = null)
{
    if($id != null){
        $project = Project::where('category_id', $id)->get();
        return view('frontend.project.project')->with('project', $project);
    } else {
        $project = Project::all();
        return view('frontend.project.project')->with('project', $project);
    }



}

// public function show($id = null)
// {
//     if($id != null){
//         $project = Project::where('categoty_id', $id)->get();
        
//         if($id == 1){
//             return redirect()->route(('All.DProject'),compact('project', $project));
//         }elseif($id == 2){
//             return redirect()->route('All.SProject')->with('project', $project);
//         }elseif($id == 3){
//             return redirect()->route('All.IProject')->with('project', $project);
//         }
//     }else {
//         $project = Project::all();
//         return view('frontend.project.project')->with('project', $project);
//     }
// }

    
}




   