<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlaylistController
{
    public function show($id)
    {
        $playlist = Playlist::findOrFail($id);
        return view('playlist.show', compact('playlist'));
    }
}
