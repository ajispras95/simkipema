@extends('Mahasiswa.home')

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
                                      <form action={{ url('/Mahasiswa/diluarkampus')}} method="post">
                                        {{csrf_field()}}
                                        @if(count($errors) > 0)
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                            {{ $error }} <br/>
                                            @endforeach
                                        </div>
                                        @endif
                                        {{-- <label>Nama Organisasi</label>
                                        <select class="form-control select2 select2-hidden-accessible" name="category" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                          <option value="Informatika">Himpunan Teknik Informatika</option>
                                          <option value="Mobil listrik">UASC UII</option>
                                          <option value="Lem f">LEM F UII</option>
                                          <option value="Industri">Himpunan Teknik Industri</option>
                                          <option value="Mesin">Himpunan Teknik Mesin</option>
                                      </select>  --}}
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nama Kegiatan</label>
                                    <input type="text" name="nama_kegiatan" class="form-control" id="recipient-name" placeholder="Event Name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Dosen Pembimbing</label>
                                    <input type="text" name="dosen_pembimbing" class="form-control" id="recipient-name" placeholder="Event Name">
                                </div>
                                <div class="form-group">
                                  <label>Program kerja divisi</label>
                                  <select class="form-control select2 select2-hidden-accessible" name="program_kerja_divisi" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option value="Didalam kampus">Didalam kampus</option>
                                    <option value="Diluar kampus">Diluar kampus</option>
                                  </select>              
                                </label>
                              </div>
                              <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Predikat</label>
                                    <input type="text" name="predikat" class="form-control" id="recipient-name" placeholder="Juara satu">
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Waktu Pelaksanaan</label>
                                  <input type="text" name="waktu_pelaksanaan" class="form-control" id="recipient-name" placeholder="Juara satu">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">tempat</label>
                                <input type="text" name="tempat" class="form-control" id="recipient-name" placeholder="Juara satu">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">skala_kegiatan</label>
                                    <input type="text" name="skala_kegiatan" class="form-control" id="recipient-name" placeholder="Juara satu">
                                    </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">tingkat</label>
                                    <input type="text" name="tingkat" class="form-control" id="recipient-name" placeholder="Juara satu">
                                </div>
                                <div class="form-group">
                                    <b>Scan bukti</b><br/>
                                    <input type="file" name="scan_bukti">
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
                                    @php $no = 1; @endphp
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
                                
                                    <a href="{{URL('/Mahasiswa/diluarkampus/detail/'.$d->id)}}">Detail</a>

                                    <form action="{{URL('/Mahasiswa/diluarkampus/hapus/')}}" method="POST">
                                      {{csrf_field()}}
                                      <input type="hidden" name="id" value="{{$d->id}}">
                                      <button type="submit" onclick="confirm('Apakah anda yakin menghapus data?')">Edit</button>
                                    </form>

                                    <form action="{{URL('/Mahasiswa/diluarkampus/hapus/')}}" method="POST">
                                      {{csrf_field()}}
                                      <input type="hidden" name="id" value="{{$d->id}}">
                                      <button type="submit" onclick="confirm('Apakah anda yakin menghapus data?')">Hapus</button>
                                    </form>
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