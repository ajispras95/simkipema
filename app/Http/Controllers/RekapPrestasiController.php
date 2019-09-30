<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekap_Prestasi;

class RekapPrestasiController extends Controller
{

    public function show()
    {
        $data =  Rekap_Prestasi::all();
        return view('Mahasiswa/prestasi', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $Rekap_Prestasi = new Rekap_Prestasi();
        $Rekap_Prestasi->nama_organisasi = $request->nama_organisasi;
        $Rekap_Prestasi->nama_kegiatan = $request->nama_kegiatan;
        $Rekap_Prestasi->kategori = $request->kategori;
        $Rekap_Prestasi->tempat = $request->tempat;
        $Rekap_Prestasi->status = $request->status;
        $Rekap_Prestasi->save();
    }
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
}
