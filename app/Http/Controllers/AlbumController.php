<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller {
    public function show(Albums $albums) {
        $albums->load('songs', 'artist');
        return view('albums.show', compact('albums'));
    }
}

