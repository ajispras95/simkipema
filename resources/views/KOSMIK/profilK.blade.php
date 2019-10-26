@extends('KOSMIK.home')

@section('tab-title')
<title>Halaman Profil | Mahasiswa</title>
@endsection

@section('content')
    
<div class="content-header">
    <section class="content-header">
        <h1>
            User Profile
        </h1>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-md-3">
    
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{URL ('template1/dist/img/user2-160x160.jpg')}}" alt="User profile picture">
                        
                        <p class="text-muted text-center">KOSMIK</p>
            
                    
                    </div>
                </div>
    
                <!-- About Me -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">About Me</h3>
                    </div>
                    
                    <div class="box-body">
                        <strong><i class="fa fa-envelope"></i> email</strong>
                        <p class="text-muted">KOSMIK@yahoo.com</p>

                        <strong><i class="fa fa-envelope"></i> Phone</strong>
                        <p class="text-muted">087871928127</p>
                        
                        <strong><i class="fa fa-book margin-r-5"></i> Deskripsi </strong>
            
                        <p class="text-muted">
                            Himpunan Teknik Informatika adalah lembaga organisasi universitas islam indonesia yang melayani suara para mahasiswa teknik Informatika<bla class=""></bla>
                        </p>
                        <hr>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-block" data-toggle="modal" data-target="#editprofil">Edit</button>
                        </div>

                        <div class="modal fade" id="editprofil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">Edit Data Profil</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" method="post">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="exampleInputFile">Avatar</label>
                                                <input class="form-control" type="file" name="poster" id="exampleInputFile">  
                                                <p class="help-block">Format JPEG</p>
                                              </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Your Name</label>
                                                <input type="text" name="name" class="form-control" id="recipient-name" placeholder="Your Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Your Email</label>
                                                <input type="email" name="email" class="form-control" id="recipient-name" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Phone</label>
                                                <input type="number" name="phone" class="form-control" id="recipient-name" placeholder="Phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Address</label>
                                                <input type="text" name="location" class="form-control" id="recipient-name" placeholder="Address">
                                            </div>
                                            
                                            
                                       
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>                                
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
     
@endsection