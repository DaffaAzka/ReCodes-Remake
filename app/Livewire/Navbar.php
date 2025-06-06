<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar');
    }

    public function signOut() {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('index');


    }
}

