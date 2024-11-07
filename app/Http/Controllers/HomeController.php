<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PopularSong_Controller;
use App\Http\Controllers\PopularArtistController;
use App\Http\Controllers\AlbumController;

use App\Models\PopularArtist;
use App\Models\PopularSong;
use App\Models\Album;

class HomeController extends Controller
{
    public function show()
    {
        $songs = (new PopularSong_Controller)->show();
        $artists = (new PopularArtistController)->show();
        $albums = (new AlbumController)->show();

        return view('home', compact('songs', 'artists', 'albums'));
    }

    public function dashboard()
    {
        $songs = PopularSong::all();
        $albums = Album::all();
        $artists = PopularArtist::all();

        return view('dashboard', compact('songs', 'albums', 'artists'));
    }
}
