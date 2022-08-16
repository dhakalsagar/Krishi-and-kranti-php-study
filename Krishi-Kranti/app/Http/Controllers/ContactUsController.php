<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactUsController extends Controller
{

  public function showForm(Request $request) {
    return view('welcome');
  }

  public function ContactUsForm(Request $request) {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'subject'=>'required',
        'message' => 'required'
     ]);

     Contact::create($request->all());

    \Mail::send('mail', array(
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phone' => $request->get('phone'),
        'subject' => $request->get('subject'),
        'message' => $request->get('message'),
    ), function($message) use ($request){
        $message->from($request->email);
        $message->to('computerapplication44@gmail.com', 'Hello Admin')->subject($request->get('subject'));
    });

    return back()->with('success', 'Thanks for contacting us.');
  }

}