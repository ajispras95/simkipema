<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class didakamkampusController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$di_dalam_kampus = DB::table('didalamkampus')->get();
 
    	// mengirim data pegawai ke view index
    	return view('didalamlampus',['didalamkampus' => $di_dalam_kampus]);
 
    }
}