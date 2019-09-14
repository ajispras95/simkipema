@extends('Admin.homeAdmin')

@section('tab-title')
<title>Kelola | Mahasiswa</title>
@endsection

@section('content')
    <section class="content-header">
        <h1>Halaman
        <small>Kelola Mahasiswa</small>
        </h1>
    </section>
        
        <section class="content">
        
                <section class="content">
                        <div class="row">
                          <div class="col-xs-12">
                            <div class="box">
                              <div class="box-header">
                                <h3 class="box-title"></h3>
                                <div class="box-body">
                                  <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">
                                      <i class="fa fa-plus-circle"></i> Tambah Mahasiswa
                                  </button>
                              </div>
                          
                              <div class="modal fade" id="tambahkegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h3 class="modal-title" id="exampleModalLabel">Form Tambah Akun</h3>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <form action="/akun/create" method="post">
                                                  {{csrf_field()}}
                                                  <div class="form-group">
                                                      <label for="recipient-name" class="col-form-label">Nama </label>
                                                      <input type="text" name="name" class="form-control" id="recipient-name" placeholder="Name">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="recipient-name" class="col-form-label">Alamat</label>
                                                      <input type="text" name="kejuaraan" class="form-control" id="recipient-name" placeholder="Alamat">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Nim/NIP</label>
                                                    <input type="text" name="kejuaraan" class="form-control" id="recipient-name" placeholder="Nim/Nip">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Organisasi</label>
                                                    <input type="text" name="kejuaraan" class="form-control" id="recipient-name" placeholder="Nama Organisasi">
                                                </div>
                                                <div class="form-group">
                                                  <label for="recipient-name" class="col-form-label">Tanggal dibuat</label>
                                                  <input type="text" name="tanggal kejuaraan" class="form-control" id="recipient-name" placeholder="Date">
                                              </div>   
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                              <button href="{{ URL ('/keloladmin') }}" type="submit" class="btn btn-primary">Buat Kegiatan</button>
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
                                      <th>Nama</th>
                                      <th>Alamat</th>
                                      <th>NIM/NIP</th>
                                      <th>Organisasi</th>
                                      <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <td> 1</td>
                                      <td> Anto</td>
                                      <td> Banten</td>
                                      <td> 13523072</td>
                                      <td> Bulutangkis FTI</td>
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
                                      </div>
                                  
                                      <div class="modal fade" id="tambahkegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <h3 class="modal-title" id="exampleModalLabel">Form Tambah Akun</h3>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <form action="/akun/create" method="post">
                                                          {{csrf_field()}}
                                                          <div class="form-group">
                                                              <label for="recipient-name" class="col-form-label">Nama </label>
                                                              <input type="text" name="name" class="form-control" id="recipient-name" placeholder="Name">
                                                          </div>
                                                          <div class="form-group">
                                                              <label for="recipient-name" class="col-form-label">Alamat</label>
                                                              <input type="text" name="kejuaraan" class="form-control" id="recipient-name" placeholder="Alamat">
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Nim/NIP</label>
                                                            <input type="text" name="kejuaraan" class="form-control" id="recipient-name" placeholder="Nim/Nip">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Status</label>
                                                            <input type="text" name="kejuaraan" class="form-control" id="recipient-name" placeholder="Status">
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="recipient-name" class="col-form-label">Tanggal dibuat</label>
                                                          <input type="text" name="tanggal kejuaraan" class="form-control" id="recipient-name" placeholder="Date">
                                                      </div>   
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                      <button href="{{ URL ('/keloladmin') }}" type="submit" class="btn btn-primary">Buat Kegiatan</button>
                                                  </div>
                                        </td>
                                    </tr>
                                    <td> 2</td>
                                      <td> Aziz</td>
                                      <td> Cilegon</td>
                                      <td> 14523072</td>
                                      <td> HTMF FTI UII</td>
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
                                                      <form action="/akun/create" method="post">
                                                          {{csrf_field()}}
                                                          <div class="form-group">
                                                              <label for="recipient-name" class="col-form-label">Nama </label>
                                                              <input type="text" name="name" class="form-control" id="recipient-name" placeholder="Name">
                                                          </div>
                                                          <div class="form-group">
                                                              <label for="recipient-name" class="col-form-label">Alamat</label>
                                                              <input type="text" name="kejuaraan" class="form-control" id="recipient-name" placeholder="Alamat">
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Nim/NIP</label>
                                                            <input type="text" name="kejuaraan" class="form-control" id="recipient-name" placeholder="Nim/Nip">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Status</label>
                                                            <input type="text" name="kejuaraan" class="form-control" id="recipient-name" placeholder="Status">
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="recipient-name" class="col-form-label">Tanggal dibuat</label>
                                                          <input type="text" name="tanggal kejuaraan" class="form-control" id="recipient-name" placeholder="Date">
                                                      </div>   
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                      <button href="{{ URL ('/keloladmin') }}" type="submit" class="btn btn-primary">Buat Kegiatan</button>
                                                  </div>
                                    </td>
                                      </tr>
                                      <tr>
                                          <td> 3</td>
                                          <td> Babeh</td>
                                          <td> balikpapan</td>
                                          <td> 14523123</td>
                                          <td> UASC UII</td>
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
                                                          <button type="submit" class="btn btn-primary">Buat Kegiatan</button>
                                                      </div>
                                            </td>
                                          </tr> 
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