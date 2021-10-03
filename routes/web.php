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
    return view('welcome');
});

//Dynamic linking
//Laracast-8
Route::get('animes/{anime}', function ($slug){

    $path = __DIR__ . "/../resources/animes/{$slug}.html";

    //File bestaan niet => doorlinken welcome pagina
    if (! file_exists($path)) {
        return redirect('/');
    }

    $anime = file_get_contents($path);

    return view('anime', [
        'anime' => $anime
    ]);
});

Route::get('animes', function () {
    return view('animes');
});

Route::get('/about', [AboutController::class, 'show']);
