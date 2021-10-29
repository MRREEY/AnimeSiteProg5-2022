<?php

use App\Models\Anime;
use App\Models\Genre;
use App\Models\User;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminAnimeController;
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

Route::get('/', [AnimeController::class, 'index'])->name('home');
Route::get('animes/{anime:slug}', [AnimeController::class, 'show']);

Route::get('animes', function () {
    return view('animes');
});

Route::get('genres/{genre:slug}', function (Genre $genre) {
    return view('animes', [
        'animes' => $genre->animes,
        'currentGenre' => $genre,
        'genres' => Genre::all()
    ]);
})->name('genre');

Route::get('authors/{author:username}', function (User $author) {
    return view('animes', [
        'animes' => $author->animes,
        'genres' => Genre::all()
    ]);
});

Route::get('/about', [AboutController::class, 'show']);

//Register
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

//Sessions
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');

//Login
Route::get('login', [SessionsController::class, 'create'])->middleware('guest'); //Moet uitgelogd zijn
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth'); //Moet ingelogd zijn

//Admin
Route::get('admin/animes/create', [AdminAnimeController::class, 'create'])->middleware('admin');
Route::post('admin/animes', [AdminAnimeController::class, 'store'])->middleware('admin');
Route::get('admin/animes', [AdminAnimeController::class, 'index'])->middleware('admin');
Route::get('admin/animes/{anime}/edit', [AdminAnimeController::class, 'edit'])->middleware('admin');
Route::patch('admin/animes/{anime}', [AdminAnimeController::class, 'update'])->middleware('admin');
Route::delete('admin/animes/{anime}', [AdminAnimeController::class, 'destroy'])->middleware('admin');
