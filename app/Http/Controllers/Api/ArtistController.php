<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PopularArtist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    // Fetch all artists
    public function index()
    {
        $artists = PopularArtist::all();
        return response()->json($artists, 200);
    }

    // Fetch a specific artist by ID
    public function show($id)
    {
        $artist = PopularArtist::find($id);

        if (!$artist) {
            return response()->json(['error' => 'Artist not found'], 404);
        }

        return response()->json($artist, 200);
    }

    // Create a new artist
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|url',
        ]);

        $artist = PopularArtist::create($validated);

        return response()->json(['message' => 'Artist created successfully', 'artist' => $artist], 201);
    }

    // Update an existing artist
    public function update(Request $request, $id)
    {
        $artist = PopularArtist::find($id);

        if (!$artist) {
            return response()->json(['error' => 'Artist not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'bio' => 'sometimes|nullable|string',
            'image' => 'sometimes|nullable|url',
        ]);

        $artist->update($validated);

        return response()->json(['message' => 'Artist updated successfully', 'artist' => $artist], 200);
    }

    // Delete an artist
    public function destroy($id)
    {
        $artist = PopularArtist::find($id);

        if (!$artist) {
            return response()->json(['error' => 'Artist not found'], 404);
        }

        $artist->delete();

        return response()->json(['message' => 'Artist deleted successfully'], 200);
    }
}
