<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZeneController;
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

Route::get('/', [ZeneController::class, 'fooldalview'])->name('lista');
Route::get('/Zeneszek', [ZeneController::class, 'zeneszekview'])->name('zeneszek');
Route::get('/ZeneRogzites', [ZeneController::class, 'zenerogzitesview'])->name('zenerogzites');
Route::get('/Zenelista', [ZeneController::class, 'zenelistaview'])->name('zenelista');
