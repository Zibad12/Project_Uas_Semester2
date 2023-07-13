<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Movies;
use App\Models\Countries;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        $recent = Movies::orderBy('created_at', 'desc')->take(8)->get();
        $populer = Movies::inRandomOrder()->take(8)->get();
        $toprating = Movies::orderBy('rating', 'desc')->take(8)->get();
        $satu = Movies::inRandomOrder()->first();
        $dua = Movies::inRandomOrder()->first();
        $tiga = Movies::inRandomOrder()->first();
        $request = Movies::inRandomOrder()->take(10)->get();
        $genres = Genres::all();
        $countries = Countries::all();
        return view('landingpage.index', compact('recent', 'populer', 'toprating', 'satu', 'request', 'dua', 'tiga', 'genres', 'countries'));
    }
}
