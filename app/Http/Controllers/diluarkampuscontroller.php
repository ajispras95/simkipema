<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\di_luar_kampus;
use Illuminate\Support\Facades\Auth;

class diluarkampusController extends Controller
{

    public function show()
    {
        $data =  di_luar_kampus::all();
        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return view('/lembaga/kosmik/diluarkampus',['data' => $data]);
        }elseif($cek == 'UASC'){
            return view('/lembaga/uasc/diluarkampus',['data' => $data]);
        }elseif($cek == 'HIMMAH'){
            return view('/lembaga/himmah/diluarkampus',['data' => $data]);
        }elseif($cek == 'CENTRIS'){
            return view('/lembaga/centris/diluarkampus',['data' => $data]);
        }elseif($cek == 'DPM'){
            return view('/lembaga/dpm/diluarkampus',['data' => $data]);
        }elseif($cek == 'Mahasiswa'){
            return view('/Mahasiswa/diluarkampus',['data' => $data]);
        }
        
    }

    public function insert(Request $request)
    {
        $di_luar_kampus = new di_luar_kampus();
        $di_luar_kampus->nama_kegiatan = $request->nama_kegiatan;
        $di_luar_kampus->dosen_pembimbing = $request->dosen_pembimbing;
        $di_luar_kampus->program_kerja_divisi = $request->program_kerja_divisi;
        $di_luar_kampus->predikat = $request->predikat;
        $di_luar_kampus->waktu_pelaksanaan = $request->waktu_pelaksanaan;
        $di_luar_kampus->tempat = $request->tempat;
        $di_luar_kampus->tingkat = $request->tingkat;
        $di_luar_kampus->scan_bukti = $request->scan_bukti;
        $di_luar_kampus->save();

        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return redirect('/lembaga/kosmik/diluarkampus');
        }elseif($cek == 'UASC'){
            return redirect('/lembaga/uasc/diluarkampus');
        }elseif($cek == 'HIMMAH'){
            return redirect('/lembaga/himmah/diluarkampus');
        }elseif($cek == 'CENTRIS'){
            return redirect('/lembaga/centris/diluarkampus');
        }elseif($cek == 'DPM'){
            return redirect('/lembaga/dpm/diluarkampus');
        }else{
            return redirect('/Mahasiswa/diluarkampus');
        }

    }

    public function index()
    {
        $di_luar_kampus = DB::table('di_luar_kampus')->get();
        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return redirect('/lembaga/kosmik/diluarkampus',['data'=> $di_luar_kampus]);
        }elseif($cek == 'UASC'){
            return redirect('/lembaga/uasc/diluarkampus',['data'=> $di_luar_kampus]);
        }elseif($cek == 'HIMMAH'){
            return redirect('/lembaga/himmah/diluarkampus',['data'=> $di_luar_kampus]);
        }elseif($cek == 'CENTRIS'){
            return redirect('/lembaga/centris/diluarkampus',['data'=> $di_luar_kampus]);
        }elseif($cek == 'DPM'){
            return redirect('/lembaga/dpm/diluarkampus',['data'=> $di_luar_kampus]);
        }else{
            return redirect('/Mahasiswa/diluarkampus',['data'=> $di_luar_kampus]);
        }
        
    }

    public function create()
   {

    $cek = Auth::user()->name;
    if ($cek == 'KOSMIK') {
        return redirect('/lembaga/kosmik/diluarkampus');
    }elseif($cek == 'UASC'){
        return redirect('/lembaga/uasc/diluarkampus');
    }elseif($cek == 'HIMMAH'){
        return redirect('/lembaga/himmah/diluarkampus');
    }elseif($cek == 'CENTRIS'){
        return redirect('/lembaga/centris/diluarkampus');
    }elseif($cek == 'DPM'){
        return redirect('/lembaga/dpm/diluarkampus');
    }else{
        return redirect('/Mahasiswa/diluarkampus');
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
        DB::table('di_luar_kampus')->insert([
 
        'nama_kegiatan' => $request->nama_kegiatan,
        'dosen_pembimbing' => $request->dosen_pembimbing,
        'program_kerja_divisi' => $request->program_kerja_divisi,
        'predikat' => $request->predikat,
        'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
        'tempat' => $request->tempat,
        'skala_kegiatan' => $request->skala_kegiatan,
        'tingkat' => $request->tingkat,
        'scan_bukti' => $request->scan_bukti
        ]);
 
        $cek = Auth::user()->name;
       if ($cek == 'KOSMIK') {
           return redirect('/lembaga/kosmik/diluarkampus')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'UASC'){
           return redirect('/lembaga/uasc/diluarkampus')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'HIMMAH'){
           return redirect('/lembaga/himmah/diluarkampus')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'CENTRIS'){
           return redirect('/lembaga/centris/diluarkampus')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'DPM'){
           return redirect('/lembaga/dpm/diluarkampus')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'Mahasiswa'){
           return redirect('/Mahasiswa/diluarkampus')->with('alert-success','Berhasil Menambahkan Data!');;
       }
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('diluarkampus')->where('diluarkampus_id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        $cek = Auth::user()->name;
    if ($cek == 'KOSMIK') {
        return redirect('/lembaga/kosmik/diluarkampus');
    }elseif($cek == 'UASC'){
        return redirect('/lembaga/uasc/diluarkampus');
    }elseif($cek == 'HIMMAH'){
        return redirect('/lembaga/himmah/diluarkampus');
    }elseif($cek == 'CENTRIS'){
        return redirect('/lembaga/centris/diluarkampus');
    }elseif($cek == 'DPM'){
        return redirect('/lembaga/dpm/diluarkampus');
    }else{
        return redirect('/Mahasiswa/diluarkampus');
    }
    }
    // public function deleteEvent(Request $request){

    //     $delete = Event::where('id',$request->id)->delete();
    //     return back();
    // }

    
}
