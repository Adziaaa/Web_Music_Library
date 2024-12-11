<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    // Fetch all albums
    public function index()
    {
        $albums = Album::all();
        return response()->json($albums, 200);
    }

    // Fetch a specific album by ID
    public function show($id)
    {
        $album = Album::find($id);

        if (!$album) {
            return response()->json(['error' => 'Album not found'], 404);
        }

        return response()->json($album, 200);
    }

    // Create a new album
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'song_count' => 'required|integer',
            'artist_id' => 'required|exists:artists,id',
            'image' => 'nullable|url',
            'duration' => 'nullable|integer',
            'release_date' => 'nullable|date',
        ]);

        $album = Album::create($validated);

        return response()->json(['message' => 'Album created successfully', 'album' => $album], 201);
    }

    // Update an existing album
    public function update(Request $request, $id)
    {
        $album = Album::find($id);

        if (!$album) {
            return response()->json(['error' => 'Album not found'], 404);
        }

        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'song_count' => 'sometimes|integer',
            'artist_id' => 'sometimes|exists:artists,id',
            'image' => 'sometimes|nullable|url',
            'duration' => 'sometimes|nullable|integer',
            'release_date' => 'sometimes|nullable|date',
        ]);

        $album->update($validated);

        return response()->json(['message' => 'Album updated successfully', 'album' => $album], 200);
    }

    // Delete an album
    public function destroy($id)
    {
        $album = Album::find($id);

        if (!$album) {
            return response()->json(['error' => 'Album not found'], 404);
        }

        $album->delete();

        return response()->json(['message' => 'Album deleted successfully'], 200);
    }
}
