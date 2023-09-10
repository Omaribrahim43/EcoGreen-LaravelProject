<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.home');
    }

    public function about()
    {
        return view('frontend.about.about');
    }
  
}
