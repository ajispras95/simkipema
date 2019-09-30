@extends('Admin.homeAdmin')

@section('tab-title')
<title>Halaman | Admin</title>
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
                <a href="{{ URL ('/laporandmin') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
                <a href="{{ URL ('/KegiatanInternaldmin') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
                <a href="{{ URL ('/prestasidmin') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
                <a href="{{ URL ('/DokumentasiAkademikmin') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
        </section>

@endsection