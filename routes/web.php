<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $response = Http::get('https://api.themoviedb.org/3/trending/movie/day?api_key='.env('MOVIE_DB_API_KEY'));
    $movies = json_decode($response->getBody(), true);

    return view('welcome', [
		'movies' => array_slice($movies['results'], 0, 8)
	]);
});

Route::get('/movie/{movie_id}', function ($movie_id) {
    $response = Http::get('https://api.themoviedb.org/3/movie/'.$movie_id.'?api_key='.env('MOVIE_DB_API_KEY'));
    $movie = json_decode($response->getBody(), true);

    return view('movie', [
		'movie' => $movie
	]);
});
