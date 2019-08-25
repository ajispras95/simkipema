<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    public function create(Request $data)
    {
        return User::create([
            'name' => $data->name,
            'email' => $data->email,
            'nimornip' => $data->nimornip,
            'role' => $data->role,
            'password' => Hash::make($data['password']),
        ]);
    }
}
