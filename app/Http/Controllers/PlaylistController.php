<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;

class PlaylistController extends Controller
{
    public function index()
    {
        $playlist = Playlist::all(); // Fetch data
        return view('index', compact('playlist'));
    }

    // Create a new playlist
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|integer',
            'genre' => 'required|string|max:255',
        ]);

        //$playlist = Playlist::create($validated);

        $playlist = new Playlist();
        $playlist->name = $request->input('name');
        $playlist->duration = $request->input('duration');
        $playlist->genre = $request->input('genre');
        $playlist->user_id = auth()->id(); 
        $playlist->save();

        return redirect('/index');
    }

    public function edit($id)
    {
        $playlist = Playlist::findOrFail($id); 
        return view('edit', compact('playlist'));
    }
    
    public function create()
    {
        return view('create');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|integer',
            'genre' => 'required|string|max:255',
        ]);
    
        $playlist = Playlist::findOrFail($id);
    
        $playlist->update([
            'name' => $request->name,
            'duration' => $request->duration,
            'genre' => $request->genre,
        ]);
    
        return redirect('/index');
    }
    

    

    public function destroy($id)
    {
        $playlist = Playlist::findOrFail($id);
        $playlist->delete();
        return back();
    }
}
