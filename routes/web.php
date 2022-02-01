<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Jobs\JobController;
use App\Http\Controllers\Welcome\WelcomeController;

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

Route::get('/', WelcomeController::class)->name('welcome');

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

Route::get('/my', function () {
    return view('user.profile');
})->name('profile')->middleware('auth');

Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
Route::get('/jobs/{id}', [JobController::class, 'single'])->name('job');


Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

