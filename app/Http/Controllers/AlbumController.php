<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function show()
    {
        return Album::all();
    }

    public function find($id)
    {
        $album = Album::findOrFail($id);
        return view('album', compact('album'));
    }

    public function index()
    {
     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    
public function store(Request $request)
{
    $photo = $request->file('photo');
    $photoData = file_get_contents($photo);

    $albums = new Album();
    $albums->name = $request->name;
    $albums->title = $request->title;
    $albums->photo = $photoData;
    $albums->save();
}


    /**
     * Display the specified resource.
     */
   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
