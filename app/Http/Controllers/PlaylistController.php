<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Song;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    // single playlist
    public function show($id)
    {
        $playlist = Playlist::findOrFail($id);
        $songs = Song::all(); 

        return view('playlist.show', compact('playlist', 'songs')); 
    }

    // all playlists
    public function index()
    {
        // Get all playlists from db
        $playlists = Playlist::all();

        \Log::info('Playlists:', $playlists->toArray());

        // view and pass the playlists
        return view('playlist.index', compact('playlists'));
    }

    // create playlist form
    public function create()
    {
        return view('playlist.create'); 
    }

    // new playlist
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Playlist::create([
            'name' => $request->name,
            'user_id' => auth()->id(), 
        ]);

        return redirect()->route('playlist.index')->with('success', 'Playlist created successfully!');
    }

    // add song to playlist
    public function addSong(Request $request, $playlistId)
    {
        $request->validate([
            'song_id' => 'required|exists:songs,id', 
        ]);

        $playlist = Playlist::findOrFail($playlistId);

        
        $playlist->songs()->attach($request->song_id);

        return redirect()->route('playlist.show', $playlistId)->with('success', 'Song added to playlist!');
    }
}
