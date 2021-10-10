<?php

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
    $files = File::files(resource_path("animes/"));

    return view('animes', [
        'animes' => \App\Models\Anime::all()
    ]);
});

//Dynamic linking
//Laracast-8
Route::get('animes/{anime}', function ($slug){
    //find een post bij de slug en geef het aan een post view
    $anime = \App\Models\Anime::find($slug);

    return view('anime', [
        'anime' => $anime
    ]);

})->where('anime', '[A-z_\-]+');

Route::get('animes', function () {
    return view('animes');
});

Route::get('/about', [AboutController::class, 'show']);
