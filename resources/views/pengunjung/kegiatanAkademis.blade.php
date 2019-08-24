@extends('lembaga.home')

@section('tab-title')
<title>Kegiatan | Akademis</title>
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
                            <h3 class="box-title">My Program</h3>
                            <td><button href="{{ URL ('/uploadproposal') }}"> Upload proposal </button>
                            </td>  
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
                                <tr>
                                  <td> 1</td>
                                  <td> Porsematif 2014</td>
                                  <td> Himpunan Informatika</td>
                                  <td> Harapan 1</td>
                                  <td> 14-06-2014</td>                                
                                  <td> 2014</td>
                                  <td> viewed / Not Seen</td>
                                  <td>
                                      <button href="{{ URL ('#') }}"> Detail </button>
                                      <button href="{{('')}}"> Edit</button>
                                      <button href="{{ URL ('#') }}"> Delete </button>
                                  </td>
                                </tr>
                                <td> 1</td>
                                <td> Porsematif 2014</td>
                                <td> Himpunan Informatika</td>
                                <td> Harapan 1</td>
                                <td> 14-06-2014</td>                                
                                <td> 2014</td>
                                <td> viewed / Not Seen</td>
                                <td>
                                    <button href="{{ URL ('#') }}"> Detail </button>
                                    <button href="{{('')}}"> Edit</button>
                                    <button href="{{ URL ('#') }}"> Delete </button>
                                </td>
                                  </tr>
                                  <tr>
                                    <td> 1</td>
                                    <td> Porsematif 2014</td>
                                    <td> Himpunan Informatika</td>
                                    <td> Harapan 1</td>
                                    <td> 14-06-2014</td>                                
                                    <td> 2014</td>
                                    <td> viewed / Not Seen</td>
                                    <td>
                                        <button href="{{ URL ('#') }}"> Detail </button>
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