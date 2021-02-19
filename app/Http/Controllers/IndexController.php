<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class IndexController extends Controller
{
    public function index(){
        return view('partials.cards-movie',['movies' => Movie::all()]);
    }

    public function showMovie($id){
        return view('partials.details-movie',['movie' => Movie::find($id)]);
    }
}
