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
        $popularsong = (new PopularSong_Controller)->show();
        $popularartists = (new PopularArtistController)->show();
        $popularalbum = (new AlbumController)->show();

        return view('home', compact('popularsong', 'popularartists', 'popularalbum'));
    }
}
