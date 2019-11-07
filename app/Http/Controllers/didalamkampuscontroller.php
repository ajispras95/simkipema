<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\di_dalam_kampus;
use File;

class didalamkampusController extends Controller
{

    public function show()
    {
        $data =  di_dalam_kampus::all();
        return view('/Mahasiswa/didalamkampus', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $di_dalam_kampus = new di_dalam_kampus();
        $di_dalam_kampus->nama_kegiatan = $request->nama_kegiatan;
        $di_dalam_kampus->program_kerja_divisi = $request->program_kerja_divisi;
        $di_dalam_kampus->predikat = $request->predikat;
        $di_dalam_kampus->waktu_pelaksanaan = $request->waktu_pelaksanaan;
        $di_dalam_kampus->tempat = $request->tempat;
        $di_dalam_kampus->tingkat = $request->tingkat;
        $di_dalam_kampus->scan_bukti = $request->scan_bukti;
        $di_dalam_kampus->save();

        return redirect('/Mahasiswa/didalamkampus')  ;

    }

    public function index()
    {
        $di_dalam_kampus = DB::table('di_dalam_kampus')->get();
        return view('/Mahasiswa/didalamkampus',['data'=> $di_dalam_kampus]);
    }

    public function create()
   {
       return view('/Mahasiswa/didalamkampus');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       DB::table('di_dalam_kampus')->insert([

       'nama_kegiatan' => $request->nama_kegiatan,
       'program_kerja_divisi' => $request->program_kerja_divisi,
       'predikat' => $request->predikat,
       'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
       'tempat' => $request->tempat,
       'skala_kegiatan' => $request->skala_kegiatan,
       'tingkat' => $request->tingkat,
       'scan_bukti' => $request->scan_bukti
       ]);

       return redirect('/Mahasiswa/didalamkampus')->with('alert-success','Berhasil Menambahkan Data!');
   }
//    public function hapus($id){
       
// 	// hapus file
// 	$di_dalam_kampus = table::where('id',$id)->first();
// 	File::delete('di_dalam_kampus/'.$di_dalam_kampus->data);
 
// 	// hapus data
// 	
 
// 	return redirect()->back();
// }

  

    // method untuk hapus data pegawai
    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('di_dalam_kampus')->where($id->d)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/Mahasiswa/didalamkampus');
    }



}
