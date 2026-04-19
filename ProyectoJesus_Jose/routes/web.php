<?php

use App\Http\Controllers\PracticasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/vehiculos', 'cliente.vehiculos')->name('vehiculos');
Route::view('/piezas', 'cliente.piezas')->name('piezas');
Route::view('/nosotros', 'cliente.nosotros')->name('nosotros');
Route::view('/contacto', 'cliente.contacto')->name('contacto');
Route::view('/publicar', 'cliente.publicar')->name('publicar');
Route::view('/registro', 'cliente.registro')->name('registro');

Route::get('/prueba', function () {
    return view('administrador.prueba');
});

Route::get('/pruebac', function () {
    return view('cliente.prueba');
});

Route::get('/practicas', [PracticasController::Class,]);