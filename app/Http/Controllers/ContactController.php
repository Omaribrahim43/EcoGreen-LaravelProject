<?php

namespace App\Http\Controllers;

use App\Models\Contactt;

// use App\Model\Contactt;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Contactt as ModelsContactt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\DataTables\MessagesDataTable;

use function Ramsey\Uuid\v1;

class ContactController extends Controller
{
    public function showContact()
    {
       
        return view('frontend.contact.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);

        ModelsContactt::create($request->all());

 

        Session::flash('success', 'Thank you for contacting us. We will contact you shortly.');
      

        return redirect()->route('show.contact');
    }



    public function index(MessagesDataTable $dataTables)
    {
        // if (session('loginId')) {
        //     // dd(session('admin_id'));
        //     // return 'hh';
        //     $id =  session('loginId');
        //     $admin = Admin::find($id);
        return $dataTables->render('admin.messages.index');
        // }
    }


    public function destroy($id)
    {
        $admin = Contactt::findOrFail($id);
        $admin->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
