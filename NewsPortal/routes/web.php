<?php

use App\Article;

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
    return view('articles');
});

/**
 * Add New Task
 */
Route::post('/article', function (Request $request) {
    //
});

/**
 * Delete Task
 */
Route::delete('/article/{id}', function ($id) {
    //
});
