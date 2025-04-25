<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Models\VerificationCode;
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
            VerificationCode::create([
                'ip_address' => \Request()->ip(),
                'code' => Str::random(6),
                'email' => $this->email,
                'expires_at' => now()->addMinutes(15),
            ]);
            return redirect()->route('verify');
        }
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
