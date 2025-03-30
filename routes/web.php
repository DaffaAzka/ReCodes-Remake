<?php

use App\Livewire\Article\Show;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/article/{slug}', Show::class)->name('article.content');

