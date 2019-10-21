<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hapus_Akun;

class inputformController extends Controller
{
// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('users')->where('users_id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/mahasiswa');
}

