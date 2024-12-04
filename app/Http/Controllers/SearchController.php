<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PopularSong;       // Import Song model
use App\Models\Album;      // Import Album model
use App\Models\PopularArtist;     // Import Artist model
//use App\Models\Playlist;   // Import Playlist model
use App\Models\User;       // Import User model

class SearchController extends Controller
{
    public function search(Request $request)
    {
            $query = $request->input('query');

        if (empty($query)) {
            return response()->json([], 200); // Return empty JSON if no query
        }

        try {
            // Search across songs, albums, artists, playlists, and profiles
            $songs = PopularSong::where('title', 'like', '%' . $query . '%')->limit(5)->get(['id', 'title', 'artist_id', 'image']);
            $albums = Album::where('title', 'like', '%' . $query . '%')->limit(5)->get(['id', 'title', 'artist_id', 'image']);
            $artists = PopularArtist::where('name', 'like', '%' . $query . '%')->limit(5)->get(['id', 'name', 'image']);
            //$playlists = Playlist::where('name', 'like', '%' . $query . '%')->limit(5)->get(['id', 'name', 'image']);
            $profiles = User::where('name', 'like', '%' . $query . '%')->limit(5)->get(['id', 'name']);

            // Combine results into a single response
            return response()->json([
                'songs' => $songs,
                'albums' => $albums,
                'artists' => $artists,
                //'playlists' => $playlists,
                'profiles' => $profiles,
            ], 200);
        } catch (\Exception $e) {
            // Return a JSON error response for debugging
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

