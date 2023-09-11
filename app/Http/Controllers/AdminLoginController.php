<?php

namespace App\Http\Controllers;


use App\Models\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use session;
use Illuminate\Support\Facades\Session;






class AdminLoginController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     // $this->middleware('custom_middleware')->except(['create', 'store']);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login.loginAdmin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $admin = Admin::where('email', $request->email)->first();
        // dd($user);
        if ($admin) {
            if (Hash::check($request->password, $admin->password)) {
                // session(['admin_id' => $admin->id]);
                $request->session()->put('loginId', $admin->id);
                session()->put('loginname', $admin->name);
                session()->put('loginimage', $admin->image);

                // $name =  session('loginimage');
                // dd($name);
                return redirect('admin/dashboard');
            } else {
                return back()->with('fail', 'Password incorrect');
            }
            // return view('admin/dashboard', ['admin' => $admin]);
        } else {
            // return
            //     redirect('admin/login')->with('fail', 'This email is not registered');
            return back()->with('fail', 'This email is not registered');
        }
    }

    public function dashboard()
    {

        $admin = array();
        if (Session::has('loginId')) {
            $admin = Admin::where('id', Session::get('loginId'))->first();
            // dd($admin);
        }
        return view('admin.dashboard', compact('admin'));
    }



    public function noe(Request $request, $id)
    {

        // // Find the user with the specified ID
        // $admin = Admin::find($id);

        // if ($admin) {
        //     // Log out the user
        //     // Auth::guard()->logout();
        //     $this->guard()->logout();


        //     // Invalidate the session
        //     $request->session()->invalidate();

        //     // Redirect to the login page
        //     return $this->loggedOut($request) ?: redirect('admin/login');
        // } else {
        //     // User with the specified ID not found, handle the error
        //     // You can return a response or redirect to an error page
        //     // Example:
        //     return redirect()->back()->with('error', 'User not found.');
        // }
    }

    public function logout(Request $request)
    {
        // Auth::guard('web')->logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        // return redirect('admin/login');
        if (Session::has('loginId')) {
            session::pull('loginId');
            return redirect('admin/login');
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
