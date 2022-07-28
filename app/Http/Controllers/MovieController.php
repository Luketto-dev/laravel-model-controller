<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    function index()
    {
        $data = Movie::all();

        return view('movies.index', [
            "movies" => $data
        ]);
    }
}
