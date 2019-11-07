<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  @yield('tab-title')
  <title>Prestasi Mahasiswa | Home </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
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

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    {{-- @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif --}}
    <a href="{{Auth::user()->location}}" class="logo">

      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>UII</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">SIMKIPEMA</span>
    </a>
    
     {{-- <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header"> --}}

                      <!-- Authentication Links -->
                      {{-- @guest
                      <li><a href="{{ route('login') }}">Login</a></li>
                      <li><a href="{{ route('register') }}">Register</a></li>
                  @else
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu">
                              <li>
                                  <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @endguest
              </ul>
          </div>
      </div>
  </nav> --}}

    <!-- Header Navbar: style can be found in header.less -->
                    <nav class="navbar navbar-static-top">
                        <div class="container">
                            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                                <ul class="nav navbar-nav"
                                    @if({{Auth::user()->name)
                                        <li><a href="{{ URL ('/lembaga/centris/home') }}">centris</a></li>
                                        <li><a href="{{ URL ('/lembaga/dpm/home') }}">dpm</a></li>
                                        <li><a href="{{ URL ('/lembaga/kosmik/home') }}">kosmik</a></li>
                                        <li><a href="{{ URL ('/lembaga/himmah/home') }}">himmah</a></li>
                                        <li><a href="{{ URL ('/lembaga/uasc/home') }}">uasc</a></li>
                                        <li class="dropdown">
                                            <a href="{{ URL('') }}" class="dropdown-toggle" data-toggle="dropdown">Sponsorship<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ URL ('/eo/sponsorship/dashboard') }}" class="header-list-menu">
                                                        <span class="fa fa-home"></span>
                                                        Dashboard
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL ('/eo/sponsorship/incoming') }}" class="header-list-menu">
                                                        <span class="fa fa-list"></span>
                                                        Incoming Sponsor
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL ('/eo/sponsorship/waiting') }}" class="header-list-menu">
                                                        <span class="fa fa-clock-o"></span>
                                                        Waiting Sponsor
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL ('/eo/sponsorship/accepted') }}" class="header-list-menu">
                                                        <span class="fa fa-check-square"></span>
                                                        Accepted Sponsor
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL ('/eo/sponsorship/rejected') }}" class="header-list-menu">
                                                        <span class="fa fa-exclamation-circle"></span>
                                                        Rejected Sponsor
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    @else
                                        <li><a href="{{ URL ('/partner/event/explore') }}">Events</a></li>
                                        <li class="dropdown">
                                            <a href="{{ URL('') }}" class="dropdown-toggle" data-toggle="dropdown">Sponsorship<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ URL ('/partner/sponsorship/dashboard') }}" class="header-list-menu">
                                                        <span class="fa fa-home"></span>
                                                        Dashboard
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL ('/partner/sponsorship/incoming') }}" class="header-list-menu">
                                                        <span class="fa fa-list"></span>
                                                        Incoming Sponsor
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL ('/partner/sponsorship/waiting') }}" class="header-list-menu">
                                                        <span class="fa fa-clock-o"></span>
                                                        Waiting Sponsor
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL ('/partner/sponsorship/accepted') }}" class="header-list-menu">
                                                        <span class="fa fa-check-square"></span>
                                                        Accepted Sponsor
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL ('/partner/sponsorship/rejected') }}" class="header-list-menu">
                                                        <span class="fa fa-exclamation-circle"></span>
                                                        Rejected Sponsor
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    @endif
    
                                </ul>
                            </div>
    
                            <div class="navbar-custom-menu">
                                <ul class="nav navbar-nav">
                        
                                    <!-- User Account Menu -->
                                    <li class="dropdown user user-menu">
                                        <!-- Menu Toggle Button -->
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <!-- The user image in the navbar-->
                                            @if($userLogin->photoava)
                                                <img src="{{ URL('upload/ava/'.$userLogin->photoava) }}" class="user-image" alt="User Image">
                                            @else
                                                <img src="{{ URL('main_template/dist/img/avatar04.png') }}" class="user-image" alt="User Image">
                                            @endif
                                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                            <span class="hidden-xs">{{ $userLogin->name }}</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <!-- The user image in the menu -->
                                            <li class="user-header">
                                                @if($userLogin->photoava)
                                                    <img src="{{ URL('upload/ava/'.$userLogin->photoava) }}" class="img-circle" alt="User Image">
                                                @else
                                                    <img src="{{ URL('main_template/dist/img/avatar04.png') }}" class="img-circle" alt="User Image">
                                                @endif
                                                <p>
                                                    {{ $userLogin->name }}
                                                    @if($userLogin->role == 'EO')
                                                        <small>As Event Organizer</small>
                                                    @else
                                                        <small>As Sponsor</small>
                                                    @endif
                                                </p>
                                            </li>
                                            
                                            <!-- Menu Footer-->
                                            <li class="user-footer">
                                                <div class="pull-left">
                                                    @if($userLogin->role == 'EO')
                                                        <a href="{{ URL('/eo/profile') }}" class="btn btn-default btn-flat">Profile</a>
                                                    @else
                                                        <a href="{{ URL('/partner/profil') }}" class="btn btn-default btn-flat">Profile</a>
                                                    @endif
                                                </div>
                                                <div class="pull-right">
                                                    <a onclick="logout(event)" class="btn btn-default btn-flat">Sign out</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
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
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" >MAIN NAVIGATION</li>

        <li><a href="{{Auth::user()->location}}"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
        

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
                <a href="#"><i class="fa fa-circle-o"></i>Kegiatan Internal
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview menu-open" style="display: block;">
                        <a href="#">LEM
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu" style="display: block;">
                            <li><a href="{{Auth::user()->form.'didalamkampus'}}"> Di dalam kampus</a></li>
                            <li><a href="{{Auth::user()->form.'diluarkampus'}}"> Di luar kampus</a></li>
                          </ul>
                      </li>
                      <li class="treeview menu-open" style="display: block;">
                        <a href="#">DPM
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu" style="display: block;">
                            <li><a href="{{Auth::user()->form.'didalamkampus'}}"> Di dalam kampus</a></li>
                            <li><a href="{{Auth::user()->form.'diluarkampus'}}"> Di luar kampus</a></li>
                          </ul>
                      </li>
                      <li class="treeview menu-open" style="display: block;">
                        <a href="#">HIMMAH
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu" style="display: block;">
                            <li><a href="{{Auth::user()->form.'didalamkampus'}}"> Di dalam kampus</a></li>
                            <li><a href="{{Auth::user()->form.'diluarkampus'}}"> Di luar kampus</a></li>
                          </ul>
                      </li>
                  </ul>
                  
                  <li class="treeview menu-open" style="display: block;">
                      <a href="#"><i class="fa fa-circle-o"></i> Kegiatan Eksternal
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                    <ul class="treeview-menu">
                    <li class="treeview menu-open" style="display: block;">
                      <a href="#">KOSMIK
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu" style="display: block;">
                          <li><a href="{{Auth::user()->form.'didalamkampus'}}"> Di dalam kampus</a></li>
                          <li><a href="{{Auth::user()->form.'diluarkampus'}}"> Di luar kampus</a></li>
                        </ul>
                      </li>
                    <li class="treeview menu-open" style="display: block;">
                        <a href="#">UASC
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu" style="display: block;">
                            <li><a href="{{Auth::user()->form.'didalamkampus'}}"> Di dalam kampus</a></li>
                            <li><a href="{{Auth::user()->form.'diluarkampus'}}"> Di luar kampus</a></li>
                        </ul>
                    </li>
                        <li class="treeview menu-open" style="display: block;">
                          <a href="#">CENTRIS
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                        <ul class="treeview-menu" style="display: block;">
                            <li><a href="{{Auth::user()->form.'didalamkampus'}}"> Di dalam kampus</a></li>
                            <li><a href="{{Auth::user()->form.'diluarkampus'}}"> Di luar kampus</a></li>
                          </ul>
                        </li>
                    </ul>
                  </li>
                </ul>
                

        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Kegiatan mahasiswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="{{ URL ('/KegiatanInternal') }}"><i class="fa fa-circle-o"></i>Kegiatan Internal</a></li>
            <li><a href="{{ URL ('/KegiatanEksternal') }}"><i class="fa fa-circle-o"></i>Kegiatan Eksternal</a></li>
          </ul>
        </li> --}}

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
                            <li><a href="{{Auth::user()->form.'didalamkampus'}}"> Di dalam kampus</a></li>
                            <li><a href="{{Auth::user()->form.'diluarkampus'}}"> Di luar kampus</a></li>
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
                            <li><a href="{{Auth::user()->form.'didalamkampus'}}"> Di dalam kampus</a></li>
                            <li><a href="{{Auth::user()->form.'diluarkampus'}}"> Di luar kampus</a></li>
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
                            <li><a href="{{Auth::user()->form.'didalamkampus'}}"> Di dalam kampus</a></li>
                            <li><a href="{{Auth::user()->form.'diluarkampus'}}"> Di luar kampus</a></li>
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
            <li class="treeview menu-open" style="display: block;">
                <a href="#"><i class="fa fa-circle-o"></i>dokumentasi Internal
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
            <ul class="treeview-menu">
              <li class="treeview-menu" style="display: block;">
                  <li><a href="{{Auth::user()->form.'dokumentasiinternal'}}"><i class="fa fa-circle-o"></i> LEM</a></li>
                  <li><a href="{{Auth::user()->form.'dokumentasiinternal'}}"><i class="fa fa-circle-o"></i> DPM</a></li>
                  <li><a href="{{Auth::user()->form.'dokumentasiinternal'}}"><i class="fa fa-circle-o"></i> HIMMAH</a></li>
              </li>
            </ul>
            <li class="treeview menu-open" style="display: block;">
                <a href="#"><i class="fa fa-circle-o"></i> dokumentasi Eksternal
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                <li class="treeview-menu" style="display: block;">
                  <li><a href="{{Auth::user()->form.'dokumentasieksternal'}}"><i class="fa fa-circle-o"></i> CENTRIS</a></li>
                  <li><a href="{{Auth::user()->form.'dokumentasieksternal'}}"><i class="fa fa-circle-o"></i> KOSMIK</a></li>
                  <li><a href="{{Auth::user()->form.'dokumentasieksternal'}}"><i class="fa fa-circle-o"></i> UASC</a></li>
                </li>
             </ul>
            </li>
          </ul>
        
        <li><a href="{{Auth::user()->form.'laporan'}}" class="modal-body"><i class="fa fa-book"></i> <span>Laporan</span></a></li>
        {{-- @if($userLogin->photoava)
        <img src="{{ URL('upload/ava/'.$userLogin->photoava) }}" class="user-image" alt="User Image">
    @else
        <img src="{{ URL('main_template/dist/img/avatar04.png') }}" class="user-image" alt="User Image">
    @endif --}}
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
