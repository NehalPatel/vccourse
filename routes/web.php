<?php

use App\Http\Controllers\BlogsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//write all routes of blogs controller here

Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs.index');
Route::get('/blogs/create', [BlogsController::class, 'create'])->name('blogs.create');
Route::post('/blogs', [BlogsController::class, 'store'])->name('blogs.store');

Route::get('/blogs/{id}', [BlogsController::class, 'show'])->name('blogs.show');

Route::get('/blogs/{id}/edit', [BlogsController::class, 'edit'])->name('blogs.edit');
Route::put('/blogs/{id}', [BlogsController::class, 'update'])->name('blogs.update');
Route::delete('/blogs/{id}', [BlogsController::class, 'destroy'])->name('blogs.destroy');


//create a blog resource route
// Route::resource('blogs', BlogsController::class);
