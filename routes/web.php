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

Route::get('/memberhome', function () {
    return view('members.homenew');
});


Route::get('/newstakeholder', function () {
    return view('new_stakeholder');
});

Route::get('/volunteerhome', function () {
    return view('volunteers.home');
});

Route::get('/neworganization', function () {
    return view('new_organization');
});

Route::post("/insert_organization","InsertController@insert_organization");
Route::post("/insert_stakeholder","InsertController@insert_stakeholder");


// Routes for members

Route::get('/members/assign', "InsertController@select_ovrelations");
Route::post('/members/assign', "InsertController@insert_ovrelations");

Route::get('/members/add', function(){
    return view('members.addmember');
});

Route::get('/members/fetch_ovrelations', "InsertController@fetch_ovrelations");

Route::post('/members/add', "InsertController@insert_member");

// members routes end