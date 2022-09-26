<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/test', function () {
    return view('test');
});
Route::get('/airlines', function () {
    return view('airlines');
});


Route::get('/countries', function () {
    return view('countries');
});
Route::get('/edit_country', function () {
    return view('edit_country');
});
Route::get('/delete_country', function () {
    return view('delete_country');
});


Route::get('/edit_airport', function () {
    return view('delete_airport');
});
Route::get('/delete_airport', function () {
    return view('delete_airport');
});


Route::get('/airline', function () {
    return view('airline');
});
Route::get('/add_airline', function () {
    return view('add_airline');
});
Route::get('/edit_airline', function () {
    return view('edit_airline');
});
Route::get('/delete_airline', function () {
    return view('delete_airline');
});
Route::get('/remove_airline', function () {
    return view('remove_airline');
});