<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class searchFor extends Controller
{
    public function albumSearch($title, Request $request)
    {
        $title = $request->input('search');

        return view('albumPage', compact('title'));
    }
}
