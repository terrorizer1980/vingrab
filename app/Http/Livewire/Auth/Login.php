<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    /** @var string */
    public $username = '';

    /** @var string */
    public $password = '';

    /** @var bool */
    public $remember = false;

    protected $rules = [
        'username' => ['required', 'username'],
        'password' => ['required'],
    ];

    public function authenticate()
    {
        //$this->validate();

        if (!Auth::attempt(['username' => $this->username, 'password' => $this->password], $this->remember)) {
            $this->addError('username', trans('auth.failed'));
            return;
        }
        //laravel session
        
        return redirect()->intended(route('home'));

    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.auth');
    }
}
