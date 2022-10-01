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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('face');
});

Route::get('/test', function () {
    return view('sub');
});

Route::get('/main-idea', function () {
    return view('main-idea');
});

Route::get('/mukas', function () {
    return view('main');
});
