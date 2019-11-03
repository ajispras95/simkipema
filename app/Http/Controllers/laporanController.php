<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\laporan;

class laporanController extends Controller
{

    public function show()
    {
        $data =  laporan::all();
        return view('/Mahasiswa/laporan',['data' => $data]);
    }

    public function insert(Request $request)
    {
        $laporan = new laporan();
        $laporan->nama_kegiatan = $request->nama_kegiatan;
        $laporan->nama_organisasi = $request->nama_organisasi;
        $laporan->tanggal_kegiatan = $request->tanggal_kegiatan;
        $laporan->periode = $request->periode;
        $laporan->status = $request->status;
        $laporan->save();

        return redirect('/Mahasiswa/laporan');
        
    }

    public function index()
    {
        $laporan = DB::table('laporan')->get();
        return view('/Mahasiswa/laporan',['data'=> $laporan]);
    }

    public function create()
   {
       return view('/Mahasiswa/laporan');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        DB::table('laporan')->insert([
 
        'nama_kegiatan' => $request->nama_kegiatan,
        'nama_organisasi' => $request->nama_organisasi,
        'tanggal_kegiatan' => $request->tanggal_kegiatan,
        'periode' => $request->periode,
        'status' => $request->status,
        ]);
 
        return redirect('/Mahasiswa/laporan')->with('alert-success','Berhasil Menambahkan Data!');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('laporan')->where('didalamkampus_id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/laporan');
    }
    // public function deleteEvent(Request $request){

    //     $delete = Event::where('id',$request->id)->delete();
    //     return back();
    // }

    
}