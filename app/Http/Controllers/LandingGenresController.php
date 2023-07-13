<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Movies;
use App\Models\Countries;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LandingGenresController extends Controller
{
    public function index()
    {
        $genres = Genres::all();
        $countries = Countries::all();
        return view('landingpage.genres.index', compact('genres', 'countries'));
    }
    public function show(string $id)
    {
        $genres = Genres::all();
        $countries = Countries::all();
        $genre = Genres::find($id);
        $movies = Movies::where('genre_id', $id)->get();
        return view('landingpage.genres.show', compact('genres', 'countries', 'movies', 'genre'));
    }
}
