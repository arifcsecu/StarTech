<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Auth;

Route::view('/', 'home')->name('home');
Route::view('/affiliate-program', 'affiliate-program');
Route::view('/login', 'livewire.auth.login');

Route::get('/counter', Counter::class);

Auth::routes(['reset' => true]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
