<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dokumentasi_eksternal;

class DokumentasiEksternalController extends Controller
{

    public function show()
    {
        $data =  dokumentasi_eksternal::all();
        return view('/DokumentasiEksternal', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $dokumentasi_eksternal = new dokumentasi_eksternal();
        $dokumentasi_eksternal->nama_organisasi = $request->nama_organisasi;
        $dokumentasi_eksternal->nama_kegiatan = $request->nama_kegiatan;
        $dokumentasi_eksternal->kategori = $request->kategori;
        $dokumentasi_eksternal->tempat = $request->tempat;
        $dokumentasi_eksternal->status = $request->status;
        $dokumentasi_eksternal->save();

        return redirect('/DokumentasiEksternal')  ;
    }
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
}
