<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use App\di_dalam_kampus;
use App\di_luar_kampus;
use App\rekap_prestasi;
use App\laporan;
use App\dokumentasi_internal;
use App\dokumentasi_eksternal;

Auth::routes(); 

Route::get('/login',"Auth\LoginController@index");
Route::get('/register','Auth\RegisterController@create');
Route::get('/logout', 'Auth\LogoutUser@logout');
Route::post('/authenticate', 'Auth\LoginController@authenticate');


// Route::group(['middleware' => 'auth'],function(){



Route::get('/dashboard', function () {
    $data   =  di_dalam_kampus::all();
    $data2  =  di_luar_kampus::all();
    $jml = count($data) + count($data2);
    return view('Mahasiswa/dashboard', ['jmlkegiatan' => $jml]);
})->name('login')->middleware('auth:mahasiswa');

Route::get('/lembaga/centris/dashboard', function () {
    $data   =  di_dalam_kampus::all();
    $data2  =  di_luar_kampus::all();
    $jml = count($data) + count($data2);
    return view('/lembaga/centris/dashboard', ['jmlkegiatan' => $jml]);
})->name('login')->middleware('auth:CENTRIS');

Route::get('/lembaga/uasc/dashboard', function () {
    $data   =  di_dalam_kampus::all();
    $data2  =  di_luar_kampus::all();
    $jml = count($data) + count($data2);
    return view('/lembaga/uasc/dashboard', ['jmlkegiatan' => $jml]);
})->name('login')->middleware('auth:UASC');

Route::get('/lembaga/kosmik/dashboard', function () {
    $data   =  di_dalam_kampus::all();
    $data2  =  di_luar_kampus::all();
    $jml = count($data) + count($data2);
    return view('/lembaga/kosmik/dashboard', ['jmlkegiatan' => $jml]);
})->name('login')->middleware('auth:KOSMIK');

Route::get('/lembaga/himmah/dashboard', function () {
    $data   =  di_dalam_kampus::all();
    $data2  =  di_luar_kampus::all();
    $jml = count($data) + count($data2);
    return view('/lembaga/himmah/dashboard', ['jmlkegiatan' => $jml]);
})->name('login')->middleware('auth:HIMMAH');

Route::get('/lembaga/dpm/dashboard', function () {
    $data   =  di_dalam_kampus::all();
    $data2  =  di_luar_kampus::all();
    $jml = count($data) + count($data2);
    return view('/lembaga/dpm/dashboard', ['jmlkegiatan' => $jml]);
})->name('login')->middleware('auth:DPM');

// Route::get('/didalamkampus', function () {
//     return view('/Mahasiswa/didalamkampus');
// })->name('login')->middleware('auth:mahasiswa');


//admin
Route::get('/dashboardmin', function () {
    return view('Admin/dashboardmin');
})->name('login')->middleware('auth:Admin');


Route::get('/mahasiswa', function () {
    return view('Admin/mahasiswa');
});

Route::get('/KOSMIK', function () {
    return view('Admin/KOSMIK');
});

Route::get('/CENTRIS', function () {
    return view('Admin/CENTRIS');
});

Route::get('/DPM', function () {
    return view('Admin/DPM');
});

Route::get('/UASC', function () {
    return view('Admin/UASC');
});

Route::get('/HIMMAH', function () {
    return view('Admin/HIMMAH');
});

Route::get('/Pengguna', function () {
    return view('Admin/Pengguna');
});

Route::get('/CENTRIS', function () {
    return view('Admin/CENTRIS');
});

Route::get('/DPM', function () {
    return view('Admin/DPM');
});
Route::get('/KOSMIK', function () {
    return view('Admin/KOSMIK');
});

Route::get('/HIMMAH', function () {
    return view('Admin/HIMMAH');
});

Route::get('/UASC', function () {
    return view('Admin/UASC');
});

Route::get('/prestasidmin', function () {
    return view('Admin/prestasidmin');
});

Route::get('/DokumentasiInternalmin', function () {
    return view('Admin/DokumentasiInternalmin');
});

