<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{

    #[Validate('required|email')]
    public $email;

    #[Validate('required|password')]
    public $password;


    public function login() {
        $this->validate();

        if (Auth::attempt($this->email, $this->password)) {
            session()->regenerate();
            // return redirect()->intended('/dashboard');
        }
    }


    public function render()
    {
        return view('livewire.auth.login');
    }
}
