<?php

namespace App\Http\Controllers;
use App\Models\Playlist;

class PlaylistController extends Controller
{
    // Method to show a single playlist
    public function show($id)
    {
        // Find the playlist by ID or fail with a 404 error if not found
        $playlist = Playlist::findOrFail($id);

        // Return the view and pass the playlist data to it
        return view('playlists.show', compact('playlist'));
    }

    // Method to list all playlists
    public function index()
    {
        // Get all playlists from the database
        $playlists = Playlist::all();

        \Log::info('Playlists:', $playlists->toArray());


        // Return the view and pass the playlists
        return view('playlist.index', compact('playlists'));
    }
}

