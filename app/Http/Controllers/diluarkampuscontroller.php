<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\di_luar_kampus;

class diluarkampusController extends Controller
{

    public function show()
    {
        $data = di_luar_kampus::all();
        return view('/Mahasiswa/diluarkampus', ['data' => $data]);
    }

    public function insert(Request $request)
    {
        $di_luar_kampus = new di_luar_kampus();
        $di_luar_kampus->nama_kegiatan = $request->nama_kegiatan;
        $di_luar_kampus->dosen_pembimbing = $request->dosen_pembimbing;
        $di_luar_kampus->program_kerja_divisi = $request->program_kerja_divisi;
        $di_luar_kampus->predikat = $request->predikat;
        $di_luar_kampus->waktu_pelaksanaan = $request->waktu_pelaksanaan;
        $di_luar_kampus->tempat = $request->tempat;
        $di_luar_kampus->tingkat = $request->tingkat;
        $di_luar_kampus->scan_bukti = $request->scan_bukti;
        $di_luar_kampus->save();

        return redirect('/Mahasiswa/diluarkampus')  ;
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('di_dalam_kampus')->where('didalamkampus_id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/didalamkampus');
    }
    // public function deleteEvent(Request $request){

    //     $delete = Event::where('id',$request->id)->delete();
    //     return back();
    // }
}
