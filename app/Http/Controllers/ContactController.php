<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
    Contact::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'subject'=>$request->subject,
        'message'=>$request->message,
    ]);
    return redirect('contact')->with('status','Your message has been sent. Thank you!');

    }
}
