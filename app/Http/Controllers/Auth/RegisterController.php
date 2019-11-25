<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Nombre' => ['required', 'string', 'max:255'],
            'Edad' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'Mail' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'NombreUsuario' => ['required', 'string', 'min:8', 'confirmed'],
            'Contraseña' => ['required', 'string', 'min:8', 'confirmed'],
            'telefono' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'Nombre' => $data['Nombre'],
            'Edad' => $data['edad'],
            'Mail'=>$data['Mail'],
            'NombreUsuario' => $data['NombreUsuario'],
            'Contraseña' => Hash::make($data['Contraseña']),
            'telefono' => $data['telefono'],
            
        ]);
    }
}
