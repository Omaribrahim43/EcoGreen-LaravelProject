<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Project;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Category::all();
        $project = Project::all();
        return view('frontend.home.home', compact(['data', 'project']));
    }

    public function about()
    {
        return view('frontend.about.about');
    }
  
}
