<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Project;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $project = Project::all();
        
        return view('frontend.home.home', compact(['categories', 'project']));
    }

    public function about()
    {
        return view('frontend.about.about');
    }

    public function nav()
    {
        $categories = Category::all();
        // $project = Project::all();
        return view('frontend.layouts.master', compact(['categories']));
    }
    }
  

