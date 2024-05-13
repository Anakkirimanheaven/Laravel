<?php

use Illuminate\Support\Facades\Route;
use App\Models\Film;
use App\Http\Controllers\MyController;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('film', function() {
    return view('film');
});

Route::get('film/{id}', function(int $id) {
    return view('detail-film', ['film' => Film::findOrFail($id)]);
});


//Route with controller
Route::get('perkenalan',[App\Http\Controllers\MyController::class,'introduce']);
Route::get('hewan',[MyController::class,'animals']);

//route movie
Route::get('movie', [MovieController::class, 'getMovie']);
Route::get('movie/{id}', [MovieController::class, 'getMovieById']);
jkjkj
