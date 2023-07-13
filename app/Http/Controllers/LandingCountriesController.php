<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Countries;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Movies;

class LandingCountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Countries::all();
        $genres = Genres::all();
        return view('landingpage.countries.index', compact('genres', 'countries'));
    }
    public function show(string $id)
    {
        $genres = Genres::all();
        $countries = Countries::all();
        $country = Countries::find($id);
        $movies = Movies::where('country_id', $id)->get();
        return view('landingpage.countries.show', compact('genres', 'countries', 'movies', 'country'));
    }
}
