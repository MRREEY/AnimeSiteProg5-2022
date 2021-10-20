<?php

use App\Models\Anime;
use App\Models\Genre;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

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
    return view('animes', [
        //Laad alle animes met bijbehorende genre en get() resultaten
        //Niet meer dan 2 queries
        'animes' => \App\Models\Anime::with('genre')->get()
    ]);
});

//geeft anime waar de slug matched met de slug die word gegeven en geef de firstOrFail()
Route::get('animes/{anime:slug}', function (Anime $anime){
    return view('anime', [
        'anime' => $anime
    ]);

});

Route::get('animes', function () {
    return view('animes');
});

Route::get('genres/{genre:slug}', function (Genre $genre) {
    return view('animes', [
        'animes' => $genre->animes
    ]);
});

Route::get('/about', [AboutController::class, 'show']);
