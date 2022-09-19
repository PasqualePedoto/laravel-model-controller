<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{

    public function index(){
        $movies = Movie::all();
        $title = "Home";
        return view('movies.index',compact('movies','title'));
    }
}
