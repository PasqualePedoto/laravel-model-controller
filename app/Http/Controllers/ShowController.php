<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class ShowController extends Controller
{
    public function show($movie){
        $result = Movie::where('id',$movie)->get();
        return view('movies.show',compact('result'));
    }
}
