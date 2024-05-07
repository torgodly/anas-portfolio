<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/snapchat-lenses', 'SnapchatLenses')->name('snapchat-lenses');
Route::view('/filesandvideos', 'filesandvideos')->name('filesandvideos');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';