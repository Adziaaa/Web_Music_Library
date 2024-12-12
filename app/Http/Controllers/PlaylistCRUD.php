<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlaylistCrudmodel;

class PlaylistCRUD extends Controller
{
    public function index()
    {
        $crud = PlaylistCrudmodel::all(); // Fetch data
        return view('index', compact('crud'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'duration' => 'required|integer',
            'genre' => 'required|string|max:255',
        ]);

        PlaylistCrudmodel::create($validated);

        return redirect('/index');
    }

    public function edit($id)
    {
        $crud = PlaylistCrudmodel::findOrFail($id); 
        return view('edit', compact('crud'));
    }
    
    public function create()
    {
        return view('create');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'duration' => 'required|integer',
            'genre' => 'required|string|max:255',
        ]);
    
        $crud = PlaylistCrudmodel::findOrFail($id);
    
        $crud->update([
            'name' => $request->name,
            'title' => $request->title,
            'duration' => $request->duration,
            'genre' => $request->genre,
        ]);
    
        return redirect('/index');
    }
    

    

    public function destroy($id)
    {
        $crud = PlaylistCrudmodel::findOrFail($id);
        $crud->delete();
        return back();
    }
}
