<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\WorkOS\Http\Middleware\ValidateSessionWithWorkOS;

Route::get('/', function () {
    return view('app');
})->name('home');

Route::get('/mission', function () {
    return view('mission');
})->name('mission');

Route::get('/account', function () {
    return view('account');
})->name('Account');

Route::get('/accountedit', function () {
    return view('accountedit');
})->name('Account.edit');



Route::middleware(['auth', ValidateSessionWithWorkOS::class])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
