<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;
use App\Models\User;


class AllProjectController extends Controller
{
    public function show($id=1)
    {
       
        
        $project = Project::where('categoty_id', $id)->get();
        return view('frontend.project.project')->with('project', $project);
    }
}


   