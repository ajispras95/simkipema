<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\dokumentasi_internal;

class dokumentasiinternalController extends Controller
{

    public function show()
    {
        $data =  dokumentasi_internal::all();
        return view('/Mahasiswa/dokumentasiinternal', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $dokumentasi_internal = new dokumentasi_internal();
        $dokumentasi_internal->nama_organisasi = $request->nama_organisasi;
        $dokumentasi_internal->nama_kegiatan = $request->nama_kegiatan;
        $dokumentasi_internal->kategori = $request->kategori;
        $dokumentasi_internal->tempat = $request->tempat;
        $dokumentasi_internal->angkatan = $request->angkatan;
        $dokumentasi_internal->status = $request->status;
        $dokumentasi_internal->save();

        return redirect('/Mahasiswa/dokumentasiinternal')  ;
    }
    public function index()
    {
        $dokumentasi_internal = DB::table('dokumentasi_internal')->get();
        return view('/Mahasiswa/dokumentasiinternal',['data'=> $dokumentasi_internal]);
    }

    public function create()
   {
       return view('/Mahasiswa/dokumentasiinternal');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        DB::table('dokumentasi_internal')->insert([
 
        'nama_organisasi' => $request->nama_kegiatan,
        'nama_kegiatan' => $request->nama_kegiatan,
        'juara' => $request->juara,
        'tanggal_kegiatan' => $request->tanggal_kegiatan,
        'angkatan' => $request->angkatan,
        'status' => $request->status,
        ]);
 
        return redirect('/Mahasiswa/dokumentasiinternal')->with('alert-success','Berhasil Menambahkan Data!');
    }
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
}
