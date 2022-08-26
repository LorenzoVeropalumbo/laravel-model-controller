<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function home(){
        $movies = Movie::all();

        $data = [
            'movies' => $movies,
            'movies_img' => [
                '1' => 'https://images-na.ssl-images-amazon.com/images/S/pv-target-images/7d2081c07a6afa338191e68c73e1959f7761b53cf9b691d59926aa0ef89874e5._RI_V_TTW_.jpg',

            ]
        ];

        return view('home',$data);
    }
}
