<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::controller(SongController::class)->prefix("songs")->group(function () {
    Route::get('/','index');
    Route::post('/new','store');
    Route::get('/new','create');
    Route::get('/{id}','show');
});