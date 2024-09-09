<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hola desde inicio';
});


Route::get('/contacto', function () {
    return 'hola desde Contacto';
});


Route::get('/cursos/informacion', function () {
    return "Aqui encontraras informacion de los cursos";
});


// Route::get('/cursos/{curso}/{category?}', function ($curso, $category = null) {
//     if ($category) {
//         return "Bienvenido al curso: $curso de la categoria: $category";
//     } else {
//         return "Bienvenido al curso: $curso";
//     }
// });


Route::get('/cursos/{curso}', function ($curso) {
    return "Bienvenido al curso: $curso";
  
})->whereAlpha('curso');




