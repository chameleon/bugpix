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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//   /p goes to Post controller
//   @create comes from the convention in RESTful Resource controllers (Laravel)
Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');

/* Using methods from RESTful Resource controller */
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');


