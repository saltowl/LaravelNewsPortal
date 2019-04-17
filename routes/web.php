<?php

use App\Article;
use Illuminate\Http\Request;

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
    return view('articles', [
        'articles' => Article::orderBy('created_at', 'asc')->get()
    ]);
});

Route::get('/admin', function () {
    return view('admin-panel', [
        'articles' => Article::orderBy('created_at', 'asc')->get()
    ]);
});

/**
 * Add New Task
 */
Route::post('/article', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'header' => 'required|max:255',
    ]);
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    $article = new Article();
    $article->header = $request->header;
    $article->text = $request->text;
    $article->save();

    return redirect('/admin');
});

/**
 * Delete Task
 */
Route::delete('/article/{id}', function ($id) {
    Article::findOrFail($id)->delete();
    return redirect('/admin');
});

/**
 * Show Task
 */
Route::get('/article/{id}', function ($id) {
    return view('article-item', [
        'article' => Article::findOrFail($id)
    ]);
});
