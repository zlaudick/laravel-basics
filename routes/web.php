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
    $data = [
        'name' => 'jane',
        'email' => 'jane@doe.com',
        'location' => 'Florida',
        'last_name' => 'Doe'
    ];
    return view('hello')->withData($data);
});
