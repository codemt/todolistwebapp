<?php

use App\Todo;
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


    $todos = Todo::all();
    return view('todos.index')->with('todos',$todos);

});
// using resource route for some actions like edit and show individual values.
Route::resource('todos','TodoController');
Route::post('create','TodoController@store')->name('store');
Route::post('edit','TodoController@update')->name('update');

// delete request.
Route::post('delete','TodoController@destroy')->name('delete');