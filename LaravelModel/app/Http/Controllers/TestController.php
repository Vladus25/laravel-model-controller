<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class TestController extends Controller
{
  public function home() {

    $movies = Movies::all();

    return view('pages.home', compact('movies'));
  }

  public function movie($id) {
    $movie = Movies::findorFail($id);
    // dd($movies);

    return view('pages.movie', compact('movie'));
  }
}
