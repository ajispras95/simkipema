<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KegiatanAkademik;

class KegiatanAkademikController extends Controller
{

    public function show()
    {
        $data =  KegiatanAkademik::all();
        return view('Mahasiswa/KegiatanAkademik', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $kegiatan_akademik = new KegiatanAkademik;
        $kegiatan_akademik->nama_organisasi = $request->nama_organisasi;
        $kegiatan_akademik->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan_akademik->kategori = $request->kategori;
        $kegiatan_akademik->tempat = $request->tempat;
        $kegiatan_akademik->status = $request->status;
        $kegiatan_akademik->save();
    }
}
