<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'My Test') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    {{-- <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">


</head>
<body>
  <div>
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="index.html" class="site_title">Gentelella Alela!</a>
            </div>

            <div class="profile"><!--img_2 -->
                <div class="profile_pic">
                    <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Welcome,</span>
                    <h2>Anthony Mutisya</h2>
                </div>
            </div>

            <br>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                        <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="index.html">Dashboard</a></li>
                                <li><a href="index2.html">Dashboard2</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="form.html">General Form</a></li>
                                <li><a href="form_advanced.html">Advanced Components</a></li>
                                <li><a href="form_validation.html">Form Validation</a></li>
                                <li><a href="form_wizards.html">Form Wizard</a></li>
                                <li><a href="form_upload.html">Form Upload</a></li>
                                <li><a href="form_buttons.html">Form Buttons</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="general_elements.html">General Elements</a></li>
                                <li><a href="media_gallery.html">Media Gallery</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="glyphicons.html">Glyphicons</a></li>
                                <li><a href="widgets.html">Widgets</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="inbox.html">Inbox</a></li>
                                <li><a href="calendar.html">Calendar</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="tables.html">Tables</a></li>
                                <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="chartjs.html">Chart JS</a></li>
                                <li><a href="chartjs2.html">Chart JS2</a></li>
                                <li><a href="morisjs.html">Moris JS</a></li>
                                <li><a href="echarts.html">ECharts </a></li>
                                <li><a href="other_charts.html">Other Charts </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="menu_section">
                    <h3>Live On</h3>
                    <ul class="nav side-menu">
                        <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="e_commerce.html">E-commerce</a></li>
                                <li><a href="e_commerce_backend.html">E-commerce Backend</a></li>
                                <li><a href="projects.html">Projects</a></li>
                                <li><a href="project_detail.html">Project Detail</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="real_estate.html">Real Estate</a></li>

                            </ul>
                        </li>
                        <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="page_404.html">404 Error</a></li>
                                <li><a href="page_500.html">500 Error</a></li>
                                <li><a href="coming_soon.html">Coming Soon</a></li>
                                <li><a href="plain_page.html">Plain Page</a></li>
                                <li><a href="login.html">Login Page</a></li>
                                <li><a href="sign_up.html">SignUp Page</a></li>
                                <li><a href="pricing_tables.html">Pricing Tables</a></li>

                            </ul>
                        </li>
                        <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                    </ul>
                </div>

            </div>

            <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Settings">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Logout">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
            </div>
        </div>
      </div>

      <div class="right_col" role="main">
            @yield('section')
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- Custom Theme Scripts -->
  <script src="{{ asset('js/custom.min.js') }}"></script>


</body>
</html>
