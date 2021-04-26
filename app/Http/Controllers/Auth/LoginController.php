<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function login(Request $request) 
    // {
    //     $user = User::where('email', $request['email'])->first();

    //     Auth::login($user);

    //     if (Auth()->User()->hasVerifiedEmail()) {
    //         return redirect()->to('/');
    //     } else {

    //         $nombre = $user->email;
    //         $to = $user->firs_name;
    //         $caracteres_permitidos = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //         $longitud = 6;
    //         $codigo = substr(str_shuffle($caracteres_permitidos), 0, $longitud);

    //         $code = UserCode::create([
    //             'user_id' => $user->id,
    //             'code' => $codigo
    //         ]);

    //         Mail::send('mail', ['nombre' => $nombre, 'codigo' => $codigo, 'user' => $user], function ($message) use ($to){

    //             $message->subject('Correo de verificación');
    //             $message->to($to);
            
    //         });

    //         return redirect()->to('verification-code');
    //     }
        
    // }

}
