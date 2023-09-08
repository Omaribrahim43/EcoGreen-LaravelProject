<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRqusert;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;



class ContactController extends Controller
{
    public function show()
    {
        return view('frontend.contact.show');
    }


    // public function submit(ContactRqusert $request)
    // {
    //     Mail::to('my.mail.com')->send(new ContactMail($request->name, $request->email, $request->phone, $request->subject, $request->message));

    //     return to_route('frontend.about.about');
    // }
}
