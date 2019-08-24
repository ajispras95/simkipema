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

    //halaman login
    public function index()
    {
        return view('login/login');
    }

    //fungsi autentikasi login
    public function authenticate(Request $request)
    {
        $credentials = $request->only('nim', 'password');

        if (!Auth::attempt($credentials)) {
            // Authentication not passed...
            // return redirect()->intended('dashboard');
            return redirect('login');
        }

        // Authentication not passed...

    }
}
