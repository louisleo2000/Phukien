<!DOCTYPE html>

<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="backend/css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="backend/css/style.css" rel='stylesheet' type='text/css' />
    <link href="backend/css/style-responsive.css" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="backend/css/font.css" type="text/css" />
    <link href="backend/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>
</head>

<body>
    <div class="log-w3">
        @if(Session::get('loi'))
        <div class="alert alert-danger">
            <strong>{{Session::get('loi')}}</strong>
        </div>
        @endif
        <div class="w3layouts-main">
            <h2>Đăng nhập</h2>

            <form action="dashboard" method="post">
                @csrf
                <input type="email" class="ggg" name="admin_email" placeholder="E-MAIL" required="">
                <input type="password" class="ggg" name="admin_password" placeholder="PASSWORD" required="">
                <span><input type="checkbox" />Nhớ đang nhập</span>
                <h6><a href="#">Quên mật khẩu?</a></h6>
                <div class="clearfix"></div>
                <input type="submit" value="Đăng nhập" name="login">
            </form>
            <p>Bạn chưa có tài khoản ?<a href="registration.html">Tạo tài khoản</a></p>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="js/jquery.scrollTo.js"></script>
</body>

</html>