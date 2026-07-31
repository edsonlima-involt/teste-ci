<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/err', function () {
    throw new RuntimeException('ERRO para gerar log');
});

require __DIR__.'/settings.php';
