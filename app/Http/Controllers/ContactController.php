<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\RateLimiter;
>>>>>>> 3de4682 (Daniel Extension. DDOS DOS Bot protection)
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showContactForm()
    {
<<<<<<< HEAD
        return view('support'); 
=======
        return view('support');
>>>>>>> 3de4682 (Daniel Extension. DDOS DOS Bot protection)
    }

    public function sendEmail(Request $request)
    {
<<<<<<< HEAD
=======

        $throttleKey = 'contact_form_' . $request->ip();

        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            return response()->json([
                'message' => "Too many attempts. Please try again in $seconds seconds.",
                'timeLeft' => $seconds
            ], 429); 
        }

>>>>>>> 3de4682 (Daniel Extension. DDOS DOS Bot protection)
        $validatedData = $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required',
        ]);

        Mail::to('800.attari@gmail.com')->send(new ContactMail($validatedData));

<<<<<<< HEAD
=======
        RateLimiter::hit($throttleKey, 60); 

>>>>>>> 3de4682 (Daniel Extension. DDOS DOS Bot protection)
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
