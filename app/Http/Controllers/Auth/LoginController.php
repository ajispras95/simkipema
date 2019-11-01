<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    private $api = array();

    public function __construct(){
        $this->api['status'] = "unauthorized";
        $this->api['role'] = null;
        $this->api['name'] = null;
    }

    //halaman login
    public function index()
    {
        return view('login/login');
    }

    //fungsi autentikasi login
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            // Authentication not passed...
            return response($this->api, 401);
        }

        // Authentication passed...
        $this->api['status'] = "validated";
        $this->api['role'] = Auth::user()->role;
        $this->api['name'] = Auth::user()->name;
        return $this->api;

    }

    protected function redirectTo()
    {
        $user = Auth::user();

        if($user->role=='Admin'){
            return '/admin';
        }else if($user->role=='EO'){
            return '/eo';
        }else if($user->role=='Sponsor'){
            return '/partner';
        }
    }
}
