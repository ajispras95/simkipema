@extends('Mahasiswa.home')

@section('tab-title')
<title>Kegiatan | Internal</title>
@endsection

@section('content')
    <section class="content-header">
        <h1>Halaman
        <small>Kegiatan Internal</small>
        </h1>
    </section>

    <section class="content">
    
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
                                        <form action={{ url('/didalamkampus')}} method="post">
                                            {{csrf_field()}}
                                            @if(count($errors) > 0)
                                            <div class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                {{ $error }} <br/>
                                                @endforeach
                                            </div>
                                            @endif
                                            {{-- <label>Nama Organisasi</label>
                                            <select class="form-control select2 select2-hidden-accessible" name="category" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                              <option value="Informatika">Himpunan Teknik Informatika</option>
                                              <option value="Mobil listrik">UASC UII</option>
                                              <option value="Lem f">LEM F UII</option>
                                              <option value="Industri">Himpunan Teknik Industri</option>
                                              <option value="Mesin">Himpunan Teknik Mesin</option>
                                          </select>  --}}
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nama Kegiatan</label>
                                        <input type="text" name="nama_kegiatan" class="form-control" id="recipient-name" placeholder="Event Name">
                                    </div>
                                    <div class="form-group">
                                      <label>Program kerja divisi</label>
                                      <select class="form-control select2 select2-hidden-accessible" name="program_kerja_divisi" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option value="Didalam kampus">Didalam kampus</option>
                                        <option value="Diluar kampus">Diluar kampus</option>
                                      </select>              
                                    </label>
                                  </div>
                                  <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Predikat</label>
                                        <input type="text" name="predikat" class="form-control" id="recipient-name" placeholder="Juara satu">
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="col-form-label">Waktu Pelaksanaan</label>
                                      <input type="text" name="waktu_pelaksanaan" class="form-control" id="recipient-name" placeholder="Juara satu">
                                  </div>
                                  <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">tempat</label>
                                    <input type="text" name="tempat" class="form-control" id="recipient-name" placeholder="Juara satu">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">skala_kegiatan</label>
                                        <input type="text" name="skala_kegiatan" class="form-control" id="recipient-name" placeholder="Juara satu">
                                        </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">tingkat</label>
                                        <input type="text" name="tingkat" class="form-control" id="recipient-name" placeholder="Juara satu">
                                    </div>
                                    <div class="form-group">
                                        <b>Scan bukti</b><br/>
                                        <input type="file" name="scan_bukti">
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
                                    @php $no = 1; @endphp
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
                                              <button type="button" class="" data-toggle="modal" data-target="#hapus" data-whatever="@mdo">
                                                Hapus
                                                </button>
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
                    var request;

                      $("#tambahkegiatan").click(function(event)
                      $("#Hapus").click(function(event)
                      $("#Edit").click(function(event)
                      $("#Detail").click(function(event){
                        var user = $('#user').val();
                        var password = $('#pw').val();
                        var token = $("input[name=_token]").val();

                        if (request) {
                          request.abort();
                        }

                        request = $.ajax({
                          url: "{{ url('authenticate') }}",
                          type: "post",
                          data: 	{
                              "nimornip" : user,
                              "password" : password,
                              "_token" : token, 
                              }
                        });

                        // Callback handler that will be called on success
                        request.done(function (response, textStatus, jqXHR){
                          // Log a message to the console
                          if (response.role == "Admin"){
                            window.location = "{{ url('dashboardmin') }}";
                          }else if(response.role == "mahasiswa"){
                            window.location = "{{ url('dashboard') }}";
                          }else if(response.role == "pengunjung"){

                          }
                          console.log(response.role);
                        });

                        // Callback handler that will be called on failure
                        request.fail(function (jqXHR, textStatus, errorThrown){
                          // Log the error to the console
                          alert("Wrong Login !!!");
                          console.error(
                            "The following error occurred: "+
                            textStatus, errorThrown
                          );
                        });

                        // console.log("Hooray, it worked!"+user+" "+token+" "+password);
                      });
                    <!-- /.row -->
                    </script>
                  </section>

    </section>
@endsection