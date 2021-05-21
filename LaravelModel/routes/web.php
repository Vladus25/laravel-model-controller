<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TestController@home') -> name('home');
Route::get('/movie/{id}', 'TestController@movie') -> name('movie');
