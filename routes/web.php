<?php

use App\Models\Post;
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

Route::get('/filesandvideos', function () {
    $files = \App\Models\Post::where('type', 'post')->get();
    $videos = \App\Models\Post::where('type', 'video')->get();
    return view('FilesAndVideos', compact('files', 'videos'));
})->name('filesandvideos');
Route::view('/contact', 'Contact')->name('contact');

Route::get('/files/{post}', function (Post $post) {
    return view('show', compact('post'));
})->name('file.show');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

//require __DIR__.'/auth.php';
