<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\p4mController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\NamboController;
use App\Http\Controllers\QuarydController;
use App\Http\Controllers\GunungPutriController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('p4m', p4mController::class);
Route::resource('quaryd', QuarydController::class);
Route::resource('gunungputri', GunungPutriController::class);
Route::resource('nambo', NamboController::class);
Route::resource('akun', AkunController::class);