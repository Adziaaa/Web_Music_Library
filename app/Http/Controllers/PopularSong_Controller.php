<?php

namespace App\Http\Controllers;

use App\Models\PopularSong;
use Illuminate\Http\Request;

class PopularSong_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        return PopularSong::all();
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

    $popularSong = new PopularSong();
    $popularSong->name = $request->name;
    $popularSong->title = $request->title;
    $popularSong->photo = $photoData;
    $popularSong->save();
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
