<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::prefix('posts')->name('posts.')->controller(PostController::class)->group(function(){

    Route::get('/', 'index')->name('index');

    Route::get('/create',  'create')->name('create');

    Route::post('/', 'store')->name('store');

    Route::get('/{post}', 'show')->name('show');

    Route::get('/{post}/edit', 'edit')->name('edit');

    Route::put('/{post}', 'update')->name('update');

    Route::delete('/{post}', 'destroy')->name('destroy');

});

// Route::resource('posts', PostController::class);
