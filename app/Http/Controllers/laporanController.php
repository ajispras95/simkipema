<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\laporan;

class laporanController extends Controller
{

    public function show()
    {
        $data =  laporan::all();
        return view('/Mahasiswa/laporan',['data' => $data]);
        return view('/laporanK',['data' => $data]);
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

        return redirect('/Mahasiswa/laporan');
        return redirect('/laporanK');
        
    }
    

    // public function insert(Request $request)
    // {
    //     $laporan = new laporanK();
    //     $laporan->nama_kegiatan = $request->nama_kegiatan;
    //     $laporan->nama_organisasi = $request->nama_organisasi;
    //     $laporan->tanggal_kegiatan = $request->tanggal_kegiatan;
    //     $laporan->periode = $request->periode;
    //     $laporan->status = $request->status;
    //     $laporan->save();

    //     return redirect('/laporanK');
        
    // }
}
