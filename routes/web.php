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
    return view('/Mahasiswa/dashboard');
})->name('login')->middleware('auth:mahasiswa');

Route::get('/centris/dashboard', function () {
    return view('/lembaga/centris/dashboard');
})->name('login')->middleware('auth:centris');

Route::get('/uasc/dashboard', function () {
    return view('/lembaga/uasc/dashboard');
})->name('login')->middleware('auth:uasc');

Route::get('/kosmik/dashboard', function () {
    return view('/lembaga/kosmik/dashboard');
})->name('login')->middleware('auth:kosmik');

Route::get('/himmah/dashboard', function () {
    return view('/lembaga/himmah/dashboard');
})->name('login')->middleware('auth:himmah');

Route::get('/dpm/dashboard', function () {
    return view('/lembaga/dpm/dashboard');
})->name('login')->middleware('auth:dpm');

Route::get('/didalamkampus', function () {
    return view('/Mahasiswa/didalamkampus');
})->name('login')->middleware('auth:mahasiswa');

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

// Route::get('/', function () {
//     return view('Mahasiswa/dashboard');
// });

Route::get('/Mahasiswa', function () {
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

// Route::get('/KegiatanInternal', "KegiatanInternalController@show");

// Route::get('/KegiatanEksternal', "KegiatanEksternalController@show");

// Route::get('/LEMmhs', "LEMmhsController@show");

Route::get('Mahasiswa/didalamkampus', "didalamkampusController@show");
Route::get('/lembaga/kosmik/didalamkampus', "didalamkampusController@show");
Route::get('/lembaga/centris/didalamkampus', "didalamkampusController@show");
Route::get('/lembaga/uasc/didalamkampus', "didalamkampusController@show");
Route::get('/lembaga/dpm/didalamkampus', "didalamkampusController@show");
Route::get('/lembaga/himmah/didalamkampus', "didalamkampusController@show");
Route::post('/didalamkampus/{route->get}','didalamkampusController@show');
Route::get('/lembaga/didalamkampus', "didalamkampusController@index");
Route::post('/lembaga/didalamkampus','didalamkampusController@store');
Route::post('/kosmik/didalamkampusK','didalamkampusController@store');

Route::get('/Mahasiswa/diluarkampus', "diluarkampusController@show");
Route::get('/lembaga/kosmik/diluarkampus', "diluarkampusController@show");
Route::get('/lembaga/centris/diluarkampus', "diluarkampusController@show");
Route::get('/lembaga/uasc/diluarkampus', "diluarkampusController@show");
Route::get('/lembaga/dpm/diluarkampus', "diluarkampusController@show");
Route::get('/lembaga/himmah/diluarkampus', "diluarkampusController@show");
Route::post('/diluarkampus/{route->get}','diluarkampusController@show');

Route::get('/Mahasiswa/prestasi', "RekapPrestasiController@show");
Route::get('/lembaga/kosmik/prestasi', "RekapPrestasiController@show");
Route::get('/lembaga/centris/prestasi', "RekapPrestasiController@show");
Route::get('/lembaga/uasc/prestasi', "RekapPrestasiController@show");
Route::get('/lembaga/dpm/prestasi', "RekapPrestasiController@show");
Route::get('/lembaga/himmah/prestasi', "RekapPrestasiController@show");
Route::post('/prestasi/{route->get}', 'RekapPrestasiController@show');

Route::get('/Mahasiswa/dokumentasiinternal', "dokumentasiinternalController@show");
Route::get('/lembaga/kosmik/dokumentasiinternal', "dokumentasiinternalController@show");
Route::get('/lembaga/centris/dokumentasiinternal', "dokumentasiinternalController@show");
Route::get('/lembaga/uasc/dokumentasiinternal', "dokumentasiinternalController@show");
Route::get('/lembaga/dpm/dokumentasiinternal', "dokumentasiinternalController@show");
Route::get('/lembaga/himmah/dokumentasiinternal', "dokumentasiinternalController@show");
Route::post('/dokumentasiinternal/{route->get}', "dokumentasiinternalController@show");

Route::get('/Mahasiswa/dokumentasieksternal', "dokumentasieksternalController@show");
Route::get('/lembaga/kosmik/dokumentasieksternal', "dokumentasieksternalController@show");
Route::get('/lembaga/centris/dokumentasieksternal', "dokumentasieksternalController@show");
Route::get('/lembaga/uasc/dokumentasieksternal', "dokumentasieksternalController@show");
Route::get('/lembaga/dpm/dokumentasieksternal', "dokumentasieksternalController@show");
Route::get('/lembaga/himmah/dokumentasieksternal', "dokumentasieksternalController@show");
Route::post('/dokumentasieksternal/{route->get}', "dokumentasieksternalController@show");

Route::get('/Mahasiswa/laporan', "laporanController@show");
Route::get('/lembaga/kosmiklaporan', "laporanController@show");
Route::get('/lembaga/centris/laporan', "laporanController@show");
Route::get('/lembaga/uasc/laporan', "laporanController@show");
Route::get('/lembaga/dpm/laporan', "laporanController@show");
Route::get('/lembaga/himmah/laporan', "laporanController@show");
Route::post('/laporan/{route->get}', "laporanController@show");

// // Route::get('/DPMmhs', "DPMmhsController@show");

// // Route::get('/UASCmhs', "UASCmhsController@show");

// // Route::get('/KOSMIKmhs', "KOSMIKmhsController@show");

// // Route::get('/HIMMAHmhs', "HIMMAHmhsController@show");

// // Route::get('/CENTRISmhs', "CENTRISmhsController@show");


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

// alihkan halaman ke halaman
// pegawai return redirect('/kelolamhs');



// hapus file
Route::put('/didalamkampus/Hapus/{id}', 'didalamkampusController@hapus');
/*
|--------------------------------------------------------------------------
| form tambah data
|--------------------------------------------------------------------------
*/

// Route::resource('/didalamkampus', 'didalamkampus'); //tambahkan baris ini
// Route::get('/didalamkampus', function () {
//     return view('/index');
// });
Route::get('/halaman-kedua', function () {
    return view('halamandua');
});
