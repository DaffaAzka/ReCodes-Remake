<?php

use App\Livewire\Article\Index;
use App\Livewire\Article\Show;
use App\Livewire\Article\Store;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Dashboard;
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
    // Route::get('/option-store', OptionStore::class)->name('option-store');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/article/{slug}', Show::class)->name('article.content');
    Route::get('create/article', Store::class)->name('article.create');
});
