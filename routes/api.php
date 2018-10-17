<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->middleware(['auth.basic.once'])->group(function() {

    Route::apiResource('movie', 'MovieController');

    Route::apiResource('favorites', 'FavoriteMovieController');

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

});