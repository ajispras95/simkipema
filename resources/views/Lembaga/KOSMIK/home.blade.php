{{-- @extends('layout.home') --}}
<!DOCTYPE html>
{{-- <html lang="{{ app()->getLocale() }}"> --}}
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  @yield('tab-title')
  <title>Prestasi Mahasiswa | Home </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ url('template1/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('template1/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('template1/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('template1/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url('template1/dist/css/skins/_all-skins.min.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ url('template1/bower_components/morris.js/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ url('template1/bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ url('template1/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('template1/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ url('template1/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

  <!-- Tambahan CSS -->
  <link rel="stylesheet" href="{{ URL('css/user/user.css') }}">

  {{-- <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title> --}}

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{ URL ('/lembaga/kosmik/dashboard')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>UII</b></span>
      <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">SIMKIPEMA</span>
    </a>
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ URL ('template1/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">KOSMIK</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ URL ('template1/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                <p>
                 KOSMIK
                  <small>Komunitas Musik informatika</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ URL ('/lembaga/kosmik/profil')}}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ URL ('/login')}}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ URL ('template1/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>KOSMIK</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li><a href="{{ URL ('/lembaga/kosmik/dashboard')}}"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Kegiatan mahasiswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview menu-open" style="display: block;">
              <ul class="treeview-menu" style="display: block;">
                  <li><a href="{{ URL ('/lembaga/kosmik/didalamkampus') }}"> Di dalam kampus</a></li>
                  <li><a href="{{ URL ('/lembaga/kosmik/diluarkampus') }}"> Di luar kampus</a></li>
                </ul>
              </li>
            </ul>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Rekap Prestasi</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                    <li class="treeview menu-open" style="display: block;">
                        <a href="#">Prestasi
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                        <li class="treeview-menu" style="display: block;">
                            <li><a href="{{ URL ('/lembaga/kosmik/prestasi') }}"> Di dalam kampus</a></li>
                            <li><a href="{{ URL ('/lembaga/kosmik/prestasi') }}"> Di luar kampus</a></li>
                        </li>
                      </ul>
                      <li class="treeview menu-open" style="display: block;">
                        <a href="#">Produk
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                        <li class="treeview-menu" style="display: block;">
                            <li><a href="{{ URL ('/lembaga/kosmik/prestasi') }}"> Di dalam kampus</a></li>
                            <li><a href="{{ URL ('/lembaga/kosmik/prestasi') }}"> Di luar kampus</a></li>
                        </li>
                      </ul>
                      <li class="treeview menu-open" style="display: block;">
                        <a href="#">Konten
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                        <li class="treeview-menu" style="display: block;">
                            <li><a href="{{ URL ('/lembaga/kosmik/prestasi') }}"> Di dalam kampus</a></li>
                            <li><a href="{{ URL ('/lembaga/kosmik/prestasi') }}"> Di luar kampus</a></li>
                        </li>
                      </ul>
                    </li>
                  </ul>

                  <li class="treeview">
                    <a href="#">
                      <i class="fa fa-edit"></i> 
                      <span>Rekap dokumentasi</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{ URL ('/lembaga/kosmik/dokumentasiinternal') }}"><i class="fa fa-circle-o"></i> Dokumentasi Internal</a></li>
                      <li><a href="{{ URL ('/lembaga/kosmik/dokumentasieksternal') }}"><i class="fa fa-circle-o"></i> Dokumentasi Eksternal</a></li>
                      </li>
                    </ul>
                  <li><a href="{{ URL ('/lembaga/kosmik/laporan') }}"><i class="fa fa-book"></i> <span>Laporan</span></a></li>
                </ul>
              </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>BETA Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019 <a href="#">SIMKIPEMA UII</a></strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ URL ('template1/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ URL ('template1/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL ('template1/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ URL ('template1/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ URL ('template1/bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ URL ('template1/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ URL ('template1/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ URL ('template1/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ URL ('template1/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ URL ('template1/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ URL ('template1/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ URL ('template1/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ URL ('template1/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ URL ('template1/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ URL ('template1/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL ('template1/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL ('template1/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL ('template1/dist/js/demo.js') }}"></script>

<script src="{{ URL ('template1/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL ('template1/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script>
        $(function () {
          $('#example1').DataTable()
          $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
          })
        })
      </script>

</body>
</html>
