<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller {
    public function show(Song $songs) {
        return view('songs.show', compact('songs'));
    }
}
