<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Playlist;
use App\Models\PopularSong;


class PlaylistController
{
    public function index()
    {
        $playlists = Playlist::where('user_id', auth()->id())->get();
    
        return view('profile.playlist.index', ['playlists' => $playlists]);
    }
    
    


    public function create()
    {
        return view('profile.playlist.create');
    }

    public function show($id)
    {
        $playlist = Playlist::with('songs')->find($id);
        $songs = PopularSong::all(); 

        return view('profile.playlist.show', compact('playlist', 'songs'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',    
        ]);
    
        $playlist = new Playlist();
        $playlist->name = $request->input('name');
        $playlist->user_id = auth()->id(); 
        $playlist->save();
    
        return redirect()->route('playlists.show', ['id' => $playlist->id])
                         ->with('success', 'Playlist created successfully!');
    }
    



    public function edit(Playlist $playlist)
    {
        // Show form to edit a playlist
        return view('profile.playlist.edit', compact('playlist'));
    }

    public function update(Request $request, Playlist $playlist)
    {
        // Update playlist details
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $playlist->update($validatedData);

        return redirect()->route('profile.playlist.index')->with('success', 'Playlist updated successfully.');
    }

    public function destroy(Playlist $playlist)
    {
        // Delete a playlist
        $playlist->delete();

        return redirect()->route('profile.playlist.index')->with('success', 'Playlist deleted successfully.');
    }
    public function addSong(Request $request, $playlistId)
    {
        $playlist = Playlist::findOrFail($playlistId);  
        $popularSong = PopularSong::findOrFail($request->song_id);  

        $playlist->songs()->attach($popularSong->id);

        return redirect()->route('playlists.show', $playlistId)
                        ->with('success', 'Song added to playlist!');
    }

    public function removeSong(Request $request, Playlist $playlist, PopularSong $song)
    {
        if ($playlist->user_id !== auth()->id()) {
            return redirect()->route('playlists.index')->with('error', 'Unauthorized action.');
        }

        $playlist->songs()->detach($song->id);

        return redirect()->route('playlists.show', ['playlist' => $playlist->id])
                        ->with('success', 'Song removed successfully!');
    }

}