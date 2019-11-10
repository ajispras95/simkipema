<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\dokumentasi_eksternal;
use Illuminate\Support\Facades\Auth;

class dokumentasieksternalController extends Controller
{

    public function show()
    {
        $data =  dokumentasi_eksternal::all();
        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return view('/lembaga/kosmik/dokumentasieksternal',['data' => $data]);
        }elseif($cek == 'UASC'){
            return view('/lembaga/uasc/dokumentasieksternal',['data' => $data]);
        }elseif($cek == 'HIMMAH'){
            return view('/lembaga/himmah/dokumentasieksternal',['data' => $data]);
        }elseif($cek == 'CENTRIS'){
            return view('/lembaga/centris/dokumentasieksternal',['data' => $data]);
        }elseif($cek == 'DPM'){
            return view('/lembaga/dpm/dokumentasieksternal',['data' => $data]);
        }elseif($cek == 'Mahasiswa'){
            return view('/Mahasiswa/dokumentasieksternal',['data' => $data]);
        }
        
    }

    public function insert(Request $request)
    {
        $dokumentasi_eksternal = new dokumentasi_eksternal();
        $dokumentasi_eksternal->nama_organisasi = $request->nama_organisasi;
        $dokumentasi_eksternal->nama_kegiatan = $request->nama_kegiatan;
        $dokumentasi_eksternal->kategori = $request->kategori;
        $dokumentasi_eksternal->tempat = $request->tempat;
        $dokumentasi_eksternal->angkatan = $request->angkatan;
        $dokumentasi_eksternal->status = $request->status;
        $dokumentasi_eksternal->save();

        $cek = Auth::user()->name;
    if ($cek == 'KOSMIK') {
        return redirect('/lembaga/kosmik/dokumentasieksternal');
    }elseif($cek == 'UASC'){
        return redirect('/lembaga/uasc/dokumentasieksternal');
    }elseif($cek == 'HIMMAH'){
        return redirect('/lembaga/himmah/dokumentasieksternal');
    }elseif($cek == 'CENTRIS'){
        return redirect('/lembaga/centris/dokumentasieksternal');
    }elseif($cek == 'DPM'){
        return redirect('/lembaga/dpm/dokumentasieksternal');
    }else{
        return redirect('/Mahasiswa/dokumentasieksternal');
    }

    }

    public function index()
    {
        $dokumentasi_eksternal = DB::table('dokumentasi_eksternal')->get();
        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return redirect('/lembaga/kosmik/dokumentasieksternal',['data'=> $dokumentasi_eksternal]);
        }elseif($cek == 'UASC'){
            return redirect('/lembaga/uasc/dokumentasieksternal',['data'=> $dokumentasi_eksternal]);
        }elseif($cek == 'HIMMAH'){
            return redirect('/lembaga/himmah/dokumentasieksternal',['data'=> $dokumentasi_eksternal]);
        }elseif($cek == 'CENTRIS'){
            return redirect('/lembaga/centris/dokumentasieksternal',['data'=> $dokumentasi_eksternal]);
        }elseif($cek == 'DPM'){
            return redirect('/lembaga/dpm/dokumentasieksternal',['data'=> $dokumentasi_eksternal]);
        }else{
            return redirect('/Mahasiswa/dokumentasieksternal',['data'=> $dokumentasi_eksternal]);
        }
        
    }

    public function create()
   {
       $cek = Auth::user()->name;
    if ($cek == 'KOSMIK') {
        return redirect('/lembaga/kosmik/dokumentasieksternal');
    }elseif($cek == 'UASC'){
        return redirect('/lembaga/uasc/dokumentasieksternal');
    }elseif($cek == 'HIMMAH'){
        return redirect('/lembaga/himmah/dokumentasieksternal');
    }elseif($cek == 'CENTRIS'){
        return redirect('/lembaga/centris/dokumentasieksternal');
    }elseif($cek == 'DPM'){
        return redirect('/lembaga/dpm/dokumentasieksternal');
    }else{
        return redirect('/Mahasiswa/dokumentasieksternal');
    }
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        DB::table('dokumentasi_eksternal')->insert([
 
        'nama_organisasi' => $request->nama_kegiatan,
        'nama_kegiatan' => $request->nama_kegiatan,
        'juara' => $request->juara,
        'tanggal_kegiatan' => $request->tanggal_kegiatan,
        'angkatan' => $request->angkatan,
        'status' => $request->status,
        ]);
 
        $cek = Auth::user()->name;
       if ($cek == 'KOSMIK') {
           return redirect('/lembaga/kosmik/dokumentasieksternal')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'UASC'){
           return redirect('/lembaga/uasc/dokumentasieksternal')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'HIMMAH'){
           return redirect('/lembaga/himmah/dokumentasieksternal')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'CENTRIS'){
           return redirect('/lembaga/centris/dokumentasieksternal')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'DPM'){
           return redirect('/lembaga/dpm/dokumentasieksternal')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'Mahasiswa'){
           return redirect('/Mahasiswa/dokumentasieksternal')->with('alert-success','Berhasil Menambahkan Data!');;
       }
    }
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
}
