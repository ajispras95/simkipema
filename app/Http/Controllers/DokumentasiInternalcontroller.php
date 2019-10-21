<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dokumentasi_internal;

class DokumentasiInternalController extends Controller
{

    public function show()
    {
        $data =  dokumentasi_internal::all();
        return view('Mahasiswa/DokumentasiInternal', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $dokumentasi_internal = new dokumentasi_internal();
        $dokumentasi_internal->nama_organisasi = $request->nama_organisasi;
        $dokumentasi_internal->nama_kegiatan = $request->nama_kegiatan;
        $dokumentasi_internal->kategori = $request->kategori;
        $dokumentasi_internal->tempat = $request->tempat;
        $dokumentasi_internal->status = $request->status;
        $dokumentasi_internal->save();
    }
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
}
