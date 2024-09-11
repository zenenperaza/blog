<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::controller(PostController::class)->group(function(){

    Route::get('/posts', 'index')->name('post.index');

    Route::get('/posts/create',  'create')->name('post.create');

    Route::post('/posts', 'store')->name('post.store');

    Route::get('/posts/{post}', 'show')->name('post.show');

    Route::get('/posts/{post}/edit', 'edit')->name('post.edit');

    Route::put('/posts/{post}', 'update')->name('post.update');

    Route::delete('/posts/{post}', 'destroy')->name('post.destroy');

});

// Route::resource('posts', PostController::class);
