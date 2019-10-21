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

Route::get('/CENTRIS', function () {
    return view('Admin/CENTRIS');
});

Route::get('/DPM', function () {
    return view('Admin/DPM');
});
Route::get('/KOSMIK', function () {
    return view('Admin/KOSMIK');
});

Route::get('/LEM', function () {
    return view('Admin/LEM');
});

Route::get('/HIMMAH', function () {
    return view('Admin/HIMMAH');
});

Route::get('/UASC', function () {
    return view('Admin/UASC');
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

Route::get('/LEMmhs', "LEMmhsController@show");

Route::get('/didalamkampus', "didalamkampusController@show");

Route::get('/diluarkampus', "diluarkampusController@show");

Route::get('/DPMmhs', "DPMmhsController@show");

Route::get('/UASCmhs', "UASCmhsController@show");

Route::get('/KOSMIKmhs', "KOSMIKmhsController@show");

Route::get('/HIMMAHmhs', "HIMMAHmhsController@show");

Route::get('/CENTRISmhs', "CENTRISmhsController@show");

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

/*
|--------------------------------------------------------------------------
| kelola data tabel
|--------------------------------------------------------------------------
*/

Route::get('/mahasiswa/hapus/{id}','mahasiswaController@hapus');
// alihkan halaman ke halaman 
// pegawai return redirect('/kelolamhs');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
 
// hapus file
Route::get('/didalamkampus/hapus/{id}', 'didalamkampusController@hapus');
/*
|--------------------------------------------------------------------------
| form tambah data
|--------------------------------------------------------------------------
*/

Route::get('/inputform/add', 'inputformController@add')->name('inputform.add');
Route::post('/inputform/add', 'inputformController@save')->name('inputform.save');