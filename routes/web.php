<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AirportController;
use App\Http\Controllers\AirlineController;
use App\Http\Controllers\CountryController;

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
    return view('test');
});
Route::get('/test',  [AirportController::class, 'index']);
Route::get('/add_airport', [AirlineController::class, 'create']);
Route::get('/edit_airport', [AirlineController::class, 'edit']);
Route::get('/delete_airport', [AirlineController::class, 'destroy']);

Route::get('/airlines', [AirlineController::class, 'index']);
Route::get('/add_airline', [AirlineController::class, 'create']);
Route::get('/edit_airline', [AirlineController::class, 'edit']);
Route::get('/delete_airline', [AirlineController::class, 'destroy']);

Route::get('/countries', [CountryController::class, 'index']);
Route::get('/add_country', [AirlineController::class, 'create']);
Route::get('/edit_country', [AirlineController::class, 'edit']);
Route::get('/delete_country', [AirlineController::class, 'destroy']);

// Route::get('/add_country', function () {
//     return view('add_country');
// });
// Route::get('/edit_country', function () {
//     return view('edit_country');
// });
// Route::get('/delete_country', function () {
//     return view('delete_country');
// });


// Route::get('/add_airport', function () {
//     return view('add_airport');
// });
// Route::get('/edit_airport', function () {
//     return view('edit_airport');
// });
// Route::get('/delete_airport', function () {
//     return view('delete_airport');
// });


// Route::get('/airline', function () {
//     return view('airline');
// });
// Route::get('/add_airline', function () {
//     return view('add_airline');
// });
// Route::get('/edit_airline', function () {
//     return view('edit_airline');
// });
// Route::get('/delete_airline', function () {
//     return view('delete_airline');
// });
// Route::get('/remove_airline', function () {
//     return view('remove_airline');
// });
// Route::get('/new_airline', function () {
//     return view('new_airline');
// });


// Route::get('/countries_without_airlines', function () {
//     return view('countries_without_airlines');
// });
// Route::get('/countries_w_airlines_airports', function () {
//     return view('countries_w_airlines_airports');
// });

// Route::get('/denied', function () {
//     return view('denied');
// });
