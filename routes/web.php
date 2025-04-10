<?php

use App\Livewire\Article\Show;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/login', Login::class)->name('login');

Route::get('/article/{slug}', Show::class)->name('article.content');

