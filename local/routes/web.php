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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);
Route::get('/categories/{id}', [
    'uses' => 'HomeController@Category',
    'as' => 'home.category'
]);
Route::get('/detail/{id}', [
    'uses' => 'HomeController@Detail',
    'as' => 'home.detail'
]);


Route::get('main', [
    'uses' => 'MainController@index',
    'as' => 'main.index'
]);

Route::get('create', [
    'uses' => 'MainController@create',
    'as' => 'main.create'
]);

Route::post('create', [
    'uses' => 'MainController@PostCreate',
    'as' => 'main.create'
]);
Route::get('blog/create', [
    'uses' => 'BlogController@Create',
    'as' => 'blog.create'
]);

Route::post('blog/create', [
    'uses' => 'BlogController@PostCreate',
    'as' => 'blog.create'
]);
Route::get('blog/index', [
    'uses' => 'BlogController@Index',
    'as' => 'blog.index'
]);



