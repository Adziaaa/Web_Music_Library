<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    public function show(User $user) {
        $playlist = auth()->id() === $user->id ? $user->playlists : null;
        return view('user.show', compact('user', 'playlist'));
    }
}

