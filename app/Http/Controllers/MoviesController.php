<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('view/index', compact(['movies']));
    }
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('view/show', compact(['movie']));
    }
    public function create()
    {
        return view('view/create');
    }
    public function store()
    {

        $this->validate(request(), ['title' => 'required','genre' => 'required','director' => 'required','year' => 'required','storyline' => 'required']);

        $movie = new Movie;

        $movie->title= request('title');
        $movie->genre = request('genre');
        $movie->director = request('director');
        $movie->year = request('year');
        $movie->storyline = request('storyline');
        

        $movie->save();


        // movie::create([
        //     'title' => request('title'),
        //     'genre' => request('genre'),
        //     'director' => request('director'),
        //     'year' => request('year'),
        //     'storyline' => request('storyline')
        // ]);

        return redirect()->route('all-movies');

    }

}
