<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
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
            'name' => ['required', 'max:20'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['required', 'digits:10'],
            'password' => ['required'],
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->save();

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
            'name' => ['required', 'max:20'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'digits:10'],
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        // toastr('Updated Successfully', 'success');

        return redirect()->route('users.index');
    }

    public function show(string $id)
    {
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
