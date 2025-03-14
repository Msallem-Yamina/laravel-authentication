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
    return view('index'); 
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/admin', function () {
        return view('dashboard.admin'); 
    })->middleware('role:admin')->name('dashboard.admin');

    Route::get('/dashboard/user', function () {
         return view('dashboard.user');
     })->middleware('role:user')->name('dashboard.user');

    Route::get('/unauthorized', function () {
        return view('unauthorized');
    })->name('unauthorized');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
