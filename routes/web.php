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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/burger/menu',[MenuController::class, 'index'])->name('burgers.index');
Route::get('/burger/zamow',[BurgerController::class, 'create'])->name('burgers.create');
Route::get('/burger/zamow',[MenuController::class, 'create'])->name('burgers.create');
Route::post('/burger',[BurgerController::class, 'store'])->name('burgers.store');
Route::get('/burger/menu/{id}',[MenuController::class, 'show'])->name('burgers.show');

