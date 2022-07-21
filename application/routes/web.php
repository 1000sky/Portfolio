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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('/', function () {
    return view('index');
});

Route::get('/start', function () {
    return view('start');
})->middleware('auth');

Route::get('/explanation', function () {
    return view('explanation');
});

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/index3', function () {
    return view('index3');
});

Route::get('/index4', function () {
    return view('index4');
});

Route::get('/index5', function () {
    return view('index5');
});

Route::get('/index6', function () {
    return view('index6');
});

Route::get('/index7', function () {
    return view('index7');
});