<?php

use App\Http\Requests\ProyectoRequest;
use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\PortafolioController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/proyectos',App\Http\Controllers\ProyectoController::class);