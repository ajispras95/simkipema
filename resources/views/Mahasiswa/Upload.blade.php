@extends('didalamkampus')

@section('tab-title')
<title>upload proposal</title>
@endsection

@section('content')
    <section class="content-header">
        <h1>Halaman
        <small>upload Proposal</small>
        </h1>
    </section>

    <section class="content">
        <section>
    <!-- form validasi -->
        <form action="/didalamkampus" method="post">
         {{ csrf_field() }}
         <body>
             <div class="row">
                 <div class="container">	
         
                         @if(count($errors) > 0)
                         <div class="alert alert-danger">
                             @foreach ($errors->all() as $error)
                             {{ $error }} <br/>
                             @endforeach
                         </div>
                         @endif
         
                         <form action="/upload/didalamkampus" method="POST" enctype="multipart/form-data">
                             {{ csrf_field() }}
         
                             <div class="form-group">
                                 <b>Scan bukti</b><br/>
                                 <input type="file" name="file">
                             </div>
         
                             <div class="form-group">
                                 <b>Keterangan</b>
                                 <textarea class="form-control" name="keterangan"></textarea>
                             </div>
         
                             <input type="submit" value="Upload" class="btn btn-primary">
                         </form>
                         
                         <h4 class="my-5">Data</h4>
         
                         <table class="table table-bordered table-striped">
                             <thead>
                                 <tr>
                                     <th width="1%">File</th>
                                     <th>Keterangan</th>
                                     <th width="1%">OPSI</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach($gambar as $g)
                                 <tr>
                                     <td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
                                     <td>{{$g->keterangan}}</td>
                                     <td><a class="btn btn-danger" href="/upload/hapus/{{ $g->id }}">HAPUS</a></td>
                                 </tr>
                                 @endforeach
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </body>
         {{-- </html>
            <div class="form-group">
             <label for="nama">Nama</label>
                <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input class="form-control" type="text" name="pekerjaan" value="{{ old('pekerjaan') }}">
            </div>
            <div class="form-group">
                <label for="usia">Usia</label>
                <input class="form-control" type="text" name="usia" value="{{ old('usia') }}">
                </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Proses">
            </div>
        </form>
        </section> --}}
    </section>
 @endsection