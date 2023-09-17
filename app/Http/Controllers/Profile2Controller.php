<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProject;
use App\Models\Project;
use Auth;
use Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use PDF;

class Profile2Controller extends Controller
{
    public function index()
    {
        // $user = User::all();
        $id = Auth::id();

        $user = User::find($id); // Replace $userId with the user's ID

        $projects = $user->projects; // This will fetch all posts associated with the user
        $project_ids = UserProject::where('user_id', $id)->pluck('project_id');

        // echo $project_ids;
        // $userProject = UserProject::all();
        // $userProject = UserProject::where('user_id', $id)->where('project_id', 1)->get();
        // // echo $userProject;
        // $amount = 0;
        // foreach ($userProject as $item){
        //     $amount += $item->donate_amount;
        // }

        // echo count($projects);

        // for($i = 1; $i < count($projects)+1 ; $i++){
        //     $userProject = UserProject::where('user_id', $id)->where('project_id', $i)->get();
        //     foreach ($userProject as $item) {
        //         $amount += $item->donate_amount;
        //     }
        //     echo $amount."<br>";
        //     $amount = 0;
        // };
        // $id = Auth::id();
        // $user = User::find($id); // Replace $userId with the user's ID

        // $project_ids = UserProject::where('user_id', $id)->pluck('project_id');
        // $projects = Project::whereIn('id', $project_ids)->get();                                
        // $amounts = [];

        // foreach ($projects as $project) {
        //     $userProjects = UserProject::where('user_id', $id)
        //         ->where('project_id', $project->id)
        //         ->get();
        //     $projectAmount = 0;
        //     foreach ($userProjects as $item) {
        //         $projectAmount += $item->donate_amount;
        //     }
        //     $amounts[$project->id] = $projectAmount;
        // }


        // // foreach ($projects as $project) {
        //     $userProjects = UserProject::where('user_id', $id)->get();
        //         // dd($userProjects);
        //     $projectItems = [];
        //     foreach ($userProjects as $item) {
        //         $projectItems[] = $item->donate_item;
        //     }
        //     // $amounts[$project->id] = $projectAmount;
        // // }
        // // dd($projectItems);

        $id = Auth::id();
        $user = User::find($id);

        $project_ids = UserProject::where('user_id', $id)->pluck('project_id');
        $projects = Project::whereIn('id', $project_ids)->get();

        $amounts = [];
        $items = [];
        $shifts = [];

        foreach ($projects as $project) {
            $userProjects = UserProject::where('user_id', $id)
            ->where('project_id', $project->id)
            ->get();

            $projectAmount = 0;
            $projectItems = [];
            $projectShifts = [];

            foreach ($userProjects as $item) {
                $projectAmount += $item->donate_amount;
                $projectItems[] = $item->donate_item;
                $projectShifts[] = $item->choosen_shift;
            }

            $amounts[$project->id] = $projectAmount;
            $items[$project->id] = $projectItems;
            $shifts[$project->id] = $projectShifts;
        }




// dd($shifts[$project->id]);
        //***************************************
                                
        return view('frontend.profile2.profile', compact('user', 'amounts','projects' , 'items' , 'shifts'));
        
    }

    public function edit(User $user)
    {
        return view('frontend.profile2.updateProfile', compact('user'));
    }

    public function update(Request $request)
    {

        $data['name'] = $request->name;
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;

        $filename = '';

        if ($request->hasFile('image')) {
            // dd($data);
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $data['image'] = $filename;
        } else {
            unset($data['image']);
        }
        $id = Auth::id();
        $user = User::find($id); // Replace $userId with the user's ID
        $projects = $user->projects; // This will fetch all posts associated with the user

        User::where(['id' => $id])->update($data);
        return redirect()->route('profile2.profile.index')->with([
            'success' => 'updated successfully'
        ]);


        $userProject = UserProject::all();
        dd($userProject->$id);






    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'oldPassword' => [
                'required',
                'min:8',
                'max:20',
            ],
            'newPassword' => [
                'required',
                'min:8',
                'max:20',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            ],
            'confirmPassword' => [
                'required',
                'same:newPassword',
            ],
        ], [
            'oldPassword.required' => 'The current password is required.',
            'oldPassword.min' => 'The current password must be at least :min characters.',
            'oldPassword.max' => 'The current password may not be greater than :max characters.',
            'newPassword.required' => 'The new password is required.',
            'newPassword.min' => 'The new password must be at least :min characters.',
            'newPassword.max' => 'The new password may not be greater than :max characters.',
            'newPassword.regex' => 'The new password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.',
            'confirmPassword.required' => 'The confirm password field is required.',
            'confirmPassword.same' => 'The confirm password and new password must match.',
        ]);

        $id = Auth::id();
        $user = User::find($id);

        if (Hash::check($request->oldPassword, $user->password)) {
            // The old password matches, update the password
            $user->update([
                'password' => bcrypt($request->newPassword)
            ]);

            return redirect()->route('profile2.profile.index')->with('success', 'Password updated successfully');
        } else {
            // The old password does not match, handle the error
            return redirect()->route('profile2.profile.index')->with('error', 'Old password is incorrect');
        }
    }

    public function destroy()
    {
        // Delete the user and their associated data
        Auth::user()->delete();

        // Log the user out
        Auth::logout();

        // Redirect to a confirmation page or wherever you want
        return redirect()->route('/')->with('success', 'Your account has been deleted.');
    }


    public function download()
    {
        $id = Auth::id();

        // Fetch the user and project information
        $user = auth()->user(); // You can adjust this to retrieve the user as needed
        // $projects = $user->projects; // Assuming you have a relationship set up
        $project_ids = UserProject::where('user_id', $id)->pluck('project_id');

        $projects = Project::whereIn('id', $project_ids)->get();

        $user = User::find($id); // Replace $userId with the user's ID

        $project_ids = UserProject::where('user_id', $id)->pluck('project_id');
        $projects = Project::whereIn('id', $project_ids)->get();
        // echo count($projects);
        $amounts = [];

        foreach ($projects as $project) {
            $userProjects = UserProject::where('user_id', $id)
            ->where('project_id', $project->id)
            ->get();
            $projectAmount = 0;
            foreach ($userProjects as $item) {
                $projectAmount += $item->donate_amount;
            }
            $amounts[$project->id] = $projectAmount;
        }


        // Load the HTML template
        $html = view('frontend.profile2.certificate_template', compact('user', 'projects','amounts'));

        // Generate PDF
        $pdf = PDF::loadHTML($html);

        // Optional: Set PDF options
        // $pdf->setOption('isPhpEnabled', true);

        // Save or download the PDF
        return $pdf->download('participation_certificate.pdf');
    }
}
