<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;

use App\DataTables\AdminsDataTable;

class AddAdminController extends Controller
{
    use ImageUploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdminsDataTable $dataTables)
    {
       
            return $dataTables->render('admin.addAdmin.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addAdmin.create');
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
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['required', 'digits:10'],
            'password' => ['required'],
        ]);

        $admin = new Admin();

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $admin->image = $imagePath;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->password = bcrypt($request->password);
        $admin->save();

        toastr('Added Successfully', 'success');
        return redirect()->route('admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $addAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $addAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $addAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $addAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $addAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $addAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $addAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $admin = Admin::findOrFail($id);
        $this->deleteImage($admin->image);
        $admin->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
