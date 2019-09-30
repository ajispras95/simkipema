<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan_Internal;

class KegiatanInternalController extends Controller
{

    public function show()
    {
        $data =  Kegiatan_Internal::all();
        return view('Mahasiswa/KegiatanInternal', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $kegiatan_Internal = new Kegiatan_Internal();
        $kegiatan_Internal->nama_organisasi = $request->nama_organisasi;
        $kegiatan_Internal->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan_Internal->kategori = $request->kategori;
        $kegiatan_Internal->tempat = $request->tempat;
        $kegiatan_Internal->status = $request->status;
        $kegiatan_Internal->save();
    }
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
}
