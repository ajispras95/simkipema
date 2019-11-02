<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\dokumentasi_eksternal;

class dokumentasieksternalController extends Controller
{

    public function show()
    {
        $data =  dokumentasi_eksternal::all();
        return view('/Mahasiswa/dokumentasieksternal', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $dokumentasi_eksternal = new dokumentasi_eksternal();
        $dokumentasi_eksternal->nama_organisasi = $request->nama_organisasi;
        $dokumentasi_eksternal->nama_kegiatan = $request->nama_kegiatan;
        $dokumentasi_eksternal->kategori = $request->kategori;
        $dokumentasi_eksternal->tempat = $request->tempat;
        $dokumentasi_eksternal->angkatan = $request->angkatan;
        $dokumentasi_eksternal->status = $request->status;
        $dokumentasi_eksternal->save();

        return redirect('/Mahasiswa/dokumentasieksternal')  ;
    }

    public function index()
    {
        $dokumentasi_eksternal = DB::table('dokumentasi_eksternal')->get();
        return view('/Mahasiswa/dokumentasieksternal',['data'=> $dokumentasi_eksternal]);
    }

    public function create()
   {
       return view('/Mahasiswa/dokumentasieksternal');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        DB::table('dokumentasi_eksternal')->insert([
 
        'nama_organisasi' => $request->nama_kegiatan,
        'nama_kegiatan' => $request->nama_kegiatan,
        'juara' => $request->juara,
        'tanggal_kegiatan' => $request->tanggal_kegiatan,
        'angkatan' => $request->angkatan,
        'status' => $request->status,
        ]);
 
        return redirect('/Mahasiswa/dokumentasieksternal')->with('alert-success','Berhasil Menambahkan Data!');
    }
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
}
