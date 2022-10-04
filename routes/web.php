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

Route::get('/upcoming/culture_festival', function () {
    return view('subpages.culture_festival');
});

Route::get('/accomodation/musang_king', function () {
    return view('subpages.musang_king');
});

Route::get('/accomodation/julawat', function () {
    return view('subpages.julawat');
});

Route::get('/facilities/petting_zoo', function () {
    return view('subpages.petting_zoo');
});

Route::get('/facilities/camp_site', function () {
    return view('subpages.camp_site');
});

Route::get('/facilities/dusun_premium_outlet', function () {
    return view('subpages.dpo');
});

Route::get('/maps', function () {
    return view('subpages.maps');
});

Route::get('/subbase', function () {
    return view('subbase');
});

Route::get('/in_progress', function () {
    return view('subpages.construction');
});
