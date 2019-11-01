@extends('lembaga.himmah.home')

@section('tab-title')
<title>Dokumentasi | Internal</title>
@endsection

@section('content')
    <section class="content-header">
        <h1>Halaman
        <small>Dokumentasi Internal</small>
        </h1>
    </section>

    <section class="content">
    
      <section class="content">
              <div class="row">
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-body">
                      <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">
                          <i class="fa fa-plus-circle"></i> Upload dokumentasi
                      </button>
                  </div>
              
                  <div class="modal fade" id="tambahkegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h3 class="modal-title" id="exampleModalLabel">Upload Dokumentasi</h3>
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
                                        <option value="Mobil listrik">UASC UII</option>
                                        <option value="Lem f">LEM F UII</option>
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
                                      <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <input type="file" id="exampleInputFile">
                                        <p class="help-block"></p>
                                      </div>
                                 
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                  <button type="submit" class="btn btn-primary">Buat Kegiatan</button>
                              </div>
                          </form>
                          </div>
                      </div>
                  </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Organisasi</th>
                            <th>Nama Kegiatan</th>
                            <th>Juara</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Angkatan</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($data as $d)
                        <tr>
                          <td> {{ $d->id }}</td>
                          <td> {{ $d->nama_organisasi }}</td>
                          <td> {{ $d->nama_kegiatan }}</td>
                          <td> {{ $d->Juara }}</td>
                          <td> {{ $d->Tanggal_Kegiatan }}</td>                                
                          <td> {{ $d->Angkatan }}</td>
                          <td> {{ $d->Status }}</td>
                          <td>
                              <button type="button" class="" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">
                                  Detail 
                                </button>
                                <button type="button" class="" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">
                                    Edit 
                                  </button>
                                  <button type="button" class="" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">
                                      Hapus 
                                    </button>
                          </td>
                            @endforeach
                      </tbody>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                  <!-- /.box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </section>

</section>
@endsection