<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
    protected function validator(array $data, Request $request)
    {
        // dd($request->profil);
        if($request->profil == "professionnel") {
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

        }else{
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'name_society' => ['required', 'string', 'max:255'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        }
       
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        // dd($data['profil']);
        if($data['profil'] == "professionnel") {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'profil' => $data['profil'],
                'name_society' => 'professionnel',
                'password' => Hash::make($data['password']),
            ]);
            $newUser = User::where("email", $user->email)->first();
            User::find($newUser->id)->role()->attach(4);
        }else {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'profil' => $data['profil'],
                'name_society' => strtolower($data['name_society']),
                'password' => Hash::make($data['password']),
            ]);
            $newUser = User::where("email", $user->email)->first();
            User::find($newUser->id)->role()->attach(3);

        }

        return $user;
    }
}
