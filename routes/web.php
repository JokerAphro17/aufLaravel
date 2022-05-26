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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/inscription', [App\Http\Controllers\EtudiantController::class, 'store'])->name('inscription.store');
Route::get('/inscription', [App\Http\Controllers\EtudiantController::class, 'index'])->name('inscription.index');
Route::get('/list', [App\Http\Controllers\EtudiantController::class, 'list'])->name('list');
Route::get('/edit/{id}', [App\Http\Controllers\EtudiantController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [App\Http\Controllers\EtudiantController::class, 'update'])->name('update');
Route::get('/delete/{id}', [App\Http\Controllers\EtudiantController::class, 'destroy'])->name('delete');

