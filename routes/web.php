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

Route:: get('/hello', function() {
    return "Hello World!";
});

Route:: get('/hello2', function() {
    return view('hello2');
});

Route:: get('/phpinfo', function() {
    phpinfo();
});
