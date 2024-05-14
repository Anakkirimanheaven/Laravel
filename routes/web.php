<?php

use Illuminate\Support\Facades\Route;
use App\Models\Film;
use App\Http\Controllers\MyController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ArtikelController;


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

//
Route::get('artikel',[ArtikelController::class, 'getArtikel']);
Route::get('artikel/id/{id}',[ArtikelController::class, 'getArtikelById']);
Route::get('artikel/kategori/{kategori}',[ArtikelController::class, 'getArtikelKategori']);
