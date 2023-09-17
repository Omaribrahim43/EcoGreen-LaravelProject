<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Project;
use App\Models\User;

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
    
  


    public function count()
    {
         // Count the number of users
         $usersCount = User::whereNotNull('id')->count();
         // Count the number of admins
         $adminsCount = Admin::whereNotNull('id')->count();
         // Count the number of projects
         $projectsCount = Project::whereNotNull('id')->count();

         // Concatenate 'budget' in all projects
         $projects = Project::whereNotNull('id')->get(); // Get all projects with a valid 'id'
         // Use the pluck method to extract the 'budget' values as an array
         $budgetsArray = $projects->pluck('budget')->toArray();

         // Calculate the sum of 'budget' values
         $totalBudget = array_sum($budgetsArray);
         return view('frontend.home.home', compact('admin', 'usersCount', 'adminsCount', 'projectsCount', 'totalBudget'));
    }
    }