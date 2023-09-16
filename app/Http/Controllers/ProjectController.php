<?php

namespace App\Http\Controllers;

use App\DataTables\ProjectsDataTable;
use App\DataTables\ShowDonateorsDataTable;
use App\Models\Project;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\UserProject;
use App\Models\User;





class ProjectController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProjectsDataTable $dataTables)
    {
        // return view('admin.projects.index');
        return $dataTables->render('admin.projects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.projects.create');

        $category = Category::all();
        return view('admin.projects.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'location' => ['required', 'string', 'max:255'], // Adjust max length as needed for addresses
        //     'startday' => ['required', 'date'],
        //     'endday' => ['required', 'date', 'after:startday'], // Ensure endday is after startday
        //     'starthour' => ['required', 'string'],
        //     'endhour' => ['required', 'string'],
        //     'volunteeringdays' => ['required', 'string'],
        //     'status' => ['required', 'string', 'max:255', 'in:active,inactive'],
        //     'long_description' => ['required', 'string', 'max:1000'], // Adjust the max length as needed
        //     'short_description' => ['required', 'string', 'max:255'],
        //     'image' => ['required', 'image'], // You might want to validate the image file more thoroughly
        //     'category' => ['required', 'integer', 'exists:categories,id'], // Validate existence in a categories table
        //     'volunteeringnumber' => ['nullable', 'integer', 'min:1'], // Minimum value of 1
        //     'budget' => ['nullable', 'numeric', 'min:0'],
        //     'treetype' => ['nullable', 'string', 'max:255'],
        //     'fertilizer' => ['nullable', 'integer', 'min:0'], // Minimum value of 0
        //     'equipments' => ['nullable', 'array'], // Assuming this is an array
        // ]);


        $project = new Project();


        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $project->image = $imagePath;
        $project->title = $request->name;
        $project->location = $request->location;
        $project->start_day = $request->startday;
        $project->end_day = $request->endday;
        $project->volunteering_hours_start = $request->starthour;
        $project->volunteering_hours_end = $request->endhour;
        $project->volunteering_days = $request->volunteeringdays;
        $project->status = $request->input('status');
        $project->short_description = $request->short_description;
        $project->long_description = htmlspecialchars($request->long_description);
      
        // $project->image = $request->image;
        $project->category_id = $request->input('category');
        $project->user_id = $request->input('category');
        $project->volunteering_number = $request->volunteeringnumber;
        $project->budget = $request->budget;
        $project->tree_type = $request->treetype;
        $project->fertilizer = $request->fertilizer;
        $project->equipments = $request->equipments;
        $project->save();

        toastr('Created Successfully!', 'success');

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    // public function show(ShowDonateorsDataTable $dataTable, Project $project)
    // {


    //     $userProject = UserProject::where('project_id', $project->id)->first();
    //     // dd($userProject);

    //     if (!$userProject) {
    //         // Handle the case where there is no UserProject record for the project
    //         // abort(404); // You can customize this error handling
    //         return "No Donator";
    //     } else {

    //         // Load the related user (donator) data
    //         // $userProject->load('user');
    //         //    $userProject->load('users')->name;
    //         // Assuming you have a category name
    //         $categoryName = $project->category->name;

    //         if ($categoryName === 'Money Donation') {
    //             return $dataTable->render('admin.projects.showMoney', compact('project', 'userProject'));
    //             // $dataTables->render('admin.projects.index');
    //         } elseif ($categoryName === 'Items Donation') {
    //             return view('admin.projects.showItems', compact('project', 'userProject'));
    //         } elseif ($categoryName === 'Service Donation') {
    //             return view('admin.projects.showService', compact('project', 'userProject'));
    //         } else {
    //             return view('admin.projects.showGeneral', compact('project', 'userProject'));
    //         }
    //     }
    // }

    //     public function show(Project $project)
    //     {

    //         $userProject = UserProject::where('project_id', $project->id)->get();
    //         // dd($userProject);
    //         // $users = UserProject::with('user')->where('user_id', '=', $userId)->get();

    //         // Retrieve the user IDs from the UserProjects table
    //         $userIds = UserProject::pluck('user_id')->unique()->toArray();

    //         // Retrieve the users based on the user IDs
    //         $users = User::whereIn('id', $userIds)->get();

    // // Now, $users contains the users whose IDs exist in the UserProjects table

    //         if (!$userProject) {
    //             // Handle the case where there is no UserProject record for the project
    //             // abort(404); // You can customize this error handling
    //             return "No Donator";
    //         }
    //         else{

    //             // Load the related user (donator) data
    //         // $userProject->load('user');
    //     //    $userProject->load('users')->name;
    //         // Assuming you have a category name
    //         $categoryName = $project->category->name;

    //         if ($categoryName === 'Money Donation') {
    //             return view('admin.projects.showMoney', compact('project', 'userProject', 'users'));
    //                 // $dataTables->render('admin.projects.index');
    //         } elseif ($categoryName === 'Items Donation') {
    //             return view('admin.projects.showItems', compact('project', 'userProject', 'users'));
    //         } elseif ($categoryName === 'Service Donation') {
    //             return view('admin.projects.showService', compact('project', 'userProject', 'users'));
    //         } else {
    //             return view('admin.projects.showGeneral', compact('project', 'userProject', 'users'));
    //         }
    //         }


    //     }

    public function show(Project $project)
    {

        $userProject = UserProject::where('project_id',$project->id)->get();
        // dd($userProject);
        // $users = UserProject::with('user')->where('user_id', '=', $userId)->get();

        
            // Load the related user (donator) data
            // $userProject->load('user');
            //    $userProject->load('users')->name;
            // Assuming you have a category name
            $categoryName = $project->category->name;

            if ($categoryName === 'Financial Donation') {
                return view('admin.projects.showMoney', compact('project', 'userProject'));
                // $dataTables->render('admin.projects.index');
            } elseif ($categoryName === 'Items Donation') {
                return view('admin.projects.showItems', compact('project', 'userProject'));
            } elseif ($categoryName === 'Service Donation'
            ) {
                return view('admin.projects.showService', compact('project', 'userProject'));
            } else {
                return view('admin.projects.showGeneral', compact('project', 'userProject'));
            }
        }
    



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        $category = Category::all();        // dd($category);
        return view('admin.projects.edit', compact('project', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'name' => ['required', 'max:20'],
        //     'location' => ['required', 'email', 'unique:users,email'],
        //     'startday' => ['required', 'digits:10'],
        //     'endday' => ['required'],
        //     'starthour' => ['required', 'max:20'],
        //     'endhour' => ['required', 'email', 'unique:users,email'],
        //     'volunteeringdays' => ['required', 'digits:10'],
        //     'status' => ['required'],
        //     'description' => ['required', 'max:20'],
        //     'image' => ['required', 'email', 'unique:users,email'],
        //     'category' => ['required', 'digits:10'],
        //     'volunteeringnumber' => ['required'],
        //     'budget' => ['required', 'max:20'],
        //     'treetype' => ['required', 'email', 'unique:users,email'],
        //     'fertilizer' => ['required', 'digits:10'],
        //     'equipments' => ['required'],
        // ]);


        $project = Project::findOrFail($id);
        $imagePath = $this->updateImage($request, 'image', 'uploads', $project->image);

        $project->image = empty(!$imagePath) ? $imagePath : $project->image;

        $project->title = $request->name;
        $project->location = $request->location;
        $project->start_day = $request->startday;
        $project->end_day = $request->endday;
        $project->volunteering_hours_start = $request->starthour;
        $project->volunteering_hours_end = $request->endhour;
        $project->volunteering_days = $request->volunteeringdays;
        $project->status = $request->input('status');
        $project->long_description = htmlspecialchars($request->long_description);
        $project->category_id = $request->input('category');
        $project->user_id = $request->input('category');
        $project->volunteering_number = $request->volunteeringnumber;
        $project->budget = $request->budget;
        $project->tree_type = $request->treetype;
        $project->fertilizer = $request->fertilizer;
        $project->equipments = $request->equipments;
        $project->save();

        toastr('Updated Successfully', 'success');

        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $this->deleteImage($project->image);
        $project->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
