<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
>>>>>>> 3de4682 (Daniel Extension. DDOS DOS Bot protection)
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('support'); 
        return view('support'); 
=======
        return view('support');
>>>>>>> 3de4682 (Daniel Extension. DDOS DOS Bot protection)
        return view('support');
=======
        return view('support');
>>>>>>> 3de4682 (Daniel Extension. DDOS DOS Bot protection)
    }

    public function sendEmail(Request $request)
    {

        $throttleKey = 'contact_form_' . $request->ip();

        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            return response()->json([
                'message' => "Too many attempts. Please try again in $seconds seconds.",
                'timeLeft' => $seconds
            ], 429); 
        }

        $validatedData = $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required',
        ]);

        Mail::to('800.attari@gmail.com')->send(new ContactMail($validatedData));

        RateLimiter::hit($throttleKey, 60); 

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
