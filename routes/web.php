<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::middleware('auth')->group(function () {
    Route::view('/form', 'form')->name('form');
    Route::view('/history', 'history')->name('history');
});


Route::view('/login', 'login')->name('login');
Route::get('/logout', function () {
    auth()->logout();
    session()->flush();
    return redirect()->route('home');
})->name('logout');

Route::view('/register', 'register')->name('register');
