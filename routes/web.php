<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $user = \App\Models\User::first();
    return view('home', compact('user'));
})->name('home');
Route::get('/snapchat-lenses', function () {
    //if there is category in the url then filter the lenses by category
    $lenses = \App\Models\Len::orderBy('created_at', 'desc')->get();
    if (request('category')) {
        $lenses = \App\Models\Len::where('category', request('category'))->get();
    }
    return view('SnapchatLenses', compact('lenses'));
})->name('snapchat-lenses');

Route::get('/filesandvideos', function () {
    $files = \App\Models\Post::where('type', 'post')->orderBy('created_at', 'desc')->paginate(3);
    $videos = \App\Models\Post::where('type', 'video')->orderBy('created_at', 'desc')->get();
    return view('FilesAndVideos', compact('files', 'videos'));
})->name('filesandvideos');
Route::get('/contact', function () {
    $user = \App\Models\User::first();
    return view('Contact', compact('user'));
})->name('contact');

Route::post('/contact', function () {
    $data = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);
    \App\Models\Contact::create($data);
    return back()->with('message', 'We received your message successfully, we will get back to you soon');
})->name('contact.store');

Route::get('/files/{post}', function (Post $post) {
    return view('show', compact('post'));
})->name('file.show');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

//require __DIR__.'/auth.php';
