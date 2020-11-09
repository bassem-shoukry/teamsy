<?php

namespace App\Http\Livewire\Auth;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;

class Register extends Component
{
    public string $name = '';

    public string $email = '';

    public string $password = '';

    public string $passwordConfirmation = '';

    public string $companyName = '';

    public function register()
    {
        $this->validate([
            'name' => ['required','min:5'],
            'email' => ['required', 'email', 'unique:users'],
            'companyName' => ['required', 'string','max:191', 'unique:tenants,name'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);


        $tenant = Tenant::create(['name' => $this->companyName]);

        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'role' => 'admin',
            'password' => Hash::make($this->password),
            'tenant_id' => $tenant
        ]);

        event(new Registered($user));

        Auth::login($user, true);

        return redirect()->intended(route('home'));
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }

    public function updated($value)
    {
        $this->resetErrorBag($value);
    }
}
