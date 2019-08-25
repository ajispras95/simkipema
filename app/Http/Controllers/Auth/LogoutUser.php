<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LogoutUser extends Controller
{
    //
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
