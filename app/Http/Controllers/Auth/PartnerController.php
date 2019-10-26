<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;

use App\User;
use Alert;

class PartnerController extends Controller
{
    public function register(){

        $categories = Category::All();
        return view('partner/partner_register',['categories' => $categories]);
    }

    public function index(){
        $userLogin = Auth::user();

        if($userLogin->role != 'Sponsor'){
            ALert::error('Anda bukan partner. Silahkan masuk sebagai partner untuk melihat halaman ini','Ditolak');
            return redirect('/eo');
        }

        if($userLogin->detail==NULL){
            return view('partner/partner_create_detail', [
                'userLogin' => $userLogin]);
        }else{
            return view('partner/partner_index', [
                'userLogin' => $userLogin]);
        }
    }

    public function profil(){
        $userLogin = Auth::user();

        if($userLogin->role != 'Sponsor'){
            ALert::error('Anda bukan partner. Silahkan masuk sebagai partner untuk melihat halaman ini','Ditolak');
            return back();
        }

        return view('partner/partner_profil', [
            'userLogin' => $userLogin
        ]);
    }

    public function eventList(){
        $userLogin = Auth::user();

        if($userLogin->role != 'Sponsor'){
            ALert::error('Anda bukan partner. Silahkan masuk sebagai partner untuk melihat halaman ini','Ditolak');
            return back();
        }

        if($userLogin->detail==NULL){
            return view('partner/partner_create_detail', [
                'userLogin' => $userLogin]);
        }else{
            return view('partner/partner_event_list', [
                'userLogin' => $userLogin]);
        }

    }

    public function partnerBookingevent(){
        $userLogin = Auth::user();

        if($userLogin->role != 'Sponsor'){
            ALert::error('Anda bukan partner. Silahkan masuk sebagai partner untuk melihat halaman ini','Ditolak');
            return back();
        }

        if($userLogin->detail==NULL){
            return view('partner/partner_create_detail', [
                'userLogin' => $userLogin]);
        }else{
            return view('partner/partner_bookingevent', [
                'userLogin' => $userLogin]);
        }
    }

    public function partnersponsorship(){
        $userLogin = Auth::user();

        if($userLogin->role != 'Sponsor'){
            ALert::error('Anda bukan partner. Silahkan masuk sebagai partner untuk melihat halaman ini','Ditolak');
            return back();
        }

        if($userLogin->detail==NULL){
            return view('partner/partner_create_detail', [
                'userLogin' => $userLogin]);
        }else{
            return view('partner/partner_sponsorship', [
                'userLogin' => $userLogin]);
        }
    }

    public function createbookingEvent(){
        $userLogin = Auth::user();

        if($userLogin->role != 'Sponsor'){
            ALert::error('Anda bukan partner. Silahkan masuk sebagai partner untuk melihat halaman ini','Ditolak');
            return back();
        }

        return view('partner/partner_create_bookingEvent', [
            'userLogin' => $userLogin
        ]);
    }

    public function saveDetail(Request $request){
        $userLogin = Auth::user();

        $user = User::where('id',$userLogin->id)->first();
        $user->detail = $request->detail;
        $user->company = $request->company;
        $user->save();

        return redirect('/partner');

    }
}
