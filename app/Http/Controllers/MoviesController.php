<?php

namespace App\Http\Controllers;

use App\Models\Movies;


class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movies::all();
        return view('/movie', ['movies' => $movies]);
    }
}
