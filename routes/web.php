<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\SongController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [IndexController::class, 'index']);

Route::post('/addSong', [SongController::class, 'addSong']);
