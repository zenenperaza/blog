<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hola desde inicio';
});


Route::get('/contacto', function () {
    return 'hola desde Contacto';
});
