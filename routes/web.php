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

Route::get('/new_stakeholder', function () {
    return view('new_stakeholder');
});

Route::get('/new_organisation', function () {
    return view('new_organisation');
});

Route::post("//insert_organisation","InsertController@/insert_organisation");

