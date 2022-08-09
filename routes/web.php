<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\SugerenciasController;
use App\Http\Controllers\TwitterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('/',[PortafolioController::class, 'datosPortafolio']);
Route::get('portafolio',[PortafolioController::class,'index'])->name('portafolio')->middleware('auth');
Route::get('portafolio/create',[PortafolioController::class,'create'])->name('create')->middleware('auth');
Route::post('portafolio',[PortafolioController::class,'store'])->name('store')->middleware('auth');
Route::get('portafolio/{id}',[PortafolioController::class,'show'])->name('show')->middleware('auth');
Route::get('portafolio/edit/{id}',[PortafolioController::class,'edit'])->name('edit')->middleware('auth');
Route::put('portafolio/{portafolio}',[PortafolioController::class,'update'])->name('update')->middleware('auth');
Route::delete('portafolio/{portafolio}',[PortafolioController::class,'destroy'])->name('destroy')->middleware('auth');

Route::get('sugerencias', [SugerenciasController::class, 'sendMails'])->name('sugerencias');
Route::post('sugerencias', [SugerenciasController::class, 'sendMailsProcessing'])->name('sugerencias.form');

Route::get('auth/twitter', [TwitterController::class, 'loginwithTwitter']);
Route::get('auth/callback/twitter', [TwitterController::class, 'cbTwitter']);
