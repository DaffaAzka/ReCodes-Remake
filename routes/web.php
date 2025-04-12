<?php

use App\Livewire\Article\Show;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/login', Login::class)->name('login');
Route::get('register', Register::class)->name('register');
Route::get('/article/{slug}', Show::class)->name('article.content');

