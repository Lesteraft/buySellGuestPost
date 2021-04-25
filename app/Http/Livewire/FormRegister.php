<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class FormRegister extends Component
{

    public $first_name,$last_name,$password,$email;

    public function render()
    {
        return view('livewire.form-register');
    }
    
    public function submit()
    {

        
        
        $this->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'password' => 'required|min:8',
            'email' => 'required|string|email|max:255|unique:users',
        ]);
        
        $user = New User;
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();
        
        Auth::login($user);
        return redirect()->to('/');
        
    }

   
}
