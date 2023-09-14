<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;





class AdminController extends Controller
{
    use ImageUploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.dashboard');

       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       

        if(session('loginId')){
            // dd(session('admin_id'));
            // return 'hh';
            $id =  session('loginId');


            $admin = Admin::find($id);
          
            // $name =  session('loginimage');
            //     dd($name);

            // dd($admin->name);
            return view('admin.profile.profile', ['admin' => $admin]);



        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        // echo 'hhhhhh';
        // $request->validate([
        //     'image' => ['required', 'image', 'max:4192'],
        //     'name' => ['required', 'max:20'],
        //     'description' => ['required', 'max:1000'],
        // ]);

        $admin = Admin::findOrFail($id);
        // $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $imagePath = $this->updateImage($request, 'image', 'uploads', $admin->image);
        session(['loginimage' => $imagePath]);
        $admin->image = empty(!$imagePath) ? $imagePath : $admin->image;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        // $admin->image = $request->image;
        
        $admin->save();


        return redirect()->route('admin.profile');
    }

    public function updatePhoto(Request $request, $id)
    {
        // echo 'hhhhhh';
        // $request->validate([
        //     'image' => ['required', 'image', 'max:4192'],
        //     'name' => ['required', 'max:20'],
        //     'description' => ['required', 'max:1000'],
        // ]);

        $admin = Admin::findOrFail($id);
        // $imagePath = $this->updateImage($request, 'image', 'uploads', $admin->image);

        // $admin->image = empty(!$imagePath) ? $imagePath : $admin->image;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->image = $request->image;

        $admin->save();


        return redirect()->route('admin.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function resetPasswordPage()
    {
        return view('admin.profile.resetPassword');
    }


    

    // public function resetPassword(Request $request)
    // {

    //     if (session('loginId')) {
    //         // dd(session('admin_id'));
    //         // return 'hh';
    //         $id =  session('loginId');


    //         $admin = Admin::find($id);
    //     // $admin = Auth::guard('admin')->user();
    //     // $admin = Admin::findOrFail($id);


    //     // Validate the old password
    //     if (!Hash::check($request->input('old_password'), $admin->password)) {
    //         return back()->withErrors(['old_password' => 'The old password is incorrect.'])->withInput();
    //     }

    //     // Validate the new password and confirmation
    //     $request->validate([
    //         'old_password' => 'required',
    //         'password' => 'required|string|min:8|confirmed',
    //     ], [
    //         'old_password.required' => 'Please enter your old password.',
    //         'password.required' => 'Please enter your new password.',
    //         'password.min' => 'The new password must be at least 8 characters long.',
    //         'password.confirmed' => 'The new password and confirmation do not match.',
    //     ]);

    //     // Update the admin user's password
    //     $admin->update([
    //         'password' => Hash::make($request->input('password')),
    //     ]);

    //     return back()->with('success', 'Password updated successfully.');
    // }

    // }

    public function resetPassword(Request $request)
    {
    //     $request->validate([
    //             'old_password' => [
    //             'required',
    //             'min:8',
    //             'max:20',
    //         ],
    //             'new_password' => [
    //             'required',
    //             'min:8',
    //             'max:20',
    //             'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
    //         ],
    //         // 'confirmPassword' => [
    //         //     'required',
    //         //     'same:newPassword',
    //         // ],
    //     ],
    //      [
    //             'old_password.required' => 'The current password is required.',
    //             'old_password.min' => 'The current password must be at least :min characters.',
    //             'old_password.max' => 'The current password may not be greater than :max characters.',
    //             'new_password.required' => 'The new password is required.',
    //             'new_password.min' => 'The new password must be at least :min characters.',
    //             'new_password.max' => 'The new password may not be greater than :max characters.',
    //             'new_password.regex' => 'The new password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.',
    //         // 'confirmPassword.required' => 'The confirm password field is required.',
    //         // 'confirmPassword.same' => 'The confirm password and new password must match.',
    //     ]
    // );

        // $id = Auth::id();
        $id =  session('loginId');


        $admin = Admin::find($id);
        // dd($id);

        if (Hash::check($request->old_password, $admin->password)) {
            // The old password matches, update the password
            $admin->update([
                'password' => bcrypt($request->input('new_password'))
            ]);

        return back()->with('success', 'Password updated successfully.');
        } else {
            return back()->with('fail', 'Old password is incorrect.');

            // The old password does not match, handle the error
            // return redirect()->route('profile2.profile.index')->with('fail', 'Old password is incorrect');
        }
    }
    
}
