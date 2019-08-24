@extends('layyout.layout')

@section('tab-title')
<title>Halaman | Admin</title>

@endsection


@section('content')

    <div class="box">
        {{-- <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div> --}}
        <!-- /.box-header -->
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
              <td>Trident</td>
              <td>Internet
                Explorer 4.0
              </td>
              <td>Win 95+</td>
              <td> 4</td>
              <td>X</td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 5.0
              </td>
              <td>Win 95+</td>
              <td>5</td>
              <td>C</td>
            </tr>
          </tbody>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Tambah data</button>
          </div>
            </tfoot>
          </table>
        </div>
      </div>


@endsection


