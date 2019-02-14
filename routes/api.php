<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ng/get/todos','APIController@getAllTodos');

Route::post('ng/store/todo','APIController@storeTodo');

//edit todo
Route::get('ng/store/todo/edit/{id}','APIController@editTodo');
