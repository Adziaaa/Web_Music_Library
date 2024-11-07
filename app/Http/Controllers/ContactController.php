<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact'); // This should match the name of your Blade file
    }

    public function sendEmail(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required',
        ]);

        Mail::to('800.attari@gmail.com')->send(new ContactMail($validatedData));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
