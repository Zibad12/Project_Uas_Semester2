<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Movies;
use App\Models\Countries;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardMoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movies::all();
        return view('dashboard.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genres::all();
        $countries = Countries::all();
        return view('dashboard.movies.create', compact('genres', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'poster_url' => 'required|url',
            'description' => 'required',
            'release_date' => 'required|date',
            'country_id' => 'required|exists:countries,id',
            'genre_id' => 'required|exists:genres,id',
            'video_url' => 'required|url',
            'rating' => 'required|numeric|min:0|max:10',
        ]);
        Movies::create($validated);
        return redirect('/dashboard/movies')->with('success', 'Movie is successfully saved');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movies::findOrFail($id);
        return view('dashboard.movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movies::findOrFail($id);
        $genres = Genres::all();
        $countries = Countries::all();
        return view('dashboard.movies.edit', compact('movie', 'genres', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $movie = Movies::findOrFail($id);
        $validated = $request->validate([
            'title' => 'required|max:255',
            'poster_url' => 'required|url',
            'description' => 'required',
            'release_date' => 'required|date',
            'country_id' => 'required|exists:countries,id',
            'genre_id' => 'required|exists:genres,id',
            'video_url' => 'required|url',
            'rating' => 'required|numeric|min:0|max:10',
        ]);
        $movie->update($validated);
        return redirect('/dashboard/movies')->with('success', 'Movie is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movies::findOrFail($id);
        $movie->delete();
        return redirect('/dashboard/movies')->with('success', 'Movie is successfully deleted');
    }
}
