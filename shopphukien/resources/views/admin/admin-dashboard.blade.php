<!DOCTYPE html>

<head>
    <title>DashBoard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- bootstrap-css -->
    <link rel="stylesheet" href="backend/css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="backend/css/style.css" rel='stylesheet' type='text/css' />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel='stylesheet' type='text/css' />
    <link href="backend/css/style-responsive.css" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="backend/css/font.css" type="text/css" />
    <link href="backend/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="backend/css/morris.css" type="text/css" />

    <!-- //font-awesome icons -->
    <script src="backend/js/jquery2.0.3.min.js"></script>
    <script src="backend/js/raphael-min.js"></script>
    <script src="backend/js/morris.js"></script>
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">
                    Admin
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->

            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fas fa-user-circle fa-lg"></i>
                            <span class="username">{{Session::get('admin_name')}}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Thông tin người dùng</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Cài đặt</a></li>
                            <li><a href="logout"><i class="fa fa-key"></i> Đăng suất</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Quản lý sản phẩm</span>
                            </a>
                            <ul class="sub">
                                <li><a href="addproduct">Thêm sản phẩm</a></li>
                                <li><a href="addproduct-type">Thêm loại sản phẩm</a></li>
                                <li><a href="grids.html">Grids</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="fontawesome.html">
                                <i class="fa fa-bullhorn"></i>
                                <span>Font awesome </span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-th"></i>
                                <span>Data Tables</span>
                            </a>
                            <ul class="sub">
                                <li><a href="basic_table.html">Basic Table</a></li>
                                <li><a href="responsive_table.html">Responsive Table</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-tasks"></i>
                                <span>Form Components</span>
                            </a>
                            <ul class="sub">
                                <li><a href="form_component.html">Form Elements</a></li>
                                <li><a href="form_validation.html">Form Validation</a></li>
                                <li><a href="dropzone.html">Dropzone</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                @yield('admin_content')
            </section>
            <!-- footer -->
            <div class="footer">
                <div class="wthree-copyright">
                    <p>©Phukienthoitrang</a></p>
                </div>
            </div>
            <!-- / footer -->
        </section>
        <!--main content end-->
    </section>
    <script src="backend/js/bootstrap.js"></script>
    <script src="backend/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="backend/js/scripts.js"></script>
    <script src="backend/js/jquery.slimscroll.js"></script>
    <script src="backend/js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="backend/js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="backend/js/jquery.scrollTo.js"></script>
    <!-- morris JavaScript -->


</body>

</html>