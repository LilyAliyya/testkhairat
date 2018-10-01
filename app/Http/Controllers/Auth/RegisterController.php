<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\MaklumatTanggungan;
use App\MaklumatBayaran;
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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'namapenuh' => 'required|string|max:225',
            'nomborkad' => 'required|string|max:14|unique:users',
            'alamatrumah' => 'required|string|max:255',
            'tarikhlahir' => 'required|date',
            'telrumah' => 'required|string|max:12',
            'telpemohon' => 'required|string|max:12',
            'namawaris' => 'required|string|max:225',
            'telwaris' => 'required|string|max:12',
            'tangnama' => 'string|max:225',
            'tangumur' => 'string|max:2',
            'tangkp' => 'string|max:14',
            'tanghubungan' => 'max:31',
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
        /*
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'namapenuh' => $data['namapenuh'],
            'nomborkad' => $data['nomborkad'],
            'alamatrumah' => $data['alamatrumah'],
            'tarikhlahir' => $data['tarikhlahir'],
            'telrumah' => $data['telrumah'],
            'telpemohon' => $data['telpemohon'],
            'namawaris' => $data['namawaris'],
            'telwaris' => $data['telwaris'],
        ]);

        return MaklumatTanggungan::create([
            'namapenuh' => $data['namapenuh'],
            'nomborkad' => $data['nomborkad'],
            'tangnama' => $data['tangnama'],
            'tangumur' => $data['tangumur'],
            'tangkp' => $data['tangkp'],
            'tanghubungan' => $data['tanghubungan'],
        ]);
        */

        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'namapenuh' => $data['namapenuh'],
            'nomborkad' => $data['nomborkad'],
            'alamatrumah' => $data['alamatrumah'],
            'tarikhlahir' => $data['tarikhlahir'],
            'telrumah' => $data['telrumah'],
            'telpemohon' => $data['telpemohon'],
            'namawaris' => $data['namawaris'],
            'telwaris' => $data['telwaris'],
        ]);

        MaklumatTanggungan::create([
            'namapenuh' => $data['namapenuh'],
            'nomborkad' => $data['nomborkad'],
            'tangnama' => $data['tangnama'],
            'tangumur' => $data['tangumur'],
            'tangkp' => $data['tangkp'],
            'tanghubungan' => $data['tanghubungan'],
        ]);

        MaklumatBayaran::create([
            'namapenuh' => $data['namapenuh'],
            'nomborkad' => $data['nomborkad'],
        ]);

        return $user;
    }
}
