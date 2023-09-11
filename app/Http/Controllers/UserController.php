<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\Models\User;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ImageUploadTrait;
    public function profile()
    {
        return view('profile.edit');
    }
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('admin.users.index');
    }
    public function create()
    {
        return view('admin.users.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:4192'],
            'name' => ['required', 'max:20'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['required', 'digits:10'],
            'password' => ['required'],
        ]);

        $user = new User();

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $user->image = $imagePath;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->save();

        toastr('Updated Successfully', 'success');
        return redirect()->route('users.index');
    }



    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }



    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:4192'],
            'name' => ['required', 'max:20'],
            'email' => ['required', 'email'],
            'phone' => ['nullable', 'digits:10'],
        ]);

        $user = User::findOrFail($id);
        $imagePath = $this->updateImage($request, 'image', 'uploads', $user->image);

        $user->image = empty(!$imagePath) ? $imagePath : $user->image;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        toastr('Updated Successfully', 'success');

        return redirect()->route('users.index');
    }

    public function show(string $id)
    {
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $this->deleteImage($user->image);
        $user->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
