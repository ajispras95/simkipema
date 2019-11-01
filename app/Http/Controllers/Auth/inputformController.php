<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Event;
use App\Category;
use App\SponsorInterest;
use App\SponsoredEvent;
 
 
class didalamkampusController extends Controller
{
    public function form()
    {
    	// mengambil data dari table pegawai
    	$di_dalam_kampus = DB::table('di_dalam_kampus')->get();
 
    	// mengirim data pegawai ke view index
    	return view('didalamkampus',['didalamkampus' => $di_dalam_kampus]);
 
	}
}