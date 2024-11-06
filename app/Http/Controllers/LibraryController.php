<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Song;
use App\Models\Playlist;
use App\Models\Artist;


class LibraryController extends Controller {
    public function index() {
        $albums = Album::with('song')->get();
        $songs = Song::all();
        // Check if the user is authenticated
        $playlists = auth()->check() ? auth()->user()->playlists : null;

        return view('library.index', compact('albums', 'songs', 'playlists'));
    }
}
