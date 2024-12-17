<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PopularSong;       // Import Song model
use App\Models\Album;      // Import Album model
use App\Models\PopularArtist;     // Import Artist model
use App\Models\Playlist;   // Import Playlist model
use App\Models\User;       // Import User model
use HTMLPurifier;
use HTMLPurifier_Config;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $query = $request->input('query');
        $query = $purifier->purify($request->input('query'));
        
        if (empty($query)) {
            return response()->json([
                'songs' => [],
                'albums' => [],
                'artists' => [],
                'playlists' => [],
                'profiles' => [],
            ], 200);
        }
    
        try {
            $query = trim($query); // Clean up the input
    
            $songs = PopularSong::whereRaw('LOWER(title) = ?', [$query])
                ->orWhereRaw('LOWER(title) LIKE ?', ["{$query}%"])
                ->distinct()
                ->limit(3)
                ->get(['id', 'title', 'artist_id', 'image']);
            
            $albums = Album::whereRaw('LOWER(title) = ?', [$query])
                ->orWhereRaw('LOWER(title) LIKE ?', ["{$query}%"])
                ->distinct()
                ->limit(3)
                ->get(['id', 'title', 'artist_id', 'image']);
            
            $artists = PopularArtist::whereRaw('LOWER(name) = ?', [$query])
                ->orWhereRaw('LOWER(name) LIKE ?', ["{$query}%"])
                ->distinct()
                ->limit(3)
                ->get(['id', 'name', 'image']);
            
            $playlists = Playlist::whereRaw('LOWER(name) = ?', [$query])
                ->orWhereRaw('LOWER(name) LIKE ?', ["{$query}%"])
                ->distinct()
                ->limit(5)
                ->get(['id', 'name', 'image']);
            
            $profiles = User::whereRaw('LOWER(name) LIKE ?', ["%{$query}%"])
                ->orWhereRaw('LOWER(name) LIKE ?', ["{$query}%"])
                ->distinct()
                ->limit(3)
                ->get(['id', 'name']);
        
            $response = response()->json([
                'songs' => $songs,
                'albums' => $albums,
                'artists' => $artists,
                'playlists' => $playlists,
                'profiles' => $profiles,
            ], 200);

            $response->headers->set('Content-Security-Policy', 
            "script-src 'self'");

            return $response;
    
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'songs' => [],
                'albums' => [],
                'artists' => [],
                'playlists' => [],
                'profiles' => [],
            ], 500);
        }
    }
}

