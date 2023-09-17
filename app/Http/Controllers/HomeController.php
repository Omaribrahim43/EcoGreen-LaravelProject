<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use App\Models\UserProject;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        $project = Project::all();

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
        $_PROGRESS= $progressPercentage;


         // Count the number of users
         $usersCount = User::whereNotNull('id')->count();
         
         // Count the number of projects
         $projectsCount = Project::whereNotNull('id')->count();

         // Concatenate 'budget' in all projects
         $projects = Project::whereNotNull('id')->get(); // Get all projects with a valid 'id'
         // Use the pluck method to extract the 'budget' values as an array
         $budgetsArray = $projects->pluck('budget')->toArray();

         // Calculate the sum of 'budget' values
         $totalBudget = array_sum($budgetsArray);
         

        return view('frontend.home.home', compact(['categories', 'project', 'projectProgress', 'usersCount', 
        'projectsCount', 'totalBudget']));
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
        
    }
    }