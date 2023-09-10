<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class Profile2Controller extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('frontend.profile2.profile', compact('user'));
    }

    public function edit(Request $request)
    {
        // return view('frontend.profile2.updateProfile', compact('user'));

        return view('frontend.profile2.updateProfile', [
            'user' => $request->user(),
        ]);
    }

    public function update(Request $request, User $user)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:admins,email,' . $user->id,
        //     // 'phone' => 'required|numeric',
        //     // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp', // Adjust validation rules as needed
        // ]);

        // // Upload and store the image
        // // $image = $request->file('image');
        // // $imageName = time() . '.' . $image->getClientOriginalExtension();
        // // $image->move(public_path('images/admins'), $imageName);


        // $user->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     // 'phone' => $request->phone,
        //     // 'image' => $imageName,
        // ]);

        // if (!$user->save()) {
        //     return redirect()->route('frontend.profile2.edit')->with('error', 'Error updating admin.');
        // }

        // return redirect()->route('frontend.profile2.index')->with('success', 'Admin updated successfully');

        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile2.profile.index')->with('status', 'profile-updated');
    }
}
