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
                            <button disabled type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#tambahkegiatan" data-whatever="@mdo">
                                Detail
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
                                    </div>
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
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td> {{ $detail->id }}</td>                                   
                                      <td> {{ $detail->nama_kegiatan }}</td>
                                      <td> {{ $detail->program_kerja_divisi }}</td>
                                      <td> {{ $detail->predikat }}</td>
                                      <td> {{ $detail->waktu_pelaksanaan }}</td>
                                      <td> {{ $detail->tempat }}</td>                                
                                      <td> {{ $detail->tingkat }}</td>
                                      <td> {{ $detail->scan_bukti }}</td>
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
                    <script>
                        function hapus(didalamkampus, id){
                            didalamkampus.preventDefault()
                            swal({
                                title: "Are you sure to accept?",
                                text: "Please make an agreement by phone or email before accepting an offer",
                                icon: "warning",
                                closeOnClickOutside: true,
                                buttons: ["hapus", "Accept"],
                            }).then((willDelete) => {
                                if(willDelete){
                                    $("#hapus-"+id).submit()
                                }
                            })
                        }
                    </script>
                    <script>
                    var request;

                      $("#tambahkegiatan").click(function(didalamkampus)
                      $("#Hapus").click(function(didalamkampus)
                      $("#Edit").click(function(didalamkampus)
                      $("#Detail").click(function(didalamkampus){
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