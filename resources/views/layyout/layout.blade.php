<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        @yield('tab-title')
      
        {{-- Bawaan Template --}}
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">  
        <link rel="stylesheet" href="{{ ('template1/bower_components/bootstrap/dist/css/bootstrap.min.css') }}"> 
        <link rel="stylesheet" href="{{ ('template1/bower_components/font-awesome/css/font-awesome.min.css') }}">  
        <link rel="stylesheet" href="{{ ('template1/bower_components/Ionicons/css/ionicons.min.css') }}"> 
        <link rel="stylesheet" href="{{ ('template1/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ ('template1/dist/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ ('template1/bower_components/morris.js/morris.css') }}">
        <link rel="stylesheet" href="{{ ('template1/bower_components/jvectormap/jquery-jvectormap.css') }}">
        <link rel="stylesheet" href="{{ ('template1/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
        <link rel="stylesheet" href="{{ ('template1/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ ('template1/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" href="{{ URL ('template1/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"> 

        {{-- tambahan --}}

        <link rel="stylesheet" href="{{ URL ('css/layout.css') }}">
        {{-- <link rel="stylesheet" href="{{ ('css/home.css') }}">
        <link rel="stylesheet" href="{{ ('css/materi.css') }}">
        <link rel="stylesheet" href="{{ ('css/tabel.css') }}"> --}}

  </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="#" class="logo">
                    <span class="logo-mini"><b>U</b>II</span>
                    <span class="logo-lg"><b>SIMKIPEMA <small>Beta</small> </span>
                </a>
                <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
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
                      <p>Zain Aziz Prastama</p>
                      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                  </div>
                
                  <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MENU</li>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-book"></i>
                        <span>Dokumentasi</span>
                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i>Lembaga
                                  <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ URL('/lem')}}"> LEM </a></li>
                                    <li><a href="{{ URL('/dpm')}}"> DPM </a></li>
                                    <li><a href="{{ URL('/hm')}}"> HM </a></li>
                                </ul>
                              </li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i>Organisasi
                                  <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                                  </a>
                                  <ul class="treeview-menu">
                                      <li><a href="{{ URL('/uasc')}}"> UASC </a></li>
                                      <li><a href="{{ URL('/centris')}}"> CENTRIS </a></li>
                                  </ul>
                                </li>
                        </ul>
                      </a>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-pie-chart"></i> 
                        <span>Pencapaian</span>
                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Lembaga
                                  <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ URL('lem')}}"> LEM </a></li>
                                    <li><a href="{{ URL('dpm')}}"> DPM </a></li>
                                    <li><a href="{{ URL('hm')}}"> HM </a></li>
                                </ul>
                              </li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i>Organisasi
                                  <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                                  </a>
                                  <ul class="treeview-menu">
                                      <li><a href="{{ URL('uasc')}}"> UASC </a></li>
                                      <li><a href="{{ URL('centris')}}"> CENTRIS </a></li>
                                  </ul>
                                </li>
                        </ul>
                      </a>
                      <li class="treeview">
                          <a href="#">
                            <i class="fa fa-calendar"></i> <span>Event</span>
                          </a>
                          <ul class="treeview-menu">
                            <li class="treeview">
                              <a href="#"><i class="fa fa-circle-o"></i>Event yang dibuat
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu">
                                <li class="treeview">
                                  <a href="#"><i class="fa fa-circle-o"></i> Lembaga
                                    <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                  </a>
                                  <ul class="treeview-menu">
                                      <li><a href="{{ URL('lem')}}"> LEM </a></li>
                                      <li><a href="{{ URL('dpm')}}"> DPM </a></li>
                                      <li><a href="{{ URL('hm')}}"> HM </a></li>
                                  </ul>
                                <li class="treeview">
                                        <a href="#"><i class="fa fa-circle-o"></i>Organisasi
                                          <span class="pull-right-container">
                                              <i class="fa fa-angle-left pull-right"></i>
                                          </span>
                                          </a>
                                          <ul class="treeview-menu">
                                              <li><a href="{{ URL('uasc')}}"> UASC </a></li>
                                              <li><a href="{{ URL('centris')}}"> CENTRIS </a></li>
                                          </ul>
                                  </li>
                                </li>
                              </ul>
                              <a href="#"><i class="fa fa-circle-o"></i> Event yang diikuti
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu">
                                  <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Lembaga
                                      <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                      </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{ URL('lem')}}"> LEM </a></li>
                                        <li><a href="{{ URL('dpm')}}"> DPM </a></li>
                                        <li><a href="{{ URL('hm')}}"> HM </a></li>
                                    </ul>
                                  <li class="treeview">
                                          <a href="#"><i class="fa fa-circle-o"></i>Organisasi
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-left pull-right"></i>
                                            </span>
                                          </a>
                                            <ul class="treeview-menu">
                                                <li><a href="{{ URL('uasc')}}"> UASC </a></li>
                                                <li><a href="{{ URL('centris')}}"> CENTRIS </a></li>
                                            </ul>
                                  </li>
                                </li>
                              </ul>
                            </li>
                          </ul>
                    <li>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-share"></i>
                        <span>Dana</span>
                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Lembaga
                                  <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ URL('lem')}}"> LEM </a></li>
                                    <li><a href="{{ URL('dpm')}}"> DPM </a></li>
                                    <li><a href="{{ URL('hm')}}"> HM </a></li>
                                </ul>
                              </li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i>Organisasi
                                  <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                                  </a>
                                  <ul class="treeview-menu">
                                      <li><a href="{{ URL('uasc')}}"> UASC </a></li>
                                      <li><a href="{{ URL('centris')}}"> CENTRIS </a></li>
                                  </ul>
                                </li>
                        </ul>
                      </a>
                    <li>
                        <a href="{{ URL ('#')}}">
                            <i class="fa fa-pie-chart"></i> 
                            <span>Sign-Out</span>
                        </a>
                    </li>
                  </ul>
              </aside>
        
              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                  <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-aqua">
                        <div class="inner">
                          <h3>150</h3>
            
                          <p>New Orders</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-shopping-cart"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                          More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                          <div class="inner">
                            <h3>150</h3>
              
                            <p>New Orders</p>
                          </div>
                          <div class="icon">
                            <i class="fa fa-shopping-cart"></i>
                          </div>
                          <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      </div><div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-aqua">
                            <div class="inner">
                              <h3>150</h3>
                
                              <p>New Orders</p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-shopping-cart"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                              More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div><div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                              <div class="inner">
                                <h3>150</h3>
                  
                                <p>New Orders</p>
                              </div>
                              <div class="icon">
                                <i class="fa fa-shopping-cart"></i>
                              </div>
                              <a href="#" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                              </a>
                            </div>
                          </div>
                @yield('content')
              </div>
        
              <footer class="main-footer">
                <div class="pull-right hidden-xs">
                  <b>Version</b> Beta
                </div>
                <strong>Copyright &copy; 2019 <a href="https://adminlte.io">SIMKIPEMA</a>.</strong> All rights
                reserved.
              </footer>
            </div>
        <!-- ./wrapper -->
        
            <!-- jQuery 3 -->
            <script src="{{ URL ('template1/bower_components/jquery/dist/jquery.min.js') }}"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="{{ URL ('template1/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
            <!-- FastClick -->
            <script src="{{ URL ('template1/bower_components/fastclick/lib/fastclick.js') }}"></script>
            <!-- AdminLTE App -->
            <script src="{{ URL ('template1/dist/js/adminlte.min.js') }}"></script>
            <!-- Sparkline -->
            <script src="{{ URL ('template1/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
            <!-- jvectormap  -->
            <script src="{{ URL ('template1/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
            <script src="{{ URL ('template1/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
            <!-- SlimScroll -->
            <script src="{{ URL ('template1/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
            <!-- ChartJS -->
            <script src="{{ URL ('template1/bower_components/chart.js/Chart.js') }}"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="{{ URL ('template1/dist/js/pages/dashboard2.js') }}"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="{{ URL ('template1/dist/js/demo.js') }}"></script>
     <!-- DataTables -->
     <script src="{{URL ('template1/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
     <script src="{{URL ('template1/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
     
     
     <!-- page script -->
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
