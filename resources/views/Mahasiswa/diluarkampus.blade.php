@extends('home')

@section('tab-title')
<title>Kegiatan | Eksternal</title>
@endsection

@section('content')
    <section class="content-header">
        <h1>Halaman
        <small>Kegiatan Eksternal</small>
        </h1>
    </section>

    <section class="content">
    
            <section class="content">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                          <div class="box-body">
                            <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">
                                <i class="fa fa-plus-circle"></i> Tambah Kegiatan
                            </button>
                        </div>
                    
                        <div class="modal fade" id="tambahkegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">Form Tambah Kegiatan</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                      <form action={{ url('/diluarkampus')}} method="post">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                              <label for="recipient-name" class="col-form-label">Nama Kegiatan</label>
                                              <input type="text" name="name" class="form-control" id="recipient-name" placeholder="Event Name">
                                          </div>
                                          <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Dosen Pembimbing</label>
                                            <input type="text" name="name" class="form-control" id="recipient-name" placeholder="Event Name">
                                        </div>
                                          <div class="form-group">
                                            <label>Program kerja divisi</label>
                                            <select class="form-control select2 select2-hidden-accessible" name="category" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                              <option value="Didalam kampus">Didalam kampus</option>
                                              <option value="Diluar kampus">Diluar kampus</option>
                                            </select>              
                                          </label>
                                        </div>
                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">predikat</label>
                                          <input type="text" name="kejuaraan" class="form-control" id="recipient-name" placeholder="Juara satu">
                                        </div>
                                          <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Waktu Pelaksanaan</label>
                                            <input type="text" name="kejuaraan" class="form-control" id="recipient-name" placeholder="Juara satu">
                                        </div>
                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">tempat</label>
                                          <input type="text" name="kejuaraan" class="form-control" id="recipient-name" placeholder="Juara satu">
                                          </div>
                                          <div class="form-group">
                                              <label for="recipient-name" class="col-form-label">tingkat</label>
                                              <input type="text" name="kejuaraan" class="form-control" id="recipient-name" placeholder="Juara satu">
                                          </div>
                                          <div class="form-group">
                                              <label for="recipient-name" class="col-form-label">Scan_bukti</label>
                                              <input type="text" name="kejuaraan" class="form-control" id="recipient-name" placeholder="Juara satu">
                                          </div>
                                          {{-- <div class="form-group">
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
                                          </select> --}}
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
                                  <th>Nama Kegiatan</th>
                                  <th>dosen pembimbing</th>
                                  <th>program kerja divisi</th>
                                  <th>predikat</th>
                                  <th>waktu pelaksanaan</th>
                                  <th>tempat</th>
                                  <th>tingkat</th>
                                  <th>scan bukti</th>
                                  <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                        @foreach ($data as $d)
                                    <tr>
                                      <td> {{ $d->id }}</td>                                   
                                      <td> {{ $d->nama_kegiatan }}</td>
                                      <td> {{ $d->dosen_pembimbing }}</td>
                                      <td> {{ $d->program_kerja_divisi }}</td>
                                      <td> {{ $d->predikat }}</td>
                                      <td> {{ $d->waktu_pelaksanaan }}</td>
                                      <td> {{ $d->tempat }}</td>                                
                                      <td> {{ $d->tingkat }}</td>
                                      <td> {{ $d->scan_bukti }}</td>
                                      <td>
                                {{-- <tr>
                                  <td> 1</td>
                                  <td> UASC</td>
                                  <td> FSAE Student 2019</td>
                                  <td> Best technology</td>
                                  <td> 14-06-2018</td>                                
                                  <td> Jepang</td>
                                  <td> viewed / Not Seen</td>
                                  <td> --}}
                                      <button type="button" class="" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">
                                          Detail 
                                        </button>
                                        <button type="button" class="" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">
                                            Edit 
                                          </button>
                                          <button type="button" class="" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">
                                              Hapus 
                                            </button>
                                  {{-- </td>
                                </tr>
                                <td> 2</td>
                                <td> Kosmik UII</td>
                                <td> Soundrenaline 2018</td>
                                <td> best indie band</td>
                                <td> 12-08-2018</td>                                
                                <td> Jogjakarta</td>
                                <td> viewed / Not Seen</td>
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
                                  </tr>
                                  <tr>
                                    <td> 3</td>
                                    <td> Centris UII</td>
                                    <td> Seminar digital dakwah</td>
                                    <td> Pengisi acara </td>
                                    <td> 19-02-2015</td>
                                    <td> Jakarta</td>
                                    <td> viewed / Not Seen</td>
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
                                    </td> --}}
                                  </tr>
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