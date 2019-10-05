<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DPM_mhs;

class DPMmhsController extends Controller
{

    public function show()
    {
        $data =  DPM_mhs::all();
        return view('Mahasiswa/DPMmhs', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $kegiatan_Eksternal = new DPM_mhs();
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
