<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    // Fetch all playlists
    public function index()
    {
        $playlists = Playlist::all();
        return response()->json($playlists, 200);
    }

    // Fetch a specific playlist by ID
    public function show($id)
    {
        $playlist = Playlist::find($id);

        if (!$playlist) {
            return response()->json(['error' => 'Playlist not found'], 404);
        }

        return response()->json($playlist, 200);
    }
}
