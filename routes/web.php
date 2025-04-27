<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

Route::view('/', 'home')->name('home');
Route::view('/affiliate-program', 'affiliate-program');
Route::view('/login', 'livewire.auth.login');
Route::view('/register', 'livewire.auth.register');
Route::view('/forgot-password', 'livewire.auth.forgot-password');
Route::view('/reset-password', 'livewire.auth.reset-password');
Route::view('/products', 'products');
Route::view('/products/{product}', 'product');
Route::view('/cart', 'cart');


Auth::routes(['reset' => true]);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');