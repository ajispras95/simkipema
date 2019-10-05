<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LEM_mhs;

class LEMmhsController extends Controller
{

    public function show()
    {
        $data =  LEM_mhs::all();
        return view('Mahasiswa/LEMmhs', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $kegiatan_Eksternal = new LEM_mhs();
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
