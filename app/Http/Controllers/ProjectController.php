<?php

namespace App\Http\Controllers;

use App\DataTables\ProjectsDataTable;
use App\Models\Project;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use App\Models\Category;




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
        $project->description = $request->description;
        $project->image = $request->image;
        $project->category_id = $request->input('category');
        $project->user_id = $request->input('category');
        $project->volunteering_number = $request->volunteeringnumber;
        $project->budget = $request->budget;
        $project->tree_type = $request->treetype;
        $project->fertilizer = $request->fertilizer;
        $project->equipments = $request->equipments;
        $project->save();

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show');
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
        return view('admin.projects.edit', compact('project'));
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
        $project->description = $request->description;
        $project->category_id = $request->input('category');
        $project->user_id = $request->input('category');
        $project->volunteering_number = $request->volunteeringnumber;
        $project->budget = $request->budget;
        $project->tree_type = $request->treetype;
        $project->fertilizer = $request->fertilizer;
        $project->equipments = $request->equipments;
        $project->save();

        // toastr('Updated Successfully', 'success');

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
