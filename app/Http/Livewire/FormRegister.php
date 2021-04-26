<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserCode;
use Mail;
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

            try {
                $this->validate([
                    'first_name' => 'required|min:3',
                    'last_name' => 'required|min:3',
                    'password' => 'required|min:8',
                    'email' => 'required|string|email|max:255|unique:users',
                ]);
                

                $user = User::create([
                    'first_name' => $this->first_name,
                    'last_name' => $this->last_name,
                    'password' => Hash::make($this->password),
                    'email' => $this->email,

                ]);

                $nombre = $this->first_name;
                $to = $this->email;
                $caracteres_permitidos = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $longitud = 6;
                $codigo = substr(str_shuffle($caracteres_permitidos), 0, $longitud);

                $code = UserCode::create([
                    'user_id' => $user->id,
                    'code' => $codigo
                ]);

                Mail::send('mail', ['nombre' => $nombre, 'codigo' => $codigo, 'user' => $user], function ($message) use ($to){

                    $message->subject('Correo de verificación');
                    $message->to($to);
                
                });

                Auth::login($user);
                // return redirect()->to('/');
                return redirect()->to('verification-code');
                
            } catch (\Throwable $th) {

                // return redirect()->to('/');


                return response()->json([
                    'code' => '200',
                    'message' => 'error'
                ], 500);

            }
        
    }


   
}
