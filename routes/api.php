<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function() {
    Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@login');

    Route::get('/me','AuthController@me');

    Route::resource('books','BookController')->middleware('jwt.verify');
    Route::resource('authors','AuthorController')->middleware('jwt.verify');
});
