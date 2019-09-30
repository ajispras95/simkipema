<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokumentasi_Eksternal;

class DokumentasiEksternalController extends Controller
{

    public function show()
    {
        $data =  Dokumentasi_Eksternal::all();
        return view('Mahasiswa/DokumentasiEksternal', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $Dokumentasi_Eksternal = new Dokumentasi_Eksternal();
        $Dokumentasi_Eksternal->nama_organisasi = $request->nama_organisasi;
        $Dokumentasi_Eksternal->nama_kegiatan = $request->nama_kegiatan;
        $Dokumentasi_Eksternal->kategori = $request->kategori;
        $Dokumentasi_Eksternal->tempat = $request->tempat;
        $Dokumentasi_Eksternal->status = $request->status;
        $Dokumentasi_Eksternal->save();
    }
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
}
