<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\rekap_prestasi;

class rekapprestasiController extends Controller
{

    public function show()
    {
        $data =  rekap_prestasi::all();
        return view('Mahasiswa/prestasi', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $rekap_prestasi = new rekap_prestasi();
        $rekap_prestasi->nama_organisasi = $request->nama_organisasi;
        $rekap_prestasi->nama_kegiatan = $request->nama_kegiatan;
        $rekap_prestasi->juara = $request->juara;
        $rekap_prestasi->nama_lomba = $request->nama_lomba;
        $rekap_prestasi->tanggal_kegiatan = $request->tanggal_kegiatan;
        $rekap_prestasi->angkatan = $request->angkatan;
        $rekap_prestasi->save();

        return redirect('/Mahasiswa/prestasi')  ;
    
    }
    public function index()
    {
        $rekap_prestasi = DB::table('rekap_prestasi')->get();
        return view('/Mahasiswa/prestasi',['data'=> $rekap_prestasi]);
    }

    public function create()
   {
       return view('/Mahasiswa/prestasi');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        DB::table('rekap_prestasi')->insert([
 
        'nama_organisasi' => $request->nama_kegiatan,
        'nama_kegiatan' => $request->nama_kegiatan,
        'juara' => $request->juara,
        'nama_lomba' => $request->nama_lomba,
        'tanggal_kegiatan' => $request->tanggal_kegiatan,
        'angkatan' => $request->angkatan,
        ]);
 
        return redirect('/Mahasiswa/prestasi')->with('alert-success','Berhasil Menambahkan Data!');
    }
    
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
}
