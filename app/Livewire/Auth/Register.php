<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{

    #[Validate('required|email|unique:users,email')]
    public $email;

    #[Validate('required|min:3|max:255')]
    public $name;

    #[Validate('required|min:8|max:255')]
    public $password;

    #[Validate('required|same:password')]
    public $repassword;

    function createUsername() {
        return Str::slug($this->name) . '-' . Str::random(5);
    }

    public function register() {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'username' => $this->createUsername(),
            'password' => bcrypt($this->password),
        ]);

        if ($user) {
            // $user->assignRole('user');
            return redirect()->route('login')->with("success", [
                'title' => 'Registration successful',
                'message' => 'Now you can login with your account',
            ]);
        }
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
