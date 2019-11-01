@extends('home')

@section('tab-title')
<title>Halaman | Admin</title>
<!-- form validasi -->
<form action="{{ route ('/didalamkampus') }}" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="nama">Nama kegiatan</label>
        <input class="form-control" type="text" name="nama" value="formtambahkegiatan">
    </div>
    <div class="form-group">
        <label for="pekerjaan">program kerja divisi</label>
        <input class="form-control" type="text" name="pekerjaan" value="formtambahkegiatan">
    </div>
    <div class="form-group">
        <label for="usia">predikat</label>
        <input class="form-control" type="text" name="usia" value="formtambahkegiatan">
    </div>
    <div class="form-group">
        <label for="usia">waktu pelaksanaan</label>
        <input class="btn btn-primary" type="submit" value="formtambahkegiatan">
    </div>
    <div class="form-group">
            <label for="usia">tempat</label>
            <input class="btn btn-primary" type="submit" value="formtambahkegiatan">
    </div>
    <div class="form-group">
        <label for="usia">tingkat</label>
        <input class="btn btn-primary" type="submit" value="formtambahkegiatan">
    </div>
    <div class="form-group">
        <label for="usia">scan_bukti</label>
        <input class="btn btn-primary" type="submit" value="formtambahkegiatan">
    </div>
    <div class="form-group">
            <button type="submit" class="button">Submit</button>
            <button type="reset" class="button">Cancel</button>
    </div>
</form>
@endsection