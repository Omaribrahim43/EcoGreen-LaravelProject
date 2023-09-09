<?php

namespace App\Http\Controllers;

use App\DataTables\CategoryDataTable;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryDataTable $dataTables)
    {
        // return view("admin.category.index");
        return $dataTables->render('admin.category.index');

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
            'name' => ['required', 'max:20'],
            'description' => ['required', 'max:1000'],
            // 'image' => ['required'],
        ]);

        // $filename = '';
        // if ($request->hasFile('image')) {
        //     $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
        //     $request->image->move(public_path('/assets/img/'), $filename);
        // }

        $category = new Category();

        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $request->image;
        $category->save();

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
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
            'name' => ['required', 'max:20'],
            'description' => ['required', 'max:1000'],
            // 'image' => ['required', 'digits:10'],
        ]);

        $category = Category::findOrFail($id);

        $category->name = $request->name;
        $category->description = $request->description;
        // $category->image = $request->image;
        $category->save();


        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);

        return redirect()->route('category.index');

    }
}
