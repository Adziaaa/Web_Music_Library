<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\RateLimiter;
>>>>>>> 3de4682 (Daniel Extension. DDOS DOS Bot protection)
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
<<<<<<< HEAD
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->validate([
            'description' => 'nullable|string|max:1000',
            'notify_on_new_album' => 'boolean'
=======
     * Update the user's profile information with rate-limiting.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {

        $throttleKey = 'profile_update_' . $request->user()->id;

        if (RateLimiter::tooManyAttempts($throttleKey, 3)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            return back()->withErrors([
                'rate_limit' => "Too many profile updates. Please try again in $seconds seconds.",
            ]);
        }

        $request->validate([
            'description' => 'nullable|string|max:1000',
            'notify_on_new_album' => 'boolean',
>>>>>>> 3de4682 (Daniel Extension. DDOS DOS Bot protection)
        ]);

        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
<<<<<<< HEAD
        
=======

>>>>>>> 3de4682 (Daniel Extension. DDOS DOS Bot protection)
        $request->user()->update([
            'description' => $request->description,
            'notify_on_new_album' => $request->notify_on_new_album,
        ]);

        $request->user()->save();

<<<<<<< HEAD
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
    
=======
        RateLimiter::hit($throttleKey, 3600); 

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

>>>>>>> 3de4682 (Daniel Extension. DDOS DOS Bot protection)
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

<<<<<<< HEAD
=======
    /**
     * Show the user's profile.
     */
>>>>>>> 3de4682 (Daniel Extension. DDOS DOS Bot protection)
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('profile.show', compact('user'));
    }
}
