@extends('Mahasiswa.home')

@section('tab-title')
<title>Dokumentasi | Akademis</title>
@endsection

@section('content')
    <section class="content-header">
        <h1>Halaman
        <small>Kegiatan Akademis</small>
        </h1>
    </section>

    <section class="content">
    
            <section class="content">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                          <div class="box-header">
                            <h3 class="box-title"></h3>
                            <td><button href="{{ URL ('/uploaddok') }}"> Upload bukti dokumentasi </button>
                            </td>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nama Kegiatan</th>
                                <th>Nama Organisasi</th>
                                <th>Tanggal Kegiatan</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td>1</td>
                                <td>Porsematif 2014</td>
                                <td> Himpunan Informatika</td>
                                <td> 14-06-2014</td>
                                <td> viewed / Not Seen</td>
                                <td>
                                    <button href="{{ URL ('#') }}"> Upload </button>
                                    <button href="{{('')}}"> Edit</button>
                                    <button href="{{ URL ('#') }}"> Delete </button>
                                </td>
                              </tr>
                              <tr>
                                    <td>1</td>
                                    <td>Porsematif 2014</td>
                                    <td> Himpunan Informatika</td>
                                    <td> 14-06-2014</td>
                                    <td> viewed / Not Seen</td>
                                    <td>
                                        <button href="{{ URL ('#') }}"> Upload </button>
                                        <button href="{{('')}}"> Edit</button>
                                        <button href="{{ URL ('#') }}"> Delete </button>
                                    </td>
                                  </tr>
                                  <tr>
                                        <td>1</td>
                                        <td>Porsematif 2014</td>
                                        <td> Himpunan Informatika</td>
                                        <td> 14-06-2014</td>
                                        <td> viewed / Not Seen</td>
                                        <td>
                                            <button href="{{ URL ('#') }}"> Upload </button>
                                            <button href="{{('')}}"> Edit</button>
                                            <button href="{{ URL ('#') }}"> Delete </button>
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