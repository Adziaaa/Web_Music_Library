<?php

namespace App\Http\Controllers;

use App\Models\PopularArtist;
use Illuminate\Http\Request;

class PopularArtistController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function show()
    {
        return PopularArtist::all();
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

    $artists = new PopularArtist();
    $artists->name = $request->name;
    $artists->photo = $photoData;
    $artists->save();
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
