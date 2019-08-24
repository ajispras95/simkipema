@extends('layyout.layout')

@section('tab-title')
<title>Halaman | Admin</title>
@endsection

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" enctype="multipart/form-data" action="/create/event">
      {{csrf_field()}}
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Event Name</label>
        <input type="text" name="name" value="{{$event->name}}" class="form-control" id="exampleInputEmail1" placeholder="Name Event">
        </div>
        <label>Category</label>
                  <select class="form-group" name="category" style="width: 100%;" tabindex="-1" aria-hidden="true">
                      <option @if($event->category =="competition") selected @endif value="competition">Competition</option>
                      <option @if($event->category =="seminar or talk") selected @endif value="seminar or talk">Seminar or Talk</option>
                      <option @if($event->category =="sport") selected @endif value="sport">Sport</option>
                      <option  @if($event->category =="concert") selected @endif value="concert">Concert</option>
                      <option  @if($event->category =="camp and trip") selected @endif value="camp and trip">Camp and Trip</option>
                      <option  @if($event->category =="exhibition") selected @endif value="exhibition">Exhibition</option>
                      <option  @if($event->category =="theater") selected @endif value="theater">Theater</option>
                  </select>

        <div class="form-group">
          <label>Start Date Event:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="date" name="start" class="form-control pull-right" id="datepicker">
          </div>
          <!-- /.input group -->
        </div>

        ="help-block">Format JPEG</p>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">File Proposal</label>
          <input type="file" name="proposal" id="exampleInputFile" required>
          <p class="help-block">Format PDF</p>
        </div>
      </div>
      <!-- /.box-body -->
<div class="form-group">
          <label>End Date Event:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="date" name="end" class="form-control pull-right" id="datepicker">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Phone</label>
          <input type="number" name="telp" class="form-control" id="exampleInputPassword1" placeholder="Phone">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Address</label>
          <input type="text" name="location" class="form-control" id="exampleInputPassword1" placeholder="Address">
        </div>
        <div class="form-group">
          <label for="about_us" class="form-label">About us</label>
          <textarea class="form-control" name="note" id="about_us" placeholder="About Event"></textarea>
      </div>
      <label>Audience</label>
                  <select class="form-group" name="audience" style="width: 100%;" tabindex="-1" aria-hidden="true">
                      <option value="mahasiswa">Mahasiswa</option>
                      <option value="umum">Umum</option>
                  </select>
      <div class="form-group">
          <label for="exampleInputPassword1">Total Audience</label>
          <input type="number" name="total" class="form-control" id="exampleInputPassword1" placeholder="Audience">
          </div>          
      <div class="form-group">
          <label for="exampleInputPassword1">Budget</label>
          <input type="number" name="budget" max-length="9" class="form-control" id="exampleInputPassword1" placeholder="Rp">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">File Poster</label>
          <input type="file" name="poster" id="exampleInputFile">
          <p class
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

@endsection



