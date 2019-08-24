@extends('Mahasiswa.kegiatanakademis')

@section('tab-title')
<title>upload proposal</title>
@endsection

@section('content')
    <section class="content-header">
        <h1>Halaman
        <small>upload Proposal</small>
        </h1>
    </section>

    <section class="content">
        <section>
    <!-- form validasi -->
        <form action="/proses" method="post">
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
        </section>
    </section>
 @endsection