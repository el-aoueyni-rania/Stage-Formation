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


Route::get('/','HomeController@welcome') ;



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin-dashboard', function(){
    return view('admin.dashboard');
})->middleware('auth' , 'role');

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/premiereAAd', 'HomeController@premiereAAd')->name('premiereAAd');
Route::resource('formations', 'Admin\FormationController');




