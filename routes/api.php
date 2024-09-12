<?php

use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\VideogameController;
use App\Models\Videogame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('videogames', VideogameController::class);
Route::apiResource('developers', DeveloperController::class);
Route::apiResource('genres', GenreController::class);
Route::get('videogames/genre/{genreId}', [VideogameController::class, 'videogamesByGenre']);
