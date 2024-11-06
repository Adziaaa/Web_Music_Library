<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('profile.show', compact('user'));
    }
}