Route::get('/DokumentasiEksternalmin', function () {
    return view('Admin/DokumentasiEksternalmin');
});

Route::get('/laporandmin', function () {
    return view('Admin/laporandmin');
});

Route::get('/uploadproposal', function () {
    return view('Admin/uploadproposal');
});

Route::get('/uploaddok', function () {
    return view('Admin/uploaddok');
});

Route::get('/uploaddoknona', function () {
    return view('Admin/uploaddoknona');
});

Route::get('/keloladmin', function () {
    return view('Admin/keloladmin');
});

Route::get('/kelolamhs', function () {
    return view('Admin/kelolamhs');
});

Route::get('/kelolapengunjung', function () {
    return view('Admin/kelolapengunjung');
});

Route::get('/formkeloladmin', function () {
    return view('Admin/formkeloladmin');
});

Route::get('/profiladm', function () {
    return view('Admin/profiladm');
});

Route::get('/KegiatanInternaldmin', function () {
    return view('Admin/KegiatanInternaldmin');
});

Route::get('/KegiatanEksternaldmin', function () {
    return view('Admin/KegiatanEksternaldmin');
});
/*
|--------------------------------------------------------------------------
| Mahasiswa
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('Mahasiswa/dashboard');
});

Route::get('/Mahasiswa', function () {
    return view('Mahasiswa/mahasiswa');
});

Route::get('/Pengguna', function () {
    return view('Mahasiswa/Pengguna');
});


Route::get('/uploadproposal', function () {
    return view('Mahasiswa/uploadproposal');
});

Route::get('/uploaddok', function () {
    return view('Mahasiswa/uploaddok');
});

Route::get('/uploaddoknona', function () {
    return view('Mahasiswa/uploaddoknona');
});

Route::get('/formtambahkegiatan', function () {
    return view('Mahasiswa/formtambahkegiatan');
});

Route::get('/formtambahlaporan', function () {
    return view('Mahasiswa/formtambahlaporan');
});

Route::get('/formtambahprestasi', function () {
    return view('Mahasiswa/formtambahprestasi');
});

Route::get('/profilmahasiswa', function () {
    return view('Mahasiswa/profil');
});

Route::get('/Mahasiswa/didalamkampus', "didalamkampusController@show");
Route::get('/lembaga/kosmik/didalamkampus', "didalamkampusController@show");
Route::get('/lembaga/centris/didalamkampus', "didalamkampusController@show");
Route::get('/lembaga/uasc/didalamkampus', "didalamkampusController@show");
Route::get('/lembaga/dpm/didalamkampus', "didalamkampusController@show");
Route::get('/lembaga/himmah/didalamkampus', "didalamkampusController@show");
Route::post('/Mahasiswa/didalamkampus', "didalamkampusController@show");
Route::post('/lembaga/didalamkampus/{route->get}',"didalamkampusController@show");

Route::get('/lembaga/kosmik/didalamkampus', "didalamkampusController@index");

Route::get('/Mahasiswa/didalamkampus/{id}',"didalamkampusController@hapus");
Route::get('/lembaga/kosmik/didalamkampus/{id}', 'didalamkampusController@hapus');
Route::post('/Mahasiswa/didalamkampus/{id}',"didalamkampusController@hapus");
Route::post('/Mahasiswa/didalamkampus/hapus','didalamkampusController@hapus');

Route::post('/Mahasiswa/didalamkampus', "didalamkampusController@store");
Route::post('/lembaga/didalamkampus','didalamkampusController@store');
Route::post('/lembaga/kosmik/didalamkampus',"didalamkampusController@store");

Route::get('/Mahasiswa/didalamkampus/detail/{id}','didalamkampusController@detail');
Route::get('/Mahasiswa/didalamkampus/edit/{id}','didalamkampusController@edit');
Route::post('/Mahasiswa/didalamkampus/edit','didalamkampusController@update');


Route::get('/Mahasiswa/diluarkampus', "diluarkampusController@show");
Route::get('/lembaga/kosmik/diluarkampus', "diluarkampusController@show");
Route::get('/lembaga/centris/diluarkampus', "diluarkampusController@show");
Route::get('/lembaga/uasc/diluarkampus', "diluarkampusController@show");
Route::get('/lembaga/dpm/diluarkampus', "diluarkampusController@show");
Route::get('/lembaga/himmah/diluarkampus', "diluarkampusController@show");
Route::post('/diluarkampus/{route->get}',"diluarkampusController@show");
Route::post('/Mahasiswa/diluarkampus', "diluarkampusController@show");

Route::post('/lembaga/diluarkampus','diluarkampusController@store');
Route::post('/Mahasiswa/diluarkampus', "diluarkampusController@store");
Route::post('/lembaga/kosmik/diluarkampus',"diluarkampusController@store");

Route::get('/Mahasiswa/diluarkampus/{id}',"diluarkampusController@hapus");
Route::get('/lembaga/kosmik/diluarkampus/{id}', 'diluarkampusController@hapus');
Route::post('/Mahasiswa/diluarkampus/hapus','diluarkampusController@hapus');
Route::post('/Mahasiswa/diluarkampus/{id}',"diluarkampusController@hapus");

Route::get('/lembaga/kosmik/diluarkampus', "diluarkampusController@index");

Route::get('/Mahasiswa/diluarkampus/detail/{id}','diluarkampusController@detail');
Route::get('/Mahasiswa/diluarkampus/edit/{id}','diluarkampusController@edit');
Route::post('/Mahasiswa/diluarkampus/edit','diluarkampusController@update');


Route::get('/Mahasiswa/prestasi', "rekapprestasiController@show");
Route::get('/lembaga/kosmik/prestasi', "rekapprestasiController@show");
Route::get('/lembaga/centris/prestasi', "rekapprestasiController@show");
Route::get('/lembaga/uasc/prestasi', "rekapprestasiController@show");
Route::get('/lembaga/dpm/prestasi', "rekapprestasiController@show");
Route::get('/lembaga/himmah/prestasi', "rekapprestasiController@show");
Route::post('/prestasi/{route->get}', 'rekapprestasiController@show');

Route::post('/Mahasiswa/prestasi', "rekapprestasiController@store");

Route::get('/Mahasiswa/prestasi', "rekapprestasiController@index");

Route::get('/Mahasiswa/prestasi/{id}',"rekapprestasiController@hapus");
Route::post('/Mahasiswa/prestasi/{id}',"rekapprestasiController@hapus");
Route::get('/lembaga/kosmik/prestasi/{id}', 'rekapprestasiController@hapus');
Route::post('/Mahasiswa/prestasi/hapus','rekapprestasiController@hapus');

Route::get('/Mahasiswa/prestasi/detail/{id}','rekapprestasiController@detail');
Route::get('/Mahasiswa/prestasi/edit/{id}','rekapprestasiController@edit');
Route::post('/Mahasiswa/prestasi/edit','rekapprestasiController@update');

Route::get('/Mahasiswa/dokumentasiinternal', "dokumentasiinternalController@show");
Route::post('/Mahasiswa/dokumentasiinternal', "dokumentasiinternalController@store");
Route::get('/lembaga/kosmik/dokumentasiinternal', "dokumentasiinternalController@show");
Route::get('/lembaga/centris/dokumentasiinternal', "dokumentasiinternalController@show");
Route::get('/lembaga/uasc/dokumentasiinternal', "dokumentasiinternalController@show");
Route::get('/lembaga/dpm/dokumentasiinternal', "dokumentasiinternalController@show");
Route::get('/lembaga/himmah/dokumentasiinternal', "dokumentasiinternalController@show");
Route::post('/dokumentasiinternal/{route->get}', "dokumentasiinternalController@show");

Route::get('/Mahasiswa/dokumentasiinternal', "dokumentasiinternalController@index");

Route::get('/Mahasiswa/dokumentasiinternal/{id}',"dokumentasiinternalController@hapus");
Route::post('/Mahasiswa/dokumentasiinternal/{id}',"dokumentasiinternalController@hapus");
Route::get('/lembaga/kosmik/dokumentasiinternal/{id}', 'dokumentasiinternalController@hapus');
Route::post('/Mahasiswa/dokumentasiinternal/hapus','dokumentasiinternalController@hapus');

Route::get('/Mahasiswa/dokumentasiinternal/detail/{id}','dokumentasiinternalController@detail');
Route::get('/Mahasiswa/dokumentasiinternal/edit/{id}','dokumentasiinternalController@edit');
Route::post('/Mahasiswa/dokumentasiinternal/edit','dokumentasiinternalController@update');

Route::post('/Mahasiswa/dokumentasieksternal', "dokumentasieksternalController@store");
Route::get('/Mahasiswa/dokumentasieksternal', "dokumentasieksternalController@show");
Route::get('/lembaga/kosmik/dokumentasieksternal', "dokumentasieksternalController@show");
Route::get('/lembaga/centris/dokumentasieksternal', "dokumentasieksternalController@show");
Route::get('/lembaga/uasc/dokumentasieksternal', "dokumentasieksternalController@show");
Route::get('/lembaga/dpm/dokumentasieksternal', "dokumentasieksternalController@show");
Route::get('/lembaga/himmah/dokumentasieksternal', "dokumentasieksternalController@show");
Route::post('/dokumentasieksternal/{route->get}', "dokumentasieksternalController@show");
Route::get('/Mahasiswa/dokumentasieksternal', "dokumentasieksternalController@index");
Route::get('/Mahasiswa/dokumentasiinternal/{id}',"dokumentasiinternalController@hapus");
Route::post('/Mahasiswa/dokumentasiinternal/{id}',"dokumentasiinternalController@hapus");
Route::get('/lembaga/kosmik/dokumentasiinternal/{id}', 'dokumentasiinternalController@hapus');
Route::post('/Mahasiswa/dokumentasiinternal/hapus','dokumentasiinternalController@hapus');
Route::get('/Mahasiswa/dokumentasiinternal/detail/{id}','dokumentasiinternalController@detail');
Route::get('/Mahasiswa/dokumentasiinternal/edit/{id}','dokumentasiinternalController@edit');
Route::post('/Mahasiswa/dokumentasiinternal/edit','dokumentasiinternalController@update');

Route::get('/Mahasiswa/laporan', "laporanController@show");
Route::post('/Mahasiswa/laporan', "laporanController@store");
Route::get('/lembaga/kosmik/laporan', "laporanController@show");
Route::get('/lembaga/centris/laporan', "laporanController@show");
Route::get('/lembaga/uasc/laporan', "laporanController@show");
Route::get('/lembaga/dpm/laporan', "laporanController@show");
Route::get('/lembaga/himmah/laporan', "laporanController@show");
Route::post('/laporan/{route->get}', "laporanController@show");
Route::get('/Mahasiswa/laporan', "laporanController@index");
Route::get('/Mahasiswa/laporan/{id}',"laporanController@hapus");
Route::post('/Mahasiswa/laporan/{id}',"laporanController@hapus");
Route::get('/lembaga/kosmik/laporan/{id}', 'laporanController@hapus');
Route::post('/Mahasiswa/laporan/hapus','laporanController@hapus');
Route::get('/Mahasiswa/laporan/detail/{id}','laporanController@detail');
Route::get('/Mahasiswa/laporan/edit/{id}','laporanController@edit');
Route::post('/Mahasiswa/laporan/edit','laporanController@update');





/*
|--------------------------------------------------------------------------
| form kelola
|--------------------------------------------------------------------------
*/


Route::get('/input', 'Simkipema@input');

Route::post('/proses', 'Simkipema@proses');

Route::get('/hapus', 'Simkipema@hapus');

/*
|--------------------------------------------------------------------------
| kelola data tabel
|--------------------------------------------------------------------------
*/

// alihkan halaman ke halaman
// pegawai return redirect('/kelolamhs');



// hapus file
Route::put('/didalamkampus/Hapus/{id}', 'didalamkampusController@hapus');
/*
|--------------------------------------------------------------------------
| form tambah data
|--------------------------------------------------------------------------
*/
// });


// Route::get('/home', 'HomeController@index')->name('home');