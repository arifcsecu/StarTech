<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $remember = false;

    protected $rules = [
        'email'    => 'required|email',
        'password' => 'required|string|min:6',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember))
        {
            session()->flash('success', 'Welcome back!');
            return redirect()->intended('/dashboard');
        }

        $this->addError('email', 'Invalid credentials.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
