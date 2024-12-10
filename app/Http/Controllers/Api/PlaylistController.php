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

    // Create a new playlist
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id', // Ensure the user exists
        ]);

        $playlist = Playlist::create($validated);

        return response()->json(['message' => 'Playlist created successfully', 'playlist' => $playlist], 201);
    }

    // Update an existing playlist by ID
    public function update(Request $request, $id)
    {
        $playlist = Playlist::find($id);

        if (!$playlist) {
            return response()->json(['error' => 'Playlist not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255', // Optional
            'user_id' => 'sometimes|exists:users,id', // Optional
        ]);

        $playlist->update($validated);

        return response()->json(['message' => 'Playlist updated successfully', 'playlist' => $playlist], 200);
    }

    // Delete a playlist by ID
    public function destroy($id)
    {
        $playlist = Playlist::find($id);

        if (!$playlist) {
            return response()->json(['error' => 'Playlist not found'], 404);
        }

        $playlist->delete();

        return response()->json(['message' => 'Playlist deleted successfully'], 200);
    }
}
