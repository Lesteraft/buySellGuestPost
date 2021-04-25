<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{

    public $name, $email, $telefono, $password, $password_confirmation;

    public function render()
    {
        return view('livewire.register');
    }

    public function registrarme()
    {

        $this->validate([
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'telefono' => 'required|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = New User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->telefono = $this->telefono;
        $user->password = Hash::make($this->password);
        $user->save();
        $user->syncRoles('comun');

        Auth::login($user);
        $this->clearData();
        return redirect()->to('/');
    }

    public function clearData()
    {
        $this->name = '';
        $this->email = '';
        $this->telefono = '';
        $this->password = '';
        $this->password_confirmation = '';
    }
}
