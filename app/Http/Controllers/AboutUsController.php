<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function home()
    {
       
        $data = Category::all();
        $project= Project::all();
        return view('frontend.home.home', compact(['data', 'project']));
    }

    
}
