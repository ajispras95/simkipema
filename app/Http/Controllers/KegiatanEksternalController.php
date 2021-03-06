<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan_Eksternal;

class KegiatanEksternalController extends Controller
{

    public function show()
    {
        $data =  Kegiatan_Eksternal::all();
        return view('Mahasiswa/KegiatanEksternal', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $kegiatan_Eksternal = new Kegiatan_Eksternal();
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
