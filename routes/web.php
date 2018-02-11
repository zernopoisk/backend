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
    return view('home');
});

Route::get('/listings/create', function () {
    return view('create.step1');
});

Route::get('/listings/preview', function () {
    return view('create.step2');
});

Route::get('/listings/checkout', function () {
    return view('create.step3');
});
