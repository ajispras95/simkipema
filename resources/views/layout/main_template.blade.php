<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="{{ URL('img/go-sponsor.ico') }}" type="image/x-icon">

        @yield('tab-title')

        {{-- Bawaan Template --}}
        <link rel="stylesheet" href="{{ URL('main_template/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL('main_template/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL('main_template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL('main_template/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ URL('main_template/dist/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" href="{{ URL('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
        <link rel="stylesheet" href="{{ URL('plugins/bootstrap-daterangepicker/daterangepicker.css') }}">
        
        {{-- Tambahan --}}
        <link rel="stylesheet" href="{{ URL('css/template.css') }}">
        {{-- <link rel="stylesheet" href="{{ URL('css/halaman_eo/layout.css') }}"> --}}
        <link rel="stylesheet" href="{{ URL('css/components/sweetalert.css') }}">
        <link rel="stylesheet" href="{{ URL('css/components/jquery.fancybox.min.css') }}">
    </head>

    <body class="hold-transition skin-blue layout-top-nav">
        <div class="wrapper">

            <header class="main-header">
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                            <ul class="nav navbar-nav">

                                @if($userLogin->role == 'EO')
                                    <li><a href="{{ URL ('/eo/partner/explore') }}">Partners</a></li>
                                    <li><a href="{{ URL ('/eo/event/me') }}">My Events</a></li>
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

            <script type="text/javascript" src="{{ URL('main_template/bower_components/jquery/dist/jquery.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL('main_template/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL('js/components/fancybox.js') }}"></script>
            <script type="text/javascript" src="{{ URL('js/components/jquery.fancybox.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL('plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL('plugins/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL('plugins/moment/min/moment.min.js') }}"></script>
            <script type="text/javascript" src="{{ URL('plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
            @yield('content')
            
            <footer class="main-footer">
                <div class="container">
                    <div class="pull-right hidden-xs">
                        <b>NIM</b> 14523147
                    </div>
                    @if($userLogin->role == 'EO')
                        <strong><a href="{{ URL('/eo') }}">GOSPONSOR</a>.</strong> M Farras Afif
                    @else
                        <strong><a href="{{ URL('/partner') }}">GOSPONSOR</a>.</strong> M Farras Afif
                    @endif
                </div>
            </footer>
        </div>
        
    {{-- Bawaan Template --}}
    <script src="{{ URL ('main_template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ URL ('main_template/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{ URL ('main_template/dist/js/adminlte.min.js')}}"></script>
    <script src="{{ URL ('main_template/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL ('main_template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

    {{-- Tambahan --}}
    <script src="{{ URL ('js/components/sweetalert.min.js')}}"></script>
    @include('sweet::alert')

    <script>
        function logout(event){
            event.preventDefault();
            document.getElementById('logout-form').submit();
        }
    </script>

    </body>
</html>
