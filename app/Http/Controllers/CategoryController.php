<?php

namespace App\Http\Controllers;

use App\DataTables\CategoryDataTable;
use App\Models\Category;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use App\Models\Admin;


class CategoryController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryDataTable $dataTables)
    {
        // return view("admin.category.index");
        // if (session('loginId')) {
            // dd(session('admin_id'));
            // return 'hh';
            // $id =  session('loginId');
            // $admin = Admin::find($id);
            // dd($admin->name);
            // return view('admin.profile.profile', ['admin' => $admin]);
        
        
        return $dataTables->render('admin.category.index');
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:4192'],
            'name' => ['required', 'max:20'],
            'description' => ['required', 'max:1000'],
        ]);

        $category = new Category();

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $category->image =  $imagePath;
        $category->name = $request->name;
        $category->description = htmlspecialchars($request->description);
        $category->save();
        
        toastr('Created Successfully!', 'success');

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['image', 'max:4192'],
            'name' => ['required', 'max:20'],
            'description' => ['required', 'max:1000'],
        ]);

        $category = Category::findOrFail($id);
        $imagePath = $this->updateImage($request, 'image', 'uploads', $category->image);

        $category->image = empty(!$imagePath) ? $imagePath : $category->image;
        $category->name = $request->name;
        $category->description = htmlspecialchars( $request->description);
        // $category->image = $request->image;
        $category->save();

        toastr('Updated Successfully!', 'success');

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $category = Category::findOrFail($id);
        $this->deleteImage($category->image);
        $category->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
