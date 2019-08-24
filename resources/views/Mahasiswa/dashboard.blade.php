@extends('Mahasiswa.home')

@section('tab-title')
<title>Halaman | Mahasiswa</title>
@endsection

@section('content')
    
      <section class="content-header">
          <h1>
            Dashboard
            <small>SIMKIPEMA</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <p>Total Program</p>
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>10</h3>
                  <p>Program Kegiatan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{ URL ('/laporan') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <p>Kegiatan Mahasiswa</p>
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>2/10  </h3>
                  <p>viewed / Not Seen</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ URL ('/KegiatanAkademik') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <p>Rekap prestasi</p>
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>3/10</h3>
                  <p>viewed / Not Seen</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ URL ('/prestasi') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <p>Dokumentasi</p>
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>35</h3>
                  <p>Dokumentasi</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ URL ('/DokumentasiAkademik') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
        </section>

        {{-- <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">My Program</h3>
                </div>
        <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>ID</th>
                <th>Nama Kegiatan</th>
                <th>Nama Organisasi</th>
                <th>Tanggal Kegiatan</th>
                <th>Status</th>
              </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>Porsematif 2014</td>
                      <td> Himpunan Informatika</td>
                      <td> 14-06-2014</td>
                      <td> viewed / Not Seen</td>
                  </tr>
                    <tr>
                        <td>1</td>
                        <td>Porsematif 2014</td>
                        <td> Himpunan Informatika</td>
                        <td> 14-06-2014</td>
                        <td> viewed / Not Seen</td>
                      </tr>
                      <tr>
                          <td>1</td>
                          <td>Porsematif 2014</td>
                          <td> Himpunan Informatika</td>
                          <td> 14-06-2014</td>
                          <td> viewed / Not Seen</td>
                        </tr>
              </tbody>
            </table>
            <div class="box-body">
                <h3 class="box-title">Create Program</h3>
              <button type="button" class="btn btn-default btn-block btn-flat">Create</button>
            </div>
          </div> --}}
                 <section> 
                  <div class="content-header">
                    <h2>
                        Organisasi Mahasiswa
                    </h2>
                  </div>

                  <section>
                  <div class="content-header">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="box">
                                <div class="icon">
                                    <i  class="fa fa-glass" aria-hidden="true"></i>
                                </div>
                                <h3>LEM FTI</h3>
                                <div class="text">
                                <a href="{{ URL('https://lem.uii.ac.id/') }}">
                                    <div class="btn-join">See All</div>
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                          <div class="box">
                              <div class="icon">
                                  <i class="fa fa-cutlery"></i>
                              </div>
                              <h3>DPM FTI</h3>
                              <div class="text">                     
                                  <a href="{{ URL('https://dpm.uii.ac.id/') }}">
                                      <div class="btn-join">See All</div>
                                  </a>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                            <div class="box">
                                <div class="icon">
                                    <i class="fa fa-wifi" aria-hidden="true"></i>
                                </div>
                                <h3>UASC</h3>
                                <div class="text">                     
                                    <a href="{{ URL('https://www.electricvehicle-indonesia.com/') }}">
                                        <div class="btn-join">See All</div>
                                    </a>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-2">
                            <div class="box">
                                <div class="icon">
                                    <i  class="fa fa-diamond" aria-hidden="true"></i>
                                </div>
                                <h3>HIMMAH</h3>
                                <div class="text">                     
                                    <a href="{{ URL('https://himmahonline.id/') }}">
                                        <div class="btn-join">See All</div>
                                    </a>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-2">
                            <div class="box">
                                <div class="icon">
                                    <i class="fa fa-envira" aria-hidden="true"></i>
                                </div>
                                <h3>MENWA UII</h3>
                                <div class="text">                     
                                    <a href="{{ URL('https://menwa.uii.ac.id/') }}">
                                        <div class="btn-join">See All</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="box">
                                <div class="icon">
                                    <i class="fa fa-external-link-square" aria-hidden="true"></i>
                                </div>
                                <h3>Lain-Lain</h3>
                                <div class="text">                     
                                    <a href="{{ URL('https://kemahasiswaan.uii.ac.id/informasi/organisasi-kemahasiswaan/') }}">
                                        <div class="btn-join">See All</div>
                                    </a>
                                </div>
                            </div>
                        </div>                     
                    </div>
                  </div>
                  </section>
                 </section>    
                </section>
                  <!-- /.content -->

    </section>

@endsection