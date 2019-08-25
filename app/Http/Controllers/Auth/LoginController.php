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
    }

    //halaman login
    public function index()
    {
        return view('login/login');
    }

    //fungsi autentikasi login
    public function authenticate(Request $request)
    {
        $credentials = $request->only('nimornip', 'password');

        if (!Auth::attempt($credentials)) {
            // Authentication not passed...
            return response($this->api, 401);
        }

        // Authentication passed...
        $this->api['status'] = "validated";
        $this->api['role'] = Auth::user()->role;
        return $this->api;

    }
}
