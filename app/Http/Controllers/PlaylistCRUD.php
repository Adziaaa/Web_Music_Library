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
        $post = PlaylistCrudmodel::findOrFail($id); // Use singular 'post'
        return view('edit1');
    }
    public function create()
    {

        return view('create1');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'duration' => 'required|integer',
            'genre' => 'required|string|max:255',
        ]);

        $crud = PlaylistCrudmodel::findOrFail($id);
        $crud->update($validated);

        return redirect('/index');
    }

    public function destroy($id)
    {
        $crud = PlaylistCrudmodel::findOrFail($id);
        $crud->delete();
        return back();
    }
}
