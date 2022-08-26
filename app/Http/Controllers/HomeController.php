<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function film(){
        $movies = Movie::all();

        $data = [
            'movies' => $movies,
        ];

        return view('film',$data);
    }
    public function serie(){
        $movies = Movie::all();

        $data = [
            'movies' => $movies,
        ];

        return view('serie',$data);
    }
}
