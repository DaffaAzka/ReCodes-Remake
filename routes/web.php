<?php

use App\Livewire\Article\Index;
use App\Livewire\Article\Show;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\OptionStore;
use Illuminate\Support\Facades\Route;




Route::middleware(['guest'])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
    Route::get('/', function () {
        return view('welcome');
    })->name('index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/option-store', OptionStore::class)->name('option-store');
    Route::get('/article/{slug}', Show::class)->name('article.content');
    Route::get('/dashboard', Index::class)->name('dashboard');
});
