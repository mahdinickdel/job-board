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
})->name('welcome');

Route::as('auth.')->group(function () {

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
    
    Route::get('/forgot', function () {
        return view('auth.forgot');
    })->name('forgot');    

});


Route::get('/jobs', function () {
    return view('jobs.index');
})->name('jobs');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

