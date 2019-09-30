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


Route::get('/login',"Auth\LoginController@index");
Route::get('/register','Auth\RegisterController@create');
Route::get('/logout', 'Auth\LogoutUser@logout');
Route::post('/authenticate', 'Auth\LoginController@authenticate');

Route::get('/dashboardmin', function () {
    return view('Admin/dashboardmin');
})->name('login')->middleware('auth:Admin');

Route::get('/dashboard', function () {
    return view('mahasiswa/dashboard');
})->name('login')->middleware('auth:mahasiswa');


Route::get('/Admin', function () {
    return view('Admin/Admin');
})->middleware('auth:user');

Route::get('/mahasiswa', function () {
    return view('Admin/mahasiswa');
});

Route::get('/Pengguna', function () {
    return view('Admin/Pengguna');
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

// Route::get('/', function () {
//     return view('Mahasiswa/dashboard');
// });

Route::get('/Mahasiswa', function () {
    return view('Mahasiswa/mahasiswa');
});

Route::get('/mahasiswa', function () {
    return view('Mahasiswa/mahasiswa');
});

Route::get('/Pengguna', function () {
    return view('Mahasiswa/Pengguna');
});

// Route::get('/prestasi', function () {
//     return view('Mahasiswa/prestasi');
// });

// Route::get('/DokumentasiInternal', function () {
//     return view('Mahasiswa/DokumentasiInternal');
// });

// Route::get('/DokumentasiEksternal', function () {
//     return view('Mahasiswa/DokumentasiEksternal');
// });

// Route::get('/laporan', function () {
//     return view('Mahasiswa/laporan');
// });


Route::get('/uploadproposal', function () {
    return view('Mahasiswa/uploadproposal');
});

Route::get('/uploaddok', function () {
    return view('Mahasiswa/uploaddok');
});

Route::get('/uploaddoknona', function () {
    return view('Mahasiswa/uploaddoknona');
});

Route::get('/KegiatanInternal', "KegiatanInternalController@show");

Route::get('/KegiatanEksternal', "KegiatanEksternalController@show");

Route::get('/prestasi', "RekapPrestasiController@show");

Route::get('/DokumentasiInternal', "DokumentasiInternalController@show");

Route::get('/DokumentasiEksternal', "DokumentasiEksternalController@show");

Route::get('/laporan', "laporanController@show");

// Route::get('/KegiatanEksternal', function () {
//     return view('Mahasiswa/KegiatanEksternal');
// });

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


/*
|--------------------------------------------------------------------------
| form kelola
|--------------------------------------------------------------------------
*/


Route::get('/input', 'Simkipema@input');
 
Route::post('/proses', 'Simkipema@proses');

Route::get('/hapus', 'Simkipema@hapus');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');