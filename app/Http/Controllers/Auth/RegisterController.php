<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
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
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            /*'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'home_address' => ['required', 'string', 'max:255'],
            'apartment' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'stat' => ['required', 'string', 'max:255'],
            'zip_code' => ['required', 'string', 'max:10'],
            'phone' => ['required', 'string', 'max:20'],
            'dob' => ['required', 'string', 'max:255'],
            'home_ownership' => ['required', 'string', 'max:255'],
            'check_graduation' => ['required', 'string', 'max:255'],
            'school_name' => ['required', 'string', 'max:255'],
            'undergraduate' => ['required', 'string', 'max:255'],
            'graduation_date' => ['required', 'string', 'max:255'],
            'emp_status' => ['required', 'string', 'max:255'],
            'emp_name' => ['required', 'string', 'max:255'],
            'income_total' => ['required', 'string', 'max:10'],
            'exp_total' => ['required', 'string', 'max:5'],*/
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

            'first_mame' => $data['first_name'],
            'last_name' => $data['last_name'],
            'home_address' => $data['home_address'],
            'apartment' => $data['apartment'],
            'city' => $data['city'],
            'stat' => $data['stat'],
            'zip_code' => $data['zip_code'],
            'phone' => $data['phone'],
            'dob' => $data['dob'],
            'home_ownership' => $data['home_ownership'],
            'check_graduation' => $data['check_graduation'],
            'school_name' => $data['school_name'],
            'undergraduate' => $data['undergraduate'],
            'graduation_date' => $data['graduation_date'],
            'emp_status' => $data['emp_status'],
            'emp_name' => $data['emp_name'],
            'income_total' => $data['income_total'],
            'exp_total' => $data['exp_total'],
        ]);
    }
}
