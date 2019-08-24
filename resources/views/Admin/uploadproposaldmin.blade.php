@extends('Admin.homeAdmin')

@section('tab-title')
<title>upload proposal</title>
@endsection

@section('content')
    <section class="content-header">
        <h1>Halaman</h1>
        <div class="box-body">
                <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">
                    <i class="fa fa-plus-circle"></i> Tambah propoasl
                </button>
            </div>
        
            <div class="modal fade" id="tambahkegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Form Tambah Data</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/eo/create" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nama Kegiatan</label>
                                    <input type="text" name="name" class="form-control" id="recipient-name" placeholder="Event Name">
                                </div>
                                <label>Nama Organisasi</label>
                                <select class="form-control select2 select2-hidden-accessible" name="category" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option value="Informatika">Himpunan Teknik Informatika</option>
                                    <option value="Kimia">Himpunan Teknik Kimia</option>
                                    <option value="Elektro">Himpunan Teknik Elektro</option>
                                    <option value="Industri">Himpunan Teknik Industri</option>
                                    <option value="Mesin">Himpunan Teknik Mesin</option>
                                </select>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Kejuaraan</label>
                                  <input type="text" name="kejuaraan" class="form-control" id="recipient-name" placeholder="Juara satu">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tanggal Kegiatan</label>
                                <input type="text" name="tanggal kejuaraan" class="form-control" id="recipient-name" placeholder="26 Maret 2018">
                            </div>
                            <label>Angkatan</label>
                                <select class="form-control select2 select2-hidden-accessible" name="category" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                </select>
                            
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Buat proposal</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        
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