<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KOSMIK_mhs;

class KOSMIKmhsController extends Controller
{

    public function show()
    {
        $data =  KOSMIK_mhs::all();
        return view('Mahasiswa/KOSMIKmhs', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $kegiatan_Eksternal = new KOSMIK_mhs();
        $kegiatan_Eksternal->nama_organisasi = $request->nama_organisasi;
        $kegiatan_Eksternal->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan_Eksternal->kategori = $request->kategori;
        $kegiatan_Eksternal->tempat = $request->tempat;
        $kegiatan_Eksternal->status = $request->status;
        $kegiatan_Eksternal->save();
    }
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
}
