<?php

use App\Http\Controllers\PostController as AppPostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('posts', AppPostController::class);
});

require __DIR__ . '/auth.php';
