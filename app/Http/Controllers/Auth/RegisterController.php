<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

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
        return Validator::make(
            $data,
            [
                'user_name' => ['required', 'string', 'max:25', 'unique:users'],
                'first_name' => ['required', 'string', 'max:25'],
                'last_name' => ['required', 'string', 'max:25'],
                'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
                'password' => [
                    'required', 'confirmed',
                    Password::min(8) // minimum 8 caractères   
                        ->mixedCase() // Require at least one uppercase and one lowercase letter...
                        ->letters()  // Require at least one letter...
                        ->numbers() // Require at least one number...
                        ->symbols() // Require at least one symbol...       
                ],
                'politique' => 'required', // on vérifie que la checkbox est cochée
            ],
            ['politique.required' => 'Veuillez cocher la case pour accepter la politique de confidentialité et les mentions légales']
        );  // message d'erreur personnalisé si on ne coche pas la checkbox
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'last_name' => $data['last_name'],
            'first_name' => $data['first_name'],
            'user_name' => $data['user_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
