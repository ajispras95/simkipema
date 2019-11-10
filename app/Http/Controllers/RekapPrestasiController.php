<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\rekap_prestasi;
use Illuminate\Support\Facades\Auth;

class rekapprestasiController extends Controller
{

    public function show()
    {
        $data =  rekap_prestasi::all();
        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return view('/lembaga/kosmik/prestasi',['data' => $data]);
        }elseif($cek == 'KOSMIK'){
            return view('/lembaga/dpm/prestasi',['data' => $data]);
        }elseif($cek == 'DPM'){
            return view('/lembaga/himmah/prestasi',['data' => $data]);
        }elseif($cek == 'HIMMAH'){
            return view('/lembaga/centris/prestasi',['data' => $data]);
        }elseif($cek == 'CENTRIS'){
            return view('/lembaga/dpm/prestasi',['data' => $data]);
        }elseif($cek == 'DPM'){
            return view('/Mahasiswa/prestasi',['data' => $data]);
        }elseif($cek == 'Mahasiswa'){
        }
        
    }

    public function insert(Request $request)
    {
        $rekap_prestasi = new rekap_prestasi();
        $rekap_prestasi->nama_organisasi = $request->nama_organisasi;
        $rekap_prestasi->nama_kegiatan = $request->nama_kegiatan;
        $rekap_prestasi->juara = $request->juara;
        $rekap_prestasi->nama_lomba = $request->nama_lomba;
        $rekap_prestasi->tanggal_kegiatan = $request->tanggal_kegiatan;
        $rekap_prestasi->angkatan = $request->angkatan;
        $rekap_prestasi->save();

        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return redirect('/lembaga/kosmik/prestasi');
        }elseif($cek == 'UASC'){
            return redirect('/lembaga/uasc/prestasi');
        }elseif($cek == 'HIMMAH'){
            return redirect('/lembaga/himmah/prestasi');
        }elseif($cek == 'CENTRIS'){
            return redirect('/lembaga/centris/prestasi');
        }elseif($cek == 'DPM'){
            return redirect('/lembaga/dpm/prestasi');
        }else{
            return redirect('/Mahasiswa/prestasi');
        }
    
    }
    public function index()
    {
        $rekap_prestasi = DB::table('rekap_prestasi')->get();
        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return redirect('/lembaga/kosmik/prestasi',['data'=> $rekap_prestasi]);
        }elseif($cek == 'UASC'){
            return redirect('/lembaga/uasc/prestasi',['data'=> $rekap_prestasi]);
        }elseif($cek == 'HIMMAH'){
            return redirect('/lembaga/himmah/prestasi',['data'=> $rekap_prestasi]);
        }elseif($cek == 'CENTRIS'){
            return redirect('/lembaga/centris/prestasi',['data'=> $rekap_prestasi]);
        }elseif($cek == 'DPM'){
            return redirect('/lembaga/dpm/prestasi',['data'=> $rekap_prestasi]);
        }else{
            return redirect('/Mahasiswa/prestasi',['data'=> $rekap_prestasi]);
        }
    }

    public function create()
   {
    $cek = Auth::user()->name;
    if ($cek == 'KOSMIK') {
        return redirect('/lembaga/kosmik/prestasi');
    }elseif($cek == 'UASC'){
        return redirect('/lembaga/uasc/prestasi');
    }elseif($cek == 'HIMMAH'){
        return redirect('/lembaga/himmah/prestasi');
    }elseif($cek == 'CENTRIS'){
        return redirect('/lembaga/centris/prestasi');
    }elseif($cek == 'DPM'){
        return redirect('/lembaga/dpm/prestasi');
    }else{
        return redirect('/Mahasiswa/prestasi');
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
        DB::table('rekap_prestasi')->insert([
 
        'nama_organisasi' => $request->nama_kegiatan,
        'nama_kegiatan' => $request->nama_kegiatan,
        'juara' => $request->juara,
        'nama_lomba' => $request->nama_lomba,
        'tanggal_kegiatan' => $request->tanggal_kegiatan,
        'angkatan' => $request->angkatan,
        ]);
 
        $cek = Auth::user()->name;
       if ($cek == 'KOSMIK') {
           return redirect('/lembaga/kosmik/prestasi')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'UASC'){
           return redirect('/lembaga/uasc/prestasi')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'HIMMAH'){
           return redirect('/lembaga/himmah/prestasi')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'CENTRIS'){
           return redirect('/lembaga/centris/prestasi')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'DPM'){
           return redirect('/lembaga/dpm/prestasi')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'Mahasiswa'){
           return redirect('/Mahasiswa/prestasi')->with('alert-success','Berhasil Menambahkan Data!');;
       }
    }
    
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
}
