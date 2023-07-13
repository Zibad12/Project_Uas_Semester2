<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Genres;
use App\Models\Movies;
use App\Models\Countries;
use Illuminate\Http\Request;

class LandingMoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres= Genres::all();
        $countries= Countries::all();
        $movies = Movies::all();
        return view('landingpage.movies.index', compact('genres', 'countries', 'movies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Comments::create($request->all());
        return redirect()->back()->with('success', 'Comment added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genres= Genres::all();
        $countries= Countries::all();
        $movie = Movies::find($id);
        $latesmovies = Movies::orderBy('created_at', 'desc')->take(7)->get();
        $comments = Comments::where('movie_id', $id)->orderBy('created_at', 'desc')->get();
        return view('landingpage.movies.show', compact('genres', 'countries', 'movie', 'latesmovies', 'comments'));
    }
}
