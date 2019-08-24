@extends('layyout.layout')

@section('tab-title')
<title>Halaman | Admin</title>

@endsection


@section('content')

    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data dokumentasi</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Tambah data</button>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>NIM</th>
              <th>Nama</th>
              <th>Nama Kegiatan</th>
              <th>Prestasi</th>
            </tr>
            </thead>
            <tbody>
            <tfoot>
            <tr>
              <td>01</td>
              <td>14523088</td>
              <td>Ahmad muslihat</td>
              <td>Conference informatics industrial asian pasific</td>
              <td>Speaker</td>
            </tr>
            <tr>
              <td>02</td>
              <td>14522329</td>
              <td>Wahyu Utomo</td>
              <td>Petrolium engineering busineess</td>
              <td>expert consultant</td>
            </tr>
          </tbody>
            </tfoot>
          </table>
        </div>
      </div>


@endsection


