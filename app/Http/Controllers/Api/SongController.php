<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PopularSong;
use Illuminate\Http\Request;

class SongController extends Controller
{
    // Fetch all songs
    public function index()
    {
        $songs = PopularSong::all();
        return response()->json($songs, 200);
    }

    // Fetch a specific song by ID
    public function show($id)
    {
        $song = PopularSong::find($id);

        if (!$song) {
            return response()->json(['error' => 'Song not found'], 404);
        }

        return response()->json($song, 200);
    }
}
