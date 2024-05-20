<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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

            'username' => ['required', 'string', 'max:10', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if ($data['refcode'] != null) {
            $usercode = User::where('usercode', $data['refcode'])->first();
            if ($usercode) {
                $refcode1 = $data['refcode'];
                if ($usercode->refcode1 != null) {
                    $refcode2 = $usercode->refcode1;
                } else {
                    $refcode2 = null;
                }
            } else {
                $refcode1 = null;
                $refcode2 = null;
            }
        } else {
            $refcode2 = null;
            $refcode1 = null;
        }
        $img_num=rand(1,72);
        $img="images/avtar/av-".$img_num.".png";
        
        return User::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'show_password' => $data['password'],
            'usercode' => generate_referral_number(),
            'refcode1' => $refcode1,
            'refcode2' => $refcode2,
            'img'=>$img,
            'ip' => request()->ip(),
            'last_login' => now(),

        ]);
    }
}
