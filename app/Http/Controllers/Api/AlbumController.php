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
}
