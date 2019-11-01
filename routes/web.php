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
})->name('login')->middleware('auth:role');

Route::get('/dashboard', function () {
    return view('mahasiswa/dashboard');
})->name('login')->middleware('auth:mahasiswa');

Route::get('/dashboardC/', function () {
    return view('/CENTRIS/dashboardU');
})->name('login')->middleware('auth:CENTRIS');

Route::get('/dashboardU', function () {
    return view('UASC/dashboardU');
})->name('login')->middleware('auth:UASC');

Route::get('/dashboardK', function () {
    return view('Lembaga/KOSMIK/dashboardK');
})->name('login')->middleware('auth:KOSMIK');

Route::get('/dashboardH', function () {
    return view('HIMMAH/dashboardH');
})->name('login')->middleware('auth:HIMMAH');

Route::get('/dashboardD', function () {
    return view('DPM/dashboardD');
})->name('login')->middleware('auth:DPM');

Route::get('/Admin', function () {
    return view('Admin/Admin');
})->middleware('auth:user');

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

Route::get('/didalamkampus', "didalamkampusController@show");
Route::get('/didalamkampusK', "didalamkampusController@show");
Route::get('/didalamkampusU', "didalamkampusController@show");
Route::get('/didalamkampusD', "didalamkampusController@show");
Route::get('/didalamkampusC', "didalamkampusController@show");
Route::get('/didalamkampusH', "didalamkampusController@show");
Route::post('/didalamkampus/{route->get}','didalamkampusController@show');
Route::get('/didalamkampus', "didalamkampusController@index");
Route::post('/didalamkampus','didalamkampusController@store');
Route::post('/KOSMIK/didalamkampusK','didalamkampusController@store');

Route::get('/diluarkampus', "diluarkampusController@show");
Route::get('/diluarkampusK', "diluarkampusController@show");
Route::get('/diluarkampusU', "diluarkampusController@show");
Route::get('/diluarkampusD', "diluarkampusController@show");
Route::get('/diluarkampusC', "diluarkampusController@show");
Route::get('/diluarkampusH', "diluarkampusController@show");
Route::post('/diluarkampus/{route->get}', 'diluarkampuscontroller@show');

Route::get('/prestasi', "RekapPrestasiController@show");
Route::get('/prestasiK', "RekapPrestasiController@show");
Route::get('/prestasiU', "RekapPrestasiController@show");
Route::get('/prestasiD', "RekapPrestasiController@show");
Route::get('/prestasiH', "RekapPrestasiController@show");
Route::get('/prestasiC', "RekapPrestasiController@show");
Route::post('/prestasi/{route->get}', 'RekapPrestasiController@show');

Route::get('/DokumentasiInternal', "DokumentasiInternalController@show");
Route::get('/DokumentasiInternalK', "DokumentasiInternalController@show");
Route::get('/DokumentasiInternalU', "DokumentasiInternalController@show");
Route::get('/DokumentasiInternalD', "DokumentasiInternalController@show");
Route::get('/DokumentasiInternalH', "DokumentasiInternalController@show");
Route::get('/DokumentasiInternalC', "DokumentasiInternalController@show");
Route::post('/DokumentasiInternal/{route->get}', "DokumentasiInternalController@show");


Route::get('/DokumentasiEksternal', "DokumentasiEksternalController@show");
Route::get('/DokumentasiEksternalK', "DokumentasiEksternalController@show");
Route::get('/DokumentasiEksternalU', "DokumentasiEksternalController@show");
Route::get('/DokumentasiEksternalD', "DokumentasiEksternalController@show");
Route::get('/DokumentasiEksternalH', "DokumentasiEksternalController@show");
Route::get('/DokumentasiEksternalC', "DokumentasiEksternalController@show");
Route::post('/DokumentasiEksternal/{route->get}', "DokumentasiEksternalController@show");

Route::get('/laporan', "laporanController@show");
Route::get('/laporanK', "laporanController@show");
Route::get('/laporanU', "laporanController@show");
Route::get('/laporanD', "laporanController@show");
Route::get('/laporanH', "laporanController@show");
Route::get('/laporanC', "laporanController@show");
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
