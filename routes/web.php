<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;


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
Route::get('/facebook', function () {

    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'https://graph.facebook.com/131321567026565/insights/page_impressions_unique
    &access_token=c8c199799dbe07e296f933a733c89bba');
    echo $response->getStatusCode(); // 200
    echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
    $cool = json_decode($response->getBody());    // '{"id": 1420053, "name": "guzzle", ...}'
    dd($cool);

})->name('facebook');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/analytics', function () {
    return view('analytics');
})->name('analytics');

Route::get('/users', function() {
    $users = \App\Models\User::all();

    return view('users', ['users' => $users]);

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group([
    'prefix' => 'articles',
], function () {
    Route::get('/', 'ArticlesController@index')
         ->name('articles.article.index');
    Route::get('/create','ArticlesController@create')
         ->name('articles.article.create');
    Route::get('/show/{article}','ArticlesController@show')
         ->name('articles.article.show')->where('id', '[0-9]+');
    Route::get('/{article}/edit','ArticlesController@edit')
         ->name('articles.article.edit')->where('id', '[0-9]+');
    Route::post('/', 'ArticlesController@store')
         ->name('articles.article.store');
    Route::put('article/{article}', 'ArticlesController@update')
         ->name('articles.article.update')->where('id', '[0-9]+');
    Route::delete('/article/{article}','ArticlesController@destroy')
         ->name('articles.article.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'categories',
], function () {
    Route::get('/', 'CategoriesController@index')
         ->name('categories.category.index');
    Route::get('/create','CategoriesController@create')
         ->name('categories.category.create');
    Route::get('/show/{category}','CategoriesController@show')
         ->name('categories.category.show')->where('id', '[0-9]+');
    Route::get('/{category}/edit','CategoriesController@edit')
         ->name('categories.category.edit')->where('id', '[0-9]+');
    Route::post('/', 'CategoriesController@store')
         ->name('categories.category.store');
    Route::put('category/{category}', 'CategoriesController@update')
         ->name('categories.category.update')->where('id', '[0-9]+');
    Route::delete('/category/{category}','CategoriesController@destroy')
         ->name('categories.category.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'comments',
], function () {
    Route::get('/', 'CommentsController@index')
         ->name('comments.comment.index');
    Route::get('/create','CommentsController@create')
         ->name('comments.comment.create');
    Route::get('/show/{comment}','CommentsController@show')
         ->name('comments.comment.show')->where('id', '[0-9]+');
    Route::get('/{comment}/edit','CommentsController@edit')
         ->name('comments.comment.edit')->where('id', '[0-9]+');
    Route::post('/', 'CommentsController@store')
         ->name('comments.comment.store');
    Route::put('comment/{comment}', 'CommentsController@update')
         ->name('comments.comment.update')->where('id', '[0-9]+');
    Route::delete('/comment/{comment}','CommentsController@destroy')
         ->name('comments.comment.destroy')->where('id', '[0-9]+');
});
