<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\dokumentasi_internal;
use Illuminate\Support\Facades\Auth;

class dokumentasiinternalController extends Controller
{

    public function show()
    {
        $data =  dokumentasi_internal::all();
        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return view('/lembaga/kosmik/dokumentasiinternal',['data' => $data]);
        }elseif($cek == 'UASC'){
            return view('/lembaga/uasc/dokumentasiinternal',['data' => $data]);
        }elseif($cek == 'HIMMAH'){
            return view('/lembaga/himmah/dokumentasiinternal',['data' => $data]);
        }elseif($cek == 'CENTRIS'){
            return view('/lembaga/centris/dokumentasiinternal',['data' => $data]);
        }elseif($cek == 'DPM'){
            return view('/lembaga/dpm/dokumentasiinternal',['data' => $data]);
        }elseif($cek == 'Mahasiswa'){
            return view('/Mahasiswa/dokumentasiinternal',['data' => $data]);
        }
        
    }

    public function insert(Request $request)
    {
        $dokumentasi_internal = new dokumentasi_internal();
        $dokumentasi_internal->nama_organisasi = $request->nama_organisasi;
        $dokumentasi_internal->nama_kegiatan = $request->nama_kegiatan;
        $dokumentasi_internal->kategori = $request->kategori;
        $dokumentasi_internal->tempat = $request->tempat;
        $dokumentasi_internal->angkatan = $request->angkatan;
        $dokumentasi_internal->status = $request->status;
        $dokumentasi_internal->save();

        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return redirect('/lembaga/kosmik/dokumentasiinternal');
        }elseif($cek == 'UASC'){
            return redirect('/lembaga/uasc/dokumentasiinternal');
        }elseif($cek == 'HIMMAH'){
            return redirect('/lembaga/himmah/dokumentasiinternal');
        }elseif($cek == 'CENTRIS'){
            return redirect('/lembaga/centris/dokumentasiinternal');
        }elseif($cek == 'DPM'){
            return redirect('/lembaga/dpm/dokumentasiinternal');
        }else{
            return redirect('/Mahasiswa/dokumentasiinternal');
        }
    
       
    }
    public function index()
    {
        $dokumentasi_internal = DB::table('dokumentasi_internal')->get();
        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return redirect('/lembaga/kosmik/dokumentasiinternal',['data'=> $dokumentasi_internal]);
        }elseif($cek == 'UASC'){
            return redirect('/lembaga/uasc/dokumentasiinternal',['data'=> $dokumentasi_internal]);
        }elseif($cek == 'HIMMAH'){
            return redirect('/lembaga/himmah/dokumentasiinternal',['data'=> $dokumentasi_internal]);
        }elseif($cek == 'CENTRIS'){
            return redirect('/lembaga/centris/dokumentasiinternal',['data'=> $dokumentasi_internal]);
        }elseif($cek == 'DPM'){
            return redirect('/lembaga/dpm/dokumentasiinternal',['data'=> $dokumentasi_internal]);
        }else{
            return redirect('/Mahasiswa/dokumentasiinternal',['data'=> $dokumentasi_internal]);
        }
    }

    public function create()
   {
    $cek = Auth::user()->name;
    if ($cek == 'KOSMIK') {
        return redirect('/lembaga/kosmik/dokumentasiinternal');
    }elseif($cek == 'UASC'){
        return redirect('/lembaga/uasc/dokumentasiinternal');
    }elseif($cek == 'HIMMAH'){
        return redirect('/lembaga/himmah/dokumentasiinternal');
    }elseif($cek == 'CENTRIS'){
        return redirect('/lembaga/centris/dokumentasiinternal');
    }elseif($cek == 'DPM'){
        return redirect('/lembaga/dpm/dokumentasiinternal');
    }else{
        return redirect('/Mahasiswa/dokumentasiinternal');
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
        DB::table('dokumentasi_internal')->insert([
 
        'nama_organisasi' => $request->nama_kegiatan,
        'nama_kegiatan' => $request->nama_kegiatan,
        'juara' => $request->juara,
        'tanggal_kegiatan' => $request->tanggal_kegiatan,
        'angkatan' => $request->angkatan,
        'status' => $request->status,
        ]);
 
        $cek = Auth::user()->name;
       if ($cek == 'KOSMIK') {
           return redirect('/lembaga/kosmik/dokumentasiinternal')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'UASC'){
           return redirect('/lembaga/uasc/dokumentasiinternal')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'HIMMAH'){
           return redirect('/lembaga/himmah/dokumentasiinternal')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'CENTRIS'){
           return redirect('/lembaga/centris/dokumentasiinternal')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'DPM'){
           return redirect('/lembaga/dpm/dokumentasiinternal')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'Mahasiswa'){
           return redirect('/Mahasiswa/dokumentasiinternal')->with('alert-success','Berhasil Menambahkan Data!');;
       }
    }
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
}
