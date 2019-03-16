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

Route::get('/newstakeholder', function () {
    return view('new_stakeholder');
});

Route::get('/causes', function () {
    return view('doners.causes');
});
Route::get('/donation', function () {
    return view('doners.donation');
});
Route::get('/new_donation', function () {
    return view('doners.new_donation');
});

Route::get('/donation', function () {
    return view('doners.donation');
});


Route::get('/neworganization', function () {
    return view('new_organization');

});


route::get('send','mailController@send');
Route::post("/insert_organization","InsertController@insert_organization");
Route::post("/insert_stakeholder","InsertController@insert_stakeholder");
Route::post("/insert_donation","InsertController@insert_donation");


// Routes for members
Route::get('/membersassign', function(){
    return view('members.assign');
});

