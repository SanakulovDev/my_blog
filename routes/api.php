<?php

// routes/api.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::middleware('api')->group(function () {
    Route::get('posts', [PostController::class, 'index']);
    Route::post('posts', [PostController::class, 'store']);
    Route::get('posts/{id}', [PostController::class, 'show']);
    Route::put('posts/{id}', [PostController::class, 'update']);
    Route::delete('posts/{id}', [PostController::class, 'destroy']);
});
