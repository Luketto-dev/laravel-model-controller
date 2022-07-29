<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    function index()
    {
        $title = key_exists("title", $_GET) ? $_GET['title'] : "";

        if (isset($title)) {
            
            $data = Movie::where("title", "LIKE" , "%$title%")->get();
        }else{
            //$data è un array di instanze della classe movie
            $data = Movie::all();
        }

        
        // faccio il return della vista e del $data 
        return view('movies.index', [
            "movies" => $data
        ]);
    }
}
