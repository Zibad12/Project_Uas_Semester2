<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardGenresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genres::all();
        return view('dashboard.genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:genres|max:255',
        ]);
        Genres::create($validated);
        return redirect('/dashboard/genres')->with('success', 'Genre is successfully saved');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genre = Genres::findOrFail($id);
        return view('dashboard.genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $genre = Genres::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        $genre->update($validated);
        return redirect('/dashboard/genres')->with('success', 'Genre is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genre = Genres::findOrFail($id);
        $genre->delete();
        return redirect('/dashboard/genres')->with('success', 'Genre is successfully deleted');
    }
}
