<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
    return view('pengertian');
});
Route::get('gejala', [IndexController::class, 'gejala'])->name('gejala');
Route::get('penyebab', [IndexController::class, 'penyebab'])->name('penyebab');
Route::get('langkah', [IndexController::class, 'langkah'])->name('langkah');
Route::get('diagnostik', [IndexController::class, 'diagnostik'])->name('diagnostik');
Route::post('store', [IndexController::class, 'store'])->name('store');
Route::get('hasil', [IndexController::class, 'hasil'])->name('hasil');
