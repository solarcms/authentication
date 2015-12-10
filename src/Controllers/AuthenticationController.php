<?php

namespace Solarcms\Authentication\Controllers;

use App\Http\Controllers\Controller;
use Solarcms\Authentication\Authentication;

use App\User;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthenticationController extends Controller {

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/solar/dashboard';
    protected $loginPath = '/solar/auth/login';
    protected $redirectAfterLogout = '/solar/auth/login';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login() {
        return view('Authentication::login');
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }


    public function getRegister()
    {
        return view('Authentication::register');
    }


}