<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// app/Http/Controllers/PlaylistController.php

namespace App\Http\Controllers;

use App\Models\Playlist;  // Make sure you have the Playlist model
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function show($id)
    {
        // Find the playlist by ID or fail with a 404 error if not found
        $playlist = Playlist::findOrFail($id);

        // Return the view and pass the playlist data to it
        return view('playlists.show', compact('playlist'));
    }
}
