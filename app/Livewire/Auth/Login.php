<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Models\VerificationCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{

    #[Validate('required|email')]
    public $email;

    #[Validate('required')]
    public $password;


    public function login() {
        $this->validate();

        if (Auth::attempt(['email'=> $this->email,'password'=> $this->password])) {
            // $user = Auth::user();
            $user = User::where('email', $this->email)->first();
            // dd($user);

            // if ($user->is_verified == true) {
            //     session()->regenerate();
            //     return redirect()->route('dashboard');
            // }
            // } else {

            // }

            if ($user->is_verified == false) {
                // session()->regenerate();
                // return redirect()->route('dashboard');
            } else {
                VerificationCode::create([
                    'ip_address' => \Request()->ip(),
                    'code' => Str::random(6),
                    'email' => $this->email,
                    'expires_at' => now()->addMinutes(15),
                ]);
                return redirect()->route('verify');
            }


        }
    }


    public function render()
    {
        return view('livewire.auth.login');
    }
}
