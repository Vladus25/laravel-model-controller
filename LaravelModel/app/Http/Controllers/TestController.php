<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class TestController extends Controller
{
  public function home() {

    $movies = Movie::all();
    // dd($movies);
    return view('pages.home', compact('movies'));
  }

  public function movie($id) {
    $movie = Movie::findorFail($id);
    // dd($movie);

    return view('pages.movie', compact('movie'));
  }
}
