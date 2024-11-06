<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class searchFor extends Controller
{
    public function albumSearch($title, Request $request)
    {
        $album = Album::findOrFail($id);

        return view('albumPage', compact('title'));
    }
}
