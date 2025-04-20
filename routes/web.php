<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

Route::view('/', 'home')->name('home');
Route::view('/affiliate-program', 'affiliate-program');

Route::get('/counter', Counter::class);
