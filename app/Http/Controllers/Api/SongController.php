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

    // Create a new song
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'duration' => 'required|integer',
            'artist_id' => 'required|exists:artists,id',
            'album_id' => 'nullable|exists:albums,id',
        ]);

        $song = PopularSong::create($validated);

        return response()->json(['message' => 'Song created successfully', 'song' => $song], 201);
    }

    // Update an existing song
    public function update(Request $request, $id)
    {
        $song = PopularSong::find($id);

        if (!$song) {
            return response()->json(['error' => 'Song not found'], 404);
        }

        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'duration' => 'sometimes|integer',
            'album_id' => 'sometimes|nullable|exists:albums,id',
        ]);

        $song->update($validated);

        return response()->json(['message' => 'Song updated successfully', 'song' => $song], 200);
    }

    // Delete a song
    public function destroy($id)
    {
        $song = PopularSong::find($id);

        if (!$song) {
            return response()->json(['error' => 'Song not found'], 404);
        }

        $song->delete();

        return response()->json(['message' => 'Song deleted successfully'], 200);
    }
}
