<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [App\Http\Controllers\Front\PostController::class, 'index']);
