<?php

use App\Models\Post;
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
    return view('intro', [
        ]);
});

Route::get('posts' , function () {
    return view('posts', [
    ]);
});

// USER DASHBOARD
Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'user'])->name('home');

// ADMIN DASHBOARD
Route::get('/admin_home', function () {
    return view('admin_home');
})->middleware(['auth', 'admin'])->name('admin_home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


