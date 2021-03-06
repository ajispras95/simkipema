@extends('home')
@section('tab-title')
<title>prestasi</title>
@endsection

@section('content')
    <section class="content-header">
        <h1>Halaman
        <small>prestasi</small>
        </h1>
    </section>

    <section class="content">
    
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">  
            <div class="box-body">
              <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">
                  <i class="fa fa-plus-circle"></i> Tambah Prestasi
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
                          <form action="/controller/inputformController" method="post">
                              {{csrf_field()}}
                              {{-- <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">NIM</label>
                                  <input type="text" name="name" class="form-control" id="recipient-name" placeholder="Event Name">
                              </div> --}}
                            <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Dosen Pembimbing</label>
                            <input type="text" name="name" class="form-control" id="recipient-name" placeholder="Event Name">
                            </div>
                            <label>Juara</label>
                              <select class="form-control select2 select2-hidden-accessible" name="category" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                  <option value="Juara I">Juara I</option>
                                  <option value="Juara II">Juara II</option>
                                  <option value="Juara III">Juara III</option>
                                  <option value="Juara harapan I">Juara harapan I</option>
                                  <option value="Juara harapan II">Juara harapan II</option>
                                  <option value="Juara harapan III">Juara harapan III</option>
                                  <option value="finalis">finalis</option>
                              </select>
                              <label>Nama Organisasi</label>
                              <select class="form-control select2 select2-hidden-accessible" name="category" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option value="Informatika">Himpunan Teknik Informatika</option>
                                <option value="Mobil listrik">UASC UII</option>
                                <option value="Lem f">LEM F UII</option>
                                <option value="Industri">Himpunan Teknik Industri</option>
                                <option value="Mesin">Himpunan Teknik Mesin</option>
                            </select> 
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Tanggal Kegiatan</label>
                              <input type="text" name="tanggal kejuaraan" class="form-control" id="recipient-name" placeholder="26 Maret 2018">
                          </div>
                          <label>Bidang</label>
                              <select class="form-control select2 select2-hidden-accessible" name="category" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                  <option value="Penalaran dan Riset">Penalaran dan Riset</option>
                                  <option value="Unit Unggulan Universitas">Unit Unggulan Universitas</option>
                                  <option value="Lembaga dakwah">Lembaga dakwah</option>
                                  <option value="Unit Kegiatan Mahasiswa">Unit Kegiatan Mahasiswa</option>
                                  <option value="Pers Mahasiswa">Pers Mahasiswa</option>
                                  <option value="Unit Kegiatan Mahasiswa">Unit Kegiatan Mahasiswa</option>
                              </select>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Penyelenggara</label>
                                <input type="text" name="name" class="form-control" id="recipient-name" placeholder="Event Name">
                            </div>
                            <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tingkat</label>
                              <input type="text" name="name" class="form-control" id="recipient-name" placeholder="Event Name">
                          </div>
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
                            <th>Dosen Pembimbing</th>
                            <th>Nama Organisasi</th>
                            <th>Nama Kegiatan</th>
                            <th>Juara</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Bidang</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                        <tr>
                          <td> {{ $d->id }}</td>
                          <td> {{ $d->dosen_pembimbing }}</td>
                          <td> {{ $d->nama_organisasi }}</td>
                          <td> {{ $d->nama_kegiatan }}</td>
                          <td> {{ $d->Juara }}</td>                                
                          <td> {{ $d->tanggal_kegiatan }}</td>
                          <td> {{ $d->Bidang }}</td>
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
                      {{-- </tbody>
                          <tbody>
                          <tr>
                            <td> 1</td>
                            <td> Aris</td>
                            <td> Porsematif 2014</td>
                            <td> Himpunan Informatika</td>
                            <td> Harapan 1</td>
                            <td> engklek</td>
                            <td> 14-06-2014</td>                                
                            <td> 2014</td>
                            <td> --}}
                                {{-- <button type="button" class="" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">
                                    Detail 
                                  </button>
                                  <button type="button" class="" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">
                                      Edit 
                                    </button>
                                    <button type="button" class="" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">
                                        Hapus 
                                      </button> --}}
                            {{-- </td>
                          </tr>
                          <tr>
                            <td> 2</td>
                            <td> Dimas</td>
                            <td> exploraphoria 2015</td>
                            <td> Himpunan Informatika</td>
                            <td> Harapan 2</td>
                            <td> petak umpat</td>
                            <td> 14-07-2014</td>                                
                            <td> 2013</td>
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
                            <td> isnan</td>
                            <td> Fornetif 2019</td>
                            <td> Himpunan Informatika</td>
                            <td> Juara 1</td>
                            <td> lari </td>
                            <td> 14-08-2014</td>                                
                            <td> 2012</td>
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