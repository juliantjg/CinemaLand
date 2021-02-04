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

use App\Http\Controllers\MoviePostsController;

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'MenuController@index')->name('home');
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/addMovie/create', 'MoviePostsController@create');
Route::get('/movie/{moviePost}', 'MoviePostsController@show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::get('/editCover/create', 'MenuController@edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
Route::post('/editCover/create', 'MenuController@store');
Route::post('/addMovie/create', 'MoviePostsController@store');
Route::post('/movie/destroy', 'MoviePostsController@destroy');

Route::get('/stripe', 'StripePaymentController@stripe');
Route::post('/stripe', 'StripePaymentController@stripePost')->name('stripe.post');