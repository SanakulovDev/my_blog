<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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
});



// Route::resource('posts', PostController::class);

Route::middleware('auth')->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); // Barcha postlarni ko'rsatish
    Route::get('/posts/{post}/show', [PostController::class, 'show'])->name('posts.show'); // Barcha postlarni ko'rsatish
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); // Yangi post yaratish sahifasi
    Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store'); // Yangi postni saqlash
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit'); // Postni tahrirlash sahifasi
    Route::post('/posts/{post}/update', [PostController::class, 'update'])->name('posts.update'); // Postni yangilash
    Route::delete('/posts/{id}/destroy', [PostController::class, 'destroy'])->name('posts.destroy'); // Postni o'chirish
});

require __DIR__.'/auth.php';
