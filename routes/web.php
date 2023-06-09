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

    // ผลรวมน้ำหนักทั้งหมดในแต่ละครั้งที่กรอก
    Route::view('/total-weight', 'chart.total-weight')->name('total-weight');
    // แคลของการกิน และ แคลออกกำลังกาย
    Route::view('/calories-eating', 'chart.calories-eating')->name('calories-eating');
    // แคลรวมของกินและออกกำลังกาย
    Route::view('/total-calories', 'chart.total-calories')->name('total-calories');
});


Route::view('/login', 'login')->name('login');
Route::get('/logout', function () {
    auth('web')->logout();
    session()->flush();
    return redirect()->route('home');
})->name('logout');

Route::view('/register', 'register')->name('register');

Route::name('admin.')->prefix('admin')->group(function () {
    Route::view('/login', 'admin.login')->name('login');
    Route::get('/logout', function () {
        auth('admin')->logout();
        session()->flush();
        return redirect()->route('admin.login');
    })->name('logout');
    Route::middleware('auth:admin')->group(function () {
        Route::view('/', 'admin.home')->name('home');
    });
});
