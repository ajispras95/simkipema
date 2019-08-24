@extends('layyout.layout')

@section('tab-title')
<title>Halaman | Admin</title>
@endsection

@section('content')

<link rel="stylesheet" href="{{ URL ('css/materi.css') }}">

<section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Form Prestasi</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama mahasiswa</label>
                    <input type="name" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Kegiatan</label>
                    <input type="name" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Prestasi</label>
                    <input type="name" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File foto</label>
                    <input type="file" id="exampleInputFile">
  
                    <p class="help-block">Example block-level help text here.</p>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Check me out
                    </label>
                  </div>
                </div>
                <!-- /.box-body -->
  
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->
  
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </section>

@endsection



