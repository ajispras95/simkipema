@extends('Admin.homeAdmin')

@section('tab-title')
<title>Halaman | Admin</title>
<!-- form validasi -->
<form action="{{ URL ('/formtambahkegiatan') }}" method="post">
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
        <input class="btn btn-primary" type="submit" value="formtambahkegiatan">
    </div>
</form>
@endsection

@section('content')

           

@endsection