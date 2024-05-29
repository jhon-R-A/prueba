<?php

use App\Http\Controllers\controladoraqui;
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

// Route::resource('/index', controladoraqui::class); este sirve para cuando hay un crud de create,updet,delete etc.
Route::get('/index', [\App\Http\Controllers\controladoraqui::class,'indexAction'])->name('principal.index');
Route::get('/Historia', [\App\Http\Controllers\controladoraqui::class,'HistoriaAction'])->name('historia');
Route::get('/Servicios', [\App\Http\Controllers\controladoraqui:: class,'ServiciosAction'])->name('servicios');