<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\di_dalam_kampus;
use Illuminate\Support\Facades\Auth;

class didalamkampusController extends Controller
{

        public function show()
    {
        $data =  di_dalam_kampus::all();
        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return view('/lembaga/kosmik/didalamkampus',['data' => $data]);
        }elseif($cek == 'UASC'){
            return view('/lembaga/uasc/didalamkampus',['data' => $data]);
        }elseif($cek == 'HIMMAH'){
            return view('/lembaga/himmah/didalamkampus',['data' => $data]);
        }elseif($cek == 'CENTRIS'){
            return view('/lembaga/centris/didalamkampus',['data' => $data]);
        }elseif($cek == 'DPM'){
            return view('/lembaga/dpm/didalamkampus',['data' => $data]);
        }else {
            return view('/Mahasiswa/didalamkampus',['data' => $data]);
        }
        
    }

    public function insert(Request $request)
    {
        $di_dalam_kampus = new di_dalam_kampus();
        $di_dalam_kampus->nama_kegiatan = $request->nama_kegiatan;
        $di_dalam_kampus->program_kerja_divisi = $request->program_kerja_divisi;
        $di_dalam_kampus->predikat = $request->predikat;
        $di_dalam_kampus->waktu_pelaksanaan = $request->waktu_pelaksanaan;
        $di_dalam_kampus->tempat = $request->tempat;
        $di_dalam_kampus->tingkat = $request->tingkat;
        $di_dalam_kampus->scan_bukti = $request->scan_bukti;
        $di_dalam_kampus->save();

        // return redirect('/Mahasiswa/didalamkampus')  ;
        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return redirect('/lembaga/kosmik/didalamkampus');
        }elseif($cek == 'UASC'){
            return redirect('/lembaga/uasc/didalamkampus');
        }elseif($cek == 'HIMMAH'){
            return redirect('/lembaga/himmah/didalamkampus');
        }elseif($cek == 'CENTRIS'){
            return redirect('/lembaga/centris/didalamkampus');
        }elseif($cek == 'DPM'){
            return redirect('/lembaga/dpm/didalamkampus');
        }else{
            return redirect('/Mahasiswa/didalamkampus');
        }

    }

    public function index()
    {
        $di_dalam_kampus = DB::table('di_dalam_kampus')->get();
        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return redirect('/lembaga/kosmik/didalamkampus',['data'=> $di_dalam_kampus]);
        }elseif($cek == 'UASC'){
            return redirect('/lembaga/uasc/didalamkampus',['data'=> $di_dalam_kampus]);
        }elseif($cek == 'HIMMAH'){
            return redirect('/lembaga/himmah/didalamkampus',['data'=> $di_dalam_kampus]);
        }elseif($cek == 'CENTRIS'){
            return redirect('/lembaga/centris/didalamkampus',['data'=> $di_dalam_kampus]);
        }elseif($cek == 'DPM'){
            return redirect('/lembaga/dpm/didalamkampus',['data'=> $di_dalam_kampus]);
        }else{
            return redirect('/Mahasiswa/didalamkampus',['data'=> $di_dalam_kampus]);
        }
        
    }

    public function create()
   {
    $cek = Auth::user()->name;
    if ($cek == 'KOSMIK') {
        return redirect('/lembaga/kosmik/didalamkampus');
    }elseif($cek == 'UASC'){
        return redirect('/lembaga/uasc/didalamkampus');
    }elseif($cek == 'HIMMAH'){
        return redirect('/lembaga/himmah/didalamkampus');
    }elseif($cek == 'CENTRIS'){
        return redirect('/lembaga/centris/didalamkampus');
    }elseif($cek == 'DPM'){
        return redirect('/lembaga/dpm/didalamkampus');
    }else{
        return redirect('/Mahasiswa/didalamkampus');
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
       
       DB::table('di_dalam_kampus')->insert([

       'nama_kegiatan' => $request->nama_kegiatan,
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
           return redirect('/lembaga/kosmik/didalamkampus')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'UASC'){
           return redirect('/lembaga/uasc/didalamkampus')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'HIMMAH'){
           return redirect('/lembaga/himmah/didalamkampus')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'CENTRIS'){
           return redirect('/lembaga/centris/didalamkampus')->with('alert-success','Berhasil Menambahkan Data!');;
       }elseif($cek == 'DPM'){
           return redirect('/lembaga/dpm/didalamkampus')->with('alert-success','Berhasil Menambahkan Data!');;
       }else{
           return redirect('/Mahasiswa/didalamkampus')->with('alert-success','Berhasil Menambahkan Data!');;
       }
    }

    public function detail($id)
    {
        $detail = DB::table('di_dalam_kampus')->where('id',$id)->first();
        
        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return view('/lembaga/kosmik/detail',['detail' => $detail]);
        }elseif($cek == 'UASC'){
            return view('/lembaga/uasc/detail',['detail' => $detail]);
        }elseif($cek == 'HIMMAH'){
            return view('/lembaga/himmah/detail',['detail' => $detail]);
        }elseif($cek == 'CENTRIS'){
            return view('/lembaga/centris/detail',['detail' => $detail]);
        }elseif($cek == 'DPM'){
            return view('/lembaga/dpm/detail',['detail' => $detail]);
        }else{
            return view('/Mahasiswa/detail',['detail' => $detail]);
        }
    }

    // method untuk hapus data pegawai
    public function hapus(Request $data)
    {
        $id = $data->id;
        // menghapus data pegawai berdasarkan id yang dipilih
         DB::table('di_dalam_kampus')->where('id',$id)->delete();
            
        // return redirect('/Mahasiswa/didalamkampus')  ;
        $cek = Auth::user()->name;
        if ($cek == 'KOSMIK') {
            return redirect('/lembaga/kosmik/didalamkampus');
        }elseif($cek == 'UASC'){
            return redirect('/lembaga/uasc/didalamkampus');
        }elseif($cek == 'HIMMAH'){
            return redirect('/lembaga/himmah/didalamkampus');
        }elseif($cek == 'CENTRIS'){
            return redirect('/lembaga/centris/didalamkampus');
        }elseif($cek == 'DPM'){
            return redirect('/lembaga/dpm/didalamkampus');
        }else{
            return redirect('/Mahasiswa/didalamkampus');
        }
    }
}
