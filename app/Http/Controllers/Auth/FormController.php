<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\User;
use App\Event;
use Alert;

class FormController extends Controller
{
    public function register(){
        return view('eo/eo_register');
    }

    public function index(){
        $userLogin = Auth::user();

        if($userLogin->role != 'EO'){
            ALert::error('Anda bukan Event Organizer. Silahkan masuk sebagai Event Organizer untuk melihat halaman ini','Ditolak');
            return back();
        }

        return view('eo/eo_index', [
            'userLogin' => $userLogin
        ]);
    }
    
    public function profil(){
        $userLogin = Auth::user();

        if($userLogin->role != 'EO'){
            ALert::error('Anda bukan Event Organizer. Silahkan masuk sebagai Event Organizer untuk melihat halaman ini','Ditolak');
            return back();
        }

        return view('eo/eo_profil', [
            'userLogin' => $userLogin
        ]);
    }

    public function createKegiatan(Request $request){

        $user_id = Auth::user()->id;

        $proposal = $request->file('proposal');
        $time = Carbon::now()->format('dmyHis-');
        $nama_proposal = $time.$proposal->getClientOriginalName();
        $proposal->move('document/proposal',$nama_proposal);
        
        $poster = $request->file('poster');
        $time = Carbon::now()->format('dmyHis-');
        $nama_poster = $time.$poster->getClientOriginalName();
        $poster->move('document/proposal',$nama_poster);

        $di_dalam_kampus = new kegiatan;
        $di_dalam_kampus->name = $request->name;
        $di_dalam_kampus->email = $request->email;
        $di_dalam_kampus->category = $request->category;
        $di_dalam_kampus->alamat = $request->location;
        $di_dalam_kampus->telp = $request->telp;
        $di_dalam_kampus->audience = $request->audience;
        $di_dalam_kampus->total_audience = $request->total;
        $di_dalam_kampus->date_start = $request->start;
        $di_dalam_kampus->date_end = $request->end;
        $di_dalam_kampus->budget = $request->budget;
        $di_dalam_kampus->detail_kegiatan = $request->note;
        $di_dalam_kampus->file_proposal = $nama_proposal;
        $di_dalam_kampus->file_poto = $nama_poster;
        $di_dalam_kampus->user_id = $user_id;
        $di_dalam_kampus->save();
        
        return redirect('/mahasiswa/didalamkampus')  ;
        
    }

    public function createKegiatanInternal(Request $request){
        $userLogin = Auth::user();
       
        return view('eo/eo_create_event',['event'=>$request,'userLogin' => $userLogin]);
    }

    public function partnerList(){
        $userLogin = Auth::user();

        if($userLogin->role != 'EO'){
            ALert::error('Anda bukan Event Organizer. Silahkan masuk sebagai Event Organizer untuk melihat halaman ini','Ditolak');
            return back();
        }

        return view('eo/eo_partner_list', [
            'userLogin' => $userLogin
        ]);
    }
    public function myEvent(){
        $userLogin = Auth::user();

        $event = Event::where('user_id',$userLogin->id)->get();

        if($userLogin->role != 'EO'){
            ALert::error('Anda bukan Event Organizer. Silahkan masuk sebagai Event Organizer untuk melihat halaman ini','Ditolak');
            return back();
        }

        return view('eo/eo_myevent', [
            'userLogin' => $userLogin,
            'events' => $event
        ]);
    }
    public function sponsorship(){
        $userLogin = Auth::user();

        if($userLogin->role != 'EO'){
            ALert::error('Anda bukan Event Organizer. Silahkan masuk sebagai Event Organizer untuk melihat halaman ini','Ditolak');
            return back();
        }

        return view('eo/eo_sponsorship', [
            'userLogin' => $userLogin
        ]);
    }

    public function deletekegiatan(Request $request){

        $delete = Event::where('id',$request->id)->delete();
        return back();
    }

    // public function updateEvent(Request $request){

    //     Event::where('id',$request->id)->update([

    //         'name' => $request->name,
    //         'email'=> $request->email,
    //         'category'=> $request->category,
    //         'alamat' => $request->location,
    //         'telp' => $request->telp,
    //         'audience' => $request->audience,
    //         'total_audience' => $request->total,
    //         'date_start' => $request->start,
    //         'date_end' => $request->end,
    //         'budget' => $request->budget,
    //         'detail_event' => $request->note,
    //         'file_proposal' => $request->nama_proposal,
    //         'file_poto' => $request->nama_poster,
    //     ]);

    //     return back();
    // }

}
