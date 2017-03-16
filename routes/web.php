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

/**
 * / = home
 * /todos - all lists
 * /todos/1 - show
 * /todos/1/edit - edit and update
 * /todos/create - create new list
 **/


Route::get('/', 'TodoListController@index');

Route::get('/todos', 'TodoListController@index');

Route::get('/todos/{id}', 'TodoListController@show');
