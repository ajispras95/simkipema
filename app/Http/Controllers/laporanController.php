<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\laporan;
use Illuminate\Support\Facades\Auth;

class laporanController extends Controller
{

    public function show()
    {
        $data =  laporan::all();
        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return view('/lembaga/kosmik/laporan',['data' => $data]);
        }elseif($cek == 'KOSMIK'){
            return view('/lembaga/dpm/laporan',['data' => $data]);
        }elseif($cek == 'DPM'){
            return view('/lembaga/himmah/laporan',['data' => $data]);
        }elseif($cek == 'HIMMAH'){
            return view('/lembaga/centris/laporan',['data' => $data]);
        }elseif($cek == 'CENTRIS'){
            return view('/lembaga/dpm/laporan',['data' => $data]);
        }elseif($cek == 'DPM'){
            return view('/Mahasiswa/laporan',['data' => $data]);
        }elseif($cek == 'Mahasiswa'){
        }
        
    }

    public function insert(Request $request)
    {
        $laporan = new laporan();
        $laporan->nama_kegiatan = $request->nama_kegiatan;
        $laporan->nama_organisasi = $request->nama_organisasi;
        $laporan->tanggal_kegiatan = $request->tanggal_kegiatan;
        $laporan->periode = $request->periode;
        $laporan->status = $request->status;
        $laporan->save();

        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return redirect('/lembaga/kosmik/laporan');
        }elseif($cek == 'UASC'){
            return redirect('/lembaga/uasc/laporan');
        }elseif($cek == 'HIMMAH'){
            return redirect('/lembaga/himmah/laporan');
        }elseif($cek == 'CENTRIS'){
            return redirect('/lembaga/centris/laporan');
        }elseif($cek == 'DPM'){
            return redirect('/lembaga/dpm/laporan');
        }else{
            return redirect('/Mahasiswa/laporan');
        }
        
    }

    public function index()
    {
        $laporan = DB::table('laporan')->get();
        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return redirect('/lembaga/kosmik/laporan',['data'=> $laporan]);
        }elseif($cek == 'UASC'){
            return redirect('/lembaga/uasc/laporan',['data'=> $laporan]);
        }elseif($cek == 'HIMMAH'){
            return redirect('/lembaga/himmah/laporan',['data'=> $laporan]);
        }elseif($cek == 'CENTRIS'){
            return redirect('/lembaga/centris/laporan',['data'=> $laporan]);
        }elseif($cek == 'DPM'){
            return redirect('/lembaga/dpm/laporan',['data'=> $laporan]);
        }else{
            return redirect('/Mahasiswa/laporan',['data'=> $laporan]);
        }
        
    }

    public function create()
   {
    $cek = Auth::user()->name;
    if ($cek == 'KOSMIK') {
        return redirect('/lembaga/kosmik/laporan');
    }elseif($cek == 'UASC'){
        return redirect('/lembaga/uasc/laporan');
    }elseif($cek == 'HIMMAH'){
        return redirect('/lembaga/himmah/laporan');
    }elseif($cek == 'CENTRIS'){
        return redirect('/lembaga/centris/laporan');
    }elseif($cek == 'DPM'){
        return redirect('/lembaga/dpm/laporan');
    }else{
        return redirect('/Mahasiswa/laporan');
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
        DB::table('laporan')->insert([
 
        'nama_kegiatan' => $request->nama_kegiatan,
        'nama_organisasi' => $request->nama_organisasi,
        'tanggal_kegiatan' => $request->tanggal_kegiatan,
        'periode' => $request->periode,
        'status' => $request->status,
        ]);
 
        $cek = Auth::user()->name;
       if ($cek == 'KOSMIK') {
           return redirect('/lembaga/kosmik/laporan')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'UASC'){
           return redirect('/lembaga/uasc/laporan')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'HIMMAH'){
           return redirect('/lembaga/himmah/laporan')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'CENTRIS'){
           return redirect('/lembaga/centris/laporan')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'DPM'){
           return redirect('/lembaga/dpm/laporan')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'Mahasiswa'){
           return redirect('/Mahasiswa/laporan')->with('alert-success','Berhasil Menambahkan Data!');;
       }
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('laporan')->where('didalamkampus_id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return redirect('/lembaga/kosmik/laporan');
        }elseif($cek == 'UASC'){
            return redirect('/lembaga/uasc/laporan');
        }elseif($cek == 'HIMMAH'){
            return redirect('/lembaga/himmah/laporan');
        }elseif($cek == 'CENTRIS'){
            return redirect('/lembaga/centris/laporan');
        }elseif($cek == 'DPM'){
            return redirect('/lembaga/dpm/laporan');
        }else{
            return redirect('/Mahasiswa/laporan');
        }
    }
    // public function deleteEvent(Request $request){

    //     $delete = Event::where('id',$request->id)->delete();
    //     return back();
    // }

    
}