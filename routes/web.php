<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/liens', function () {
        return view('login');
    });
    
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/liens', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/registerDanny', function () {
    return view('register');
});

Route::resource('articles', ArticleController::class);


require __DIR__.'/auth.php';
