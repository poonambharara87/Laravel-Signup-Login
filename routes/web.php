<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;
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


Route::get('/dashboard', function () {
    return view('dashboard');
});
// ->middleware(['auth'])->name('dashboard');

Route::any('register', function () {
    return view('register');
});

Route::any('login', function () {
    return view('login');
});

// Route::any('admin', function () {
//     dd('admin page');
// })->middleware(['auth', 'admin']);


// Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

require __DIR__.'/auth.php';