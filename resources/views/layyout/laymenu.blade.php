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

        <link rel="stylesheet" href="{{ ('css/layout.css') }}">

  </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="layout.blade.php" class="logo">
                    <span class="logo-mini"><b>U</b>II</span>
                    <span class="logo-lg"><b>MKL</b>UII</span>
                </a>
                {{-- <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
                </nav> --}}
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
                    {{-- <li class="active treeview menu-open">
                      <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                         <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                        <ul class="treeview-menu">
                            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                        </ul>
                    </li> --}}
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Dokumentasi</span>
                        {{-- <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span> --}}
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="{{ URL ('menu/laymenu/LEM')}}"><i class="fa fa-circle-o"></i> LEM (Lembaga Eksekutif Mahasiswa)</a></li>
                        <li><a href="{{ URL ('Menu/DPM')}}"><i class="fa fa-circle-o"></i> DPM (Dewan Perwakilan Mahasiswa)</a></li>
                        <li><a href="{{ URL ('Menu/HM')}}"><i class="fa fa-circle-o"></i> HM (Himpunan Mahasiswa)</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="{{ URL ('/pencapaian')}}">
                        <i class="fa fa-pie-chart"></i> 
                        <span>Pencapaian</span>
                        
                        {{-- <span class="pull-right-container">
                          <small class="label pull-right bg-green">new</small>
                        </span> --}}
                      </a>
                    </li>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-calendar"></i>
                        <span>event</span>
                        {{-- <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span> --}}
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> LEM (Lembaga Eksekutif Mahasiswa)</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> DPM (Dewan Perwakilan Mahasiswa)</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> HM (Himpunan Mahasiswa)</a></li>
                      </ul>
                    </li>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-share"></i>
                        <span>Dana</span>
                        {{-- <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span> --}}
                      </a>
                      <ul class="treeview-menu" >
                        <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> LEM (Lembaga Eksekutif Mahasiswa)</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> DPM (Dewan Perwakilan Mahasiswa)</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> HM (Himpunan Mahasiswa)</a></li>
                      </ul>
                    </li>
                    <li>
                        <a href="{{ URL ('#')}}">
                            <i class="fa fa-pie-chart"></i> 
                            <span>Sign-Out</span>
                        </a>
                    </li>
                    <!-- <li class="treeview">
                      <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>UI Elements</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                        <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                        <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                        <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                        <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                        <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                      </ul>
                    </li> -->
                    <!-- <li class="treeview">
                      <a href="#">
                        <i class="fa fa-edit"></i> <span>Forms</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                        <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                        <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                      </ul>
                    </li>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-table"></i> <span>Tables</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                        <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="pages/calendar.html">
                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                        <span class="pull-right-container">
                          <small class="label pull-right bg-red">3</small>
                          <small class="label pull-right bg-blue">17</small>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="pages/mailbox/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        <span class="pull-right-container">
                          <small class="label pull-right bg-yellow">12</small>
                          <small class="label pull-right bg-green">16</small>
                          <small class="label pull-right bg-red">5</small>
                        </span>
                      </a>
                    </li>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-folder"></i> <span>Examples</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                        <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                        <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                        <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                        <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                        <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                        <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                        <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                        <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                      </ul>
                    </li>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-share"></i> <span>Multilevel</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                        <li class="treeview">
                          <a href="#"><i class="fa fa-circle-o"></i> Level One
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li class="treeview">
                              <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                      </ul>
                    </li>
                    <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                    <li class="header">LABELS</li>
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                  </ul> -->
                </section>
                <!-- /.sidebar -->
              </aside>
        
              <!-- Content Wrapper. Contains page content -->
              <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                {{-- <section class="content-header">
                  <h1>
                    Dashboard
                    <small>Beta</small>
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                  </ol>
                </section> --}}
        
                <!-- Main content -->
                <section class="content">
                  <!-- Info boxes -->
                  <!-- /.footer -->
                      </div>
                      <!-- /.box -->
        
                      <!-- PRODUCT LIST -->
                      <!-- <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Recently Added Products</h3>
        
                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                          </div>
                        </div> -->
                        <!-- /.box-header -->
                        <!-- <div class="box-body">
                          <ul class="products-list product-list-in-box">
                            <li class="item">
                              <div class="product-img">
                                <img src="dist/img/default-50x50.gif" alt="Product Image">
                              </div>
                              <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Samsung TV
                                  <span class="label label-warning pull-right">$1800</span></a>
                                <span class="product-description">
                                      Samsung 32" 1080p 60Hz LED Smart HDTV.
                                    </span>
                              </div>
                            </li> -->
                            <!-- /.item -->
                            <!-- <li class="item">
                              <div class="product-img">
                                <img src="dist/img/default-50x50.gif" alt="Product Image">
                              </div>
                              <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Bicycle
                                  <span class="label label-info pull-right">$700</span></a>
                                <span class="product-description">
                                      26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                                    </span>
                              </div>
                            </li> -->
                            <!-- /.item -->
                            <!-- <li class="item">
                              <div class="product-img">
                                <img src="dist/img/default-50x50.gif" alt="Product Image">
                              </div>
                              <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Xbox One <span
                                    class="label label-danger pull-right">$350</span></a>
                                <span class="product-description">
                                      Xbox One Console Bundle with Halo Master Chief Collection.
                                    </span>
                              </div>
                            </li> -->
                            <!-- /.item -->
                            <!-- <li class="item">
                              <div class="product-img">
                                <img src="dist/img/default-50x50.gif" alt="Product Image">
                              </div>
                              <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">PlayStation 4
                                  <span class="label label-success pull-right">$399</span></a>
                                <span class="product-description">
                                      PlayStation 4 500GB Console (PS4)
                                    </span>
                              </div>
                            </li> -->
                            <!-- /.item -->
                          <!-- </ul>
                        </div> -->
                        <!-- /.box-body -->
                        <!-- <div class="box-footer text-center">
                          <a href="javascript:void(0)" class="uppercase">View All Products</a>
                        </div> -->
                        <!-- /.box-footer -->
                      </div>
                      <!-- /.box -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->
        
              <footer class="main-footer">
                <div class="pull-right hidden-xs">
                  <b>Version</b> Beta
                </div>
                <strong>Copyright &copy; 2019 <a href="https://adminlte.io">Monitoring Lembaga UII</a>.</strong> All rights
                reserved.
              </footer>
        
              <!-- Control Sidebar -->
              <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                  <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                  <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <!-- Home tab content -->
                  <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                      <li>
                        <a href="javascript:void(0)">
                          <i class="menu-icon fa fa-birthday-cake bg-red"></i>
        
                          <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
        
                            <p>Will be 23 on April 24th</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <i class="menu-icon fa fa-user bg-yellow"></i>
        
                          <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
        
                            <p>New phone +1(800)555-1234</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
        
                          <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
        
                            <p>nora@example.com</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <i class="menu-icon fa fa-file-code-o bg-green"></i>
        
                          <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
        
                            <p>Execution time 5 seconds</p>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->
        
                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                      <li>
                        <a href="javascript:void(0)">
                          <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="label label-danger pull-right">70%</span>
                          </h4>
        
                          <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <h4 class="control-sidebar-subheading">
                            Update Resume
                            <span class="label label-success pull-right">95%</span>
                          </h4>
        
                          <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <h4 class="control-sidebar-subheading">
                            Laravel Integration
                            <span class="label label-warning pull-right">50%</span>
                          </h4>
        
                          <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <h4 class="control-sidebar-subheading">
                            Back End Framework
                            <span class="label label-primary pull-right">68%</span>
                          </h4>
        
                          <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->
        
                  </div>
                  <!-- /.tab-pane -->
        
                  <!-- Settings tab content -->
                  <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                      <h3 class="control-sidebar-heading">General Settings</h3>
        
                      <div class="form-group">
                        <label class="control-sidebar-subheading">
                          Report panel usage
                          <input type="checkbox" class="pull-right" checked>
                        </label>
        
                        <p>
                          Some information about this general settings option
                        </p>
                      </div>
                      <!-- /.form-group -->
        
                      <div class="form-group">
                        <label class="control-sidebar-subheading">
                          Allow mail redirect
                          <input type="checkbox" class="pull-right" checked>
                        </label>
        
                        <p>
                          Other sets of options are available
                        </p>
                      </div>
                      <!-- /.form-group -->
        
                      <div class="form-group">
                        <label class="control-sidebar-subheading">
                          Expose author name in posts
                          <input type="checkbox" class="pull-right" checked>
                        </label>
        
                        <p>
                          Allow the user to show his name in blog posts
                        </p>
                      </div>
                      <!-- /.form-group -->
        
                      <h3 class="control-sidebar-heading">Chat Settings</h3>
        
                      <div class="form-group">
                        <label class="control-sidebar-subheading">
                          Show me as online
                          <input type="checkbox" class="pull-right" checked>
                        </label>
                      </div>
                      <!-- /.form-group -->
        
                      <div class="form-group">
                        <label class="control-sidebar-subheading">
                          Turn off notifications
                          <input type="checkbox" class="pull-right">
                        </label>
                      </div>
                      <!-- /.form-group -->
        
                      <div class="form-group">
                        <label class="control-sidebar-subheading">
                          Delete chat history
                          <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                      </div>
                      <!-- /.form-group -->
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
              </aside>
              <!-- /.control-sidebar -->
              <!-- Add the sidebar's background. This div must be placed
                  immediately after the control sidebar -->
              <div class="control-sidebar-bg"></div>
        
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
        </body>
</html>
