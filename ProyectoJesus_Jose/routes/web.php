<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('administrador.prueba');
});

Route::get('/pruebac', function () {
    return view('cliente.prueba');
});

