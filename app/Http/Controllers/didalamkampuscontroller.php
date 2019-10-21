<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\di_dalam_kampus;

class didalamkampusController extends Controller
{

    public function show()
    {
        $data =  di_dalam_kampus::all();
        return view('Mahasiswa/didalamkampus', ['data' => $data]);
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
    }
    
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('di_dalam_kampus')->where('didalamkampus_id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/didalamkampus');
    }
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
}
