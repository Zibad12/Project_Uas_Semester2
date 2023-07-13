<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movies;
use App\Models\Comments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalmovies = Movies::count();
        $totalcomments = Comments::count();
        $totaluser = User::count();
        $recentcomment = Comments::orderBy('created_at', 'desc')->take(5)->get();
        return view('dashboard.index', compact('totalmovies', 'totalcomments', 'totaluser', 'recentcomment'));
    }
}
