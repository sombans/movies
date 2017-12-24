<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = movie::all();
        return view('view/index', compact(['movies']));
    }
    public function show($id)
    {
        $movie = movie::find($id);
        return view('view/show', compact(['movie']));
    }

}
