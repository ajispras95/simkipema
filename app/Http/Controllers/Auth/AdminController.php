<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use Alert;

class AdminController extends Controller
{
    public function index(){
        $userLogin = Auth::user();

        if($userLogin->role != 'Admin'){
            ALert::error('Anda tidak diizinkan untuk melihat halaman ini','Ditolak');
            return back();
        }

        return view('admin/admin_index', [
            'userLogin' => $userLogin
        ]);
    }

    public function manageEvents(){
        $userLogin = Auth::user();

        if($userLogin->role != 'Admin'){
            ALert::error('Anda tidak diizinkan untuk melihat halaman ini','Ditolak');
            return back();
        }

        return view('admin/admin_manage_event', [
            'userLogin' => $userLogin
        ]);
    }

    public function manageUsers(){
        $userLogin = Auth::user();

        if($userLogin->role != 'Admin'){
            ALert::error('Anda tidak diizinkan untuk melihat halaman ini','Ditolak');
            return back();
        }

        return view('admin/admin_manage_user', [
            'userLogin' => $userLogin
        ]);
    }

    public function bookingEvents(){
        $userLogin = Auth::user();

        if($userLogin->role != 'Admin'){
            ALert::error('Anda tidak diizinkan untuk melihat halaman ini','Ditolak');
            return back();
        }

        return view('admin/admin_booking_event', [
            'userLogin' => $userLogin
        ]);
    }
}
