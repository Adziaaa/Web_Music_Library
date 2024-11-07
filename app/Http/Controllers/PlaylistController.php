<?php

namespace App\Http\Controllers;
use App\Models\Playlist;

class PlaylistController extends Controller
{
    // Method to show a single playlist
    public function show($id)
    {
        $playlists = Playlist::findOrFail($id);
        $songs = Song::all(); // Fetch all available songs
    
        return view('playlists.show', compact('playlist', 'songs'));
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

    public function create()
    {
        return view('playlists.create'); // Create a form view for creating playlists
    }

    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|string|max:255',
        'user_id' => 'required|exists:users,id', // Ensure user ID is valid
    ]);

    // Create the playlist
    $playlist = Playlist::create([
        'name' => $request->name,
        'user_id' => $request->user_id,
    ]);

    return redirect()->route('playlists.show', $playlist->id)->with('success', 'Playlist created successfully!');
    }

        public function addSong(Request $request, $playlistId)
    {
        $request->validate([
            'song_id' => 'required|exists:songs,id', // Ensure the song ID is valid
        ]);

        $playlist = Playlist::findOrFail($playlistId);

        // Attach the selected song to the playlist
        $playlist->songs()->attach($request->song_id);

        return redirect()->route('playlists.show', $playlistId)->with('success', 'Song added to playlist!');
    }

}

