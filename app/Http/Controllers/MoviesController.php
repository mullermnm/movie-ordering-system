<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class moviescontroller extends Controller
{
    public function show_movies_by_catagory($catagory) {
        return view('movies.catagory', [
            'catagory'=> $catagory,
            'movies' => Movie::latest()->catagory($catagory)->paginate(20)
        ]);
    }
}
