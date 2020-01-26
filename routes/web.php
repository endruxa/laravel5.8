<?php

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

Route::get('/', function(){
    return view('layouts.main');
});

// Route::get('test', function() {
//     $test = App\Models\Category::with('user')->get();
// return view('test', compact('test'));
// });


Auth::routes();

Route::get('/main', 'HomeController@index')->name('main');

Route::group(['prefix'=> 'admin', 'middleware'=>['auth', 'admin']],function() {
    Route::get('admin', function() {
        return view('admin.admin');
    });
});

Route::resource('tests', 'Test');

Route::get('articles', 'ArticlesController@showArticles')->name('articles');

Route::group(['prefix'=> 'articles'],function() {
    Route::get('/create', 'ArticlesController@createArticle')->name('createArticle');
    Route::get('/{id}', 'ArticlesController@singleArticle')->name('showArticle');
    Route::post('article', 'ArticlesController@store')->name('store');
    Route::get('/{id}/edit', 'ArticlesController@editArticle')->name('editArticle');
    Route::put('/{article}/update', 'ArticlesController@update')->name('update');
    Route::delete('{article}/delete', 'ArticlesController@deleteArticle')->name('deleteArticle');
});

Route::resource('category','CategoryController');
