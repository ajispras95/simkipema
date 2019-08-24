@extends('Admin.homeAdmin')

@section('tab-title')
<title>Halaman | Mahasiswa</title>
<!-- form validasi -->
<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class simkipemaController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'pekerjaan' => 'required',
           'usia' => 'required|numeric'
        ]);
 
        return view('proses',['data' => $request]);
    }
}
<form action='/proses' method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="nama">Nama</label>
        <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
    </div>
    <div class="form-group">
        <label for="pekerjaan">Pekerjaan</label>
        <input class="form-control" type="text" name="pekerjaan" value="{{ old('pekerjaan') }}">
    </div>
    <div class="form-group">
        <label for="usia">Usia</label>
        <input class="form-control" type="text" name="usia" value="{{ old('usia') }}">
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Proses">
    </div>
</form>
@endsection

@section('content')

           

@endsection