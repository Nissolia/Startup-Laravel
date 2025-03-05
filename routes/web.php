<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ReunionesController;
use App\Http\Controllers\SalaController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('agendas', AgendaController::class);
Route::resource('reuniones', ReunionesController::class);
Route::resource('salas', SalaController::class);
