@extends('lembaga.himmah.home')
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
                <a href="{{ URL ('/KegiatanInternal') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
                      <div class="box">
              <div id="kegiatan-grid" class="grid-view">
                <table class="items table table-bordered">
                <thead>
                <tr>
                <th id="kegiatan-grid_c0">No</th>
                <th id="kegiatan-grid_c1"><a class="sort-link" href="/kegiatan-index.html?status=t&amp;uny=f&amp;Kegiatan_sort=nim">Nama Kegiatan
                  <span class="caret"></span></a></th>
                  <th id="kegiatan-grid_c3">Nama Lembaga</th>
                  <th id="kegiatan-grid_c5"><a class="sort-link" href="/kegiatan-index.html?status=t&amp;uny=f&amp;Kegiatan_sort=tempat">Tempat
                      <span class="caret"></span></a></th>
                      <th id="kegiatan-grid_c6"><a class="sort-link" href="/kegiatan-index.html?status=t&amp;uny=f&amp;Kegiatan_sort=tanggal_awal">Tahun
                        <span class="caret"></span></a></th>
                        <th id="kegiatan-grid_c7"><a class="sort-link" href="/kegiatan-index.html?status=t&amp;uny=f&amp;Kegiatan_sort=status">STATUS
                          <span class="caret"></span></a></th>
                          <th id="kegiatan-grid_c9">Perbaikan</th>
                <tr class="filters">
                <td><div class="filter-container">&nbsp;</div></td>
                <td><div class="filter-container">
                  <input placeholder="Pencarian kegiatan (enter)" name="Kegiatan[nim]" id="Kegiatan_nim" type="text" maxlength="15"></div></td>
                  <td><div class="filter-container">&nbsp;</div></td>
                  <td><div class="filter-container">&nbsp;</div></td>
                  <td><div class="filter-container">&nbsp;</div></td>
                  <td><div class="filter-container">&nbsp;</div></td>
                  <td><div class="filter-container">&nbsp;</div></td>
                  <td><div class="filter-container">&nbsp;</div></td>
                </tr>
                </thead>
                <tbody>
                <tr><td colspan="10" class="empty"><span class="empty">Belum ada prestasi. Klik tombol berikut 
                  <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">Tambah Data Baru</a></span></td></tr>
                  
                </tbody>
                </table><div class="keys" style="display:none" title="/kegiatan-index.html?status=t&amp;uny=f"></div>
                </div>
                      </div>
                  </div>
          </section>
                
                 </section>    
                </section>
                  <!-- /.content -->

    </section>

@endsection