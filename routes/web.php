<?php

use App\Http\Controllers\ReplyController;
use App\Http\Controllers\ThreadController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/threads/create',[ThreadController::class, 'create'])->name('thread.create')->middleware('auth');
Route::get('/threads',[ThreadController::class,'index'])->name('threads');
Route::get('/threads/{channel}',[ThreadController::class, 'index']);

Route::get('/threads/{channel}/{thread}',[ThreadController::class, 'details'])->name('thread.details');
Route::post('/threads',[ThreadController::class,'store'])->middleware('auth');

Route::post('/threads/{channel}/{thread}/replies',[ReplyController::class, 'store'])->middleware('auth');








Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
