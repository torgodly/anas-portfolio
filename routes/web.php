<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $user = \App\Models\User::first();
    return view('home', compact('user'));
})->name('home');
Route::get('/snapchat-lenses', function () {
    //if there is category in the url then filter the lenses by category
    $lenses = \App\Models\Len::all();
    if (request('category')) {
        $lenses = \App\Models\Len::where('category', request('category'))->get();
    }
    return view('SnapchatLenses', compact('lenses'));
})->name('snapchat-lenses');
Route::view('/filesandvideos', 'FilesAndVideos')->name('filesandvideos');
Route::view('/contact', 'Contact')->name('contact');

//Route::view('profile', 'profile')
//    ->middleware(['auth'])
//    ->name('profile');

//require __DIR__.'/auth.php';
