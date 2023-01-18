<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;


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
    return view('index');
});
//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\MainController::class, 'index'])->name('home');
Route::get('/blogs', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('category-blog/{id}', [App\Http\Controllers\MainController::class, 'show'])->name('home');

Route::post('personal', ['as' => 'personal', 'uses' => 'App\Http\Controllers\MainController@store']);
Route::get('confirm/{id}', ['as' => 'confirm', 'uses' => 'App\Http\Controllers\MainController@confirm']);
Route::get('thanks/{id}', ['as' => 'thanks', 'uses' => 'App\Http\Controllers\MainController@thanks']);
Route::get('address/{id}', ['as' => 'address', 'uses' => 'App\Http\Controllers\MainController@address']);
Route::post('address/{id}', ['as' => 'address', 'uses' => 'App\Http\Controllers\MainController@add_address']);
/*Route::group(['middleware' => 'auth'], function () {
    Route::get('category-list', ['as' => 'category-list', 'uses' => 'App\Http\Controllers\CategoryController@index']);
    Route::get('category', ['as' => 'category', 'uses' => 'App\Http\Controllers\CategoryController@create']);
    Route::post('category', ['as' => 'category', 'uses' => 'App\Http\Controllers\CategoryController@store']);
    Route::get('category-edit/{id}', ['as' => 'category', 'uses' => 'App\Http\Controllers\CategoryController@edit']);
    Route::get('category-delete/{id}', ['as' => 'category', 'uses' => 'App\Http\Controllers\CategoryController@destroy']);
    Route::post('category-update/{id}', ['as' => 'category', 'uses' => 'App\Http\Controllers\CategoryController@update']);
    Route::get('blog-list', ['as' => 'blog-list', 'uses' => 'App\Http\Controllers\BlogController@index']);
    Route::get('blog', ['as' => 'category', 'uses' => 'App\Http\Controllers\BlogController@create']);
    Route::post('blog', ['as' => 'category', 'uses' => 'App\Http\Controllers\BlogController@store']);
    Route::get('blog-edit/{id}', ['as' => 'blog', 'uses' => 'App\Http\Controllers\BlogController@edit']);
    Route::get('blog-delete/{id}', ['as' => 'blog', 'uses' => 'App\Http\Controllers\BlogController@destroy']);
    Route::post('blog-update/{id}', ['as' => 'blog', 'uses' => 'App\Http\Controllers\BlogController@update']);
});*/

