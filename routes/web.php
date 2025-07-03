<?php

use App\Http\Requests\ProyectoRequest;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('proyectos',App\Http\Controllers\ProyectoController::class);