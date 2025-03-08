<?php

use App\Http\Controllers\BlogsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs', [BlogsController::class, 'index']);
