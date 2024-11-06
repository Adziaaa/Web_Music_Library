<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function show($id)
    {
        $album = Album::findOrFail($id);
        return view('album', compact('album'));
    }
}
