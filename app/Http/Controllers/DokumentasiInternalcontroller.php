<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokumentasi_Internal;

class DokumentasiInternalController extends Controller
{

    public function show()
    {
        $data =  Dokumentasi_Internal::all();
        return view('Mahasiswa/DokumentasiInternal', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $Dokumentasi_Internal = new Dokumentasi_Internal();
        $Dokumentasi_Internal->nama_organisasi = $request->nama_organisasi;
        $Dokumentasi_Internal->nama_kegiatan = $request->nama_kegiatan;
        $Dokumentasi_Internal->kategori = $request->kategori;
        $Dokumentasi_Internal->tempat = $request->tempat;
        $Dokumentasi_Internal->status = $request->status;
        $Dokumentasi_Internal->save();
    }
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
}
