<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function home(){
        $movies = Movie::all();
        @dump($movies);
        return view('home', compact('movies'));
    }
}
