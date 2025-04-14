<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

Route::view('/', 'home')->name('home');

Route::get('/counter', Counter::class);


