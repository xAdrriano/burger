<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BurgerController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/burger/menu',[MenuController::class, 'index'])->name('menus.index');
Route::get('/burger/zamow',[BurgerController::class, 'create'])->name('burgers.create');
Route::get('/burger/zamow',[MenuController::class, 'create'])->name('burgers.create');
Route::get('/burger/lista-zamówień',[BurgerController::class, 'index'])->name('burgers.index')->middleware('auth');;
Route::get('/burger/lista-zamówień/{id}',[BurgerController::class, 'show'])->name('burgers.show')->middleware('auth');;
Route::post('/burger',[BurgerController::class, 'store'])->name('burgers.store');
Route::get('/burger/menu/{id}',[MenuController::class, 'show'])->name('menus.show');
Route::delete('/burger/lista-zamówień/{id}',[BurgerController::class, 'destroy'])->name('burgers.delete')->middleware('auth');


Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
