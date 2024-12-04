<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function getSongs()
    {
        // Fetch all songs from the database
        $songs = Song::all();  // Or use more specific queries if needed

        return response()->json($songs);
    }
}
