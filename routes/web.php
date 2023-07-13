<?php

use App\Http\Controllers\BurgerController;
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

Route::get('/burger',[BurgerController::class, 'index'])->name('burgers.index');
Route::get('/burger/zamow',[BurgerController::class, 'create'])->name('burgers.create');
Route::post('/burger',[BurgerController::class, 'store'])->name('burgers.store');