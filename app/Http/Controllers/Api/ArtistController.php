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
}
