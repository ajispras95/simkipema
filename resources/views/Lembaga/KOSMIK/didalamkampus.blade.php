@extends('lembaga.kosmik.home')

@section('tab-title')
<title>Kegiatan | Internal</title>
@endsection

@section('content')
    <section class="content-header">
        <h1>Halaman
        <small>Kegiatan Internal</small>
        </h1>
    </section>

    <div class="wrapper">
        <div class="content-wrapper">
          
          <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-body">
                    <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">
                        <i class="fa fa-plus-circle"></i> Tambah Kegiatan
                    </button>
                  </div>
            
                  <div class="modal fade" id="tambahkegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h3 class="modal-title" id="exampleModalLabel">Form Tambah Kegiatan</h3>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                              <form action="{{URL('lembaga/kosmik/didalamkampus')}}" method="POST">
                                    {{csrf_field()}}
                                  @foreach ($data as $d)
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nama Kegiatan</label>
                                        <input type="text" name="name" value="{{$d->nama_kegiatan}}" class="form-control" id="recipient-name" placeholder="Event Name" required>
                                        {{-- <option @if($event->category =="Competition") selected @endif value="competition">Competition</option> --}}
                                    </div>
                                    <div class="form-group">
                                      <label>Program kerja divisi</label>
                                      <select class="form-control select2 select2-hidden-accessible" name="category" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option @if($d->program_kerja_divisi =="di_dalam_kampus") selected @endif value="Di dalam kampus">Didalam kampus</option>
                                        <option @if($d->program_kerja_divisi =="di_luar_kampus") selected @endif value="Di luar kampus">Diluar kampus</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Predikat</label>
                                          <input type="text" name="kejuaraan" value="{{$d->predikat}}" class="form-control" id="recipient-name" placeholder="Juara satu" required>
                                          {{-- <input type="text" name="name" value="{{$event->name}}" class="form-control" placeholder="Name Event" required> --}}
                                      </div>
                                      <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Waktu Pelaksanaan</label>
                                        <input type="text" name="kejuaraan" value="{{$d->predikat}}" class="form-control" id="recipient-name" placeholder="Juara satu">
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="col-form-label">tempat</label>
                                      <input type="text" name="kejuaraan" value="{{$d->tempat}}" class="form-control" id="recipient-name" placeholder="Juara satu">
                                      </div>
                                      <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">tingkat</label>
                                          <input type="text" name="kejuaraan" value="{{$d->tingkat}}" class="form-control" id="recipient-name" placeholder="Juara satu">
                                      </div>
                                      <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Scan_bukti</label>
                                          <input type="text" name="kejuaraan" value="{{$d->scan_bukti}}" class="form-control" id="recipient-name" placeholder="Juara satu">
                                      </div>
                                  @endforeach
                                  <label for="exampleInputFile">File input</label>
                                  <div class="form-group">
                                      <div class="image-upload-wrap">
                                          <input class="file-upload-input" type='file' name="proposal" onchange="readProposalFile(this);" accept="application/pdf" required|file|size:5000 />
                                          <div class="drag-text">
                                              <h3 id="proposal-title">Drag and drop pdf file or select manually</h3>
                                          </div>
                                      </div>
                                      <p class="help-block">Format PDF</p>
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
                          <th>Nama Kegiatan</th>
                          <th>program kerja divisi</th>
                          <th>predikat</th>
                          <th>waktu pelaksanaan</th>
                          <th>tempat</th>
                          <th>tingkat</th>
                          <th>scan bukti</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach ($data as $d)
                                  <tr>
                                    <td> {{ $d->id }}</td>                                   
                                    <td> {{ $d->nama_kegiatan }}</td>
                                    <td> {{ $d->program_kerja_divisi }}</td>
                                    <td> {{ $d->predikat }}</td>
                                    <td> {{ $d->waktu_pelaksanaan }}</td>
                                    <td> {{ $d->tempat }}</td>                                
                                    <td> {{ $d->tingkat }}</td>
                                    <td> {{ $d->scan_bukti }}</td>
                                    <td>
                                      <button type="button" class="" data-toggle="modal" data-target="#Detail" data-whatever="@mdo">
                                          Detail 
                                        </button>
                                        <button type="button" class="" data-toggle="modal" data-target="#Edit" data-whatever="@mdo">
                                            Edit 
                                          </button>
                                          <button href="/Mahasiswa/didalamkampus/hapus/{{ $d->id }}">
                                            Hapus
                                            </button>
                                    </td>
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
            <script>
                function readPosterFile(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
        
                        reader.onload = function(e) {
                            $('#poster-title').html(input.files[0].name);
                        };
        
                        reader.readAsDataURL(input.files[0]);
                    }
                }
        
                function readProposalFile(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
        
                        reader.onload = function(e) {
                            $('#proposal-title').html(input.files[0].name);
                        };
        
                        reader.readAsDataURL(input.files[0]);
                    }
                }
        
                $('#startDate').datepicker({
              autoclose: true,
              format: 'mm/dd/yyyy'
              });
          
                  $('#endDate').datepicker({
                autoclose: true,
                format: 'mm/dd/yyyy'
              });
            </script>
          </section>

        </div>
    </div>
@endsection