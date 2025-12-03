<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\WorkOS\Http\Middleware\ValidateSessionWithWorkOS;
use App\Http\Controllers\Settings\ProfileController;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::get('/mission', function () {
    return Inertia::render('ourmission');
})->name('Our Mission');


Route::get('/account', function () {
    return Inertia::render('account');
})->name('Account');

Route::middleware([
    'auth',
    ValidateSessionWithWorkOS::class,
])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    
});


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
