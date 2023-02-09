<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::all();
        // dd($movies);
        return view('home', compact('movies'));
    }
}
