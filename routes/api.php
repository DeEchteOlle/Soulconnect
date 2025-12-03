<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/api/profiletest', [ProfileController::class, 'show']);
Route::get('settings/profile', [ProfileController::class, 'edit'])->name('profile.edit');

Route::post('/api/profiletest', [ProfileController::class, 'store']);