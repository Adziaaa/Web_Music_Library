<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PopularSong_Controller;
use App\Http\Controllers\PopularArtistController;
use App\Http\Controllers\AlbumController;

class HomeCOntroller extends Controller
{
    public function show()
    {
        $songs = (new PopularSong_Controller)->show();
        $artists = (new PopularArtistController)->show();
        $albums = (new AlbumController)->show();

        return view('home', compact('songs', 'artists', 'albums'));
    }
}
