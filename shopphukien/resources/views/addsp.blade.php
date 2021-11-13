<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Phụ kiện</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    @include('header')

    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Thêm sản phẩm</h3>

                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-7">
                    @if(Session::get('thanhcong'))
                    <div class="alert alert-success">
                        <strong>{{Session::get('thanhcong')}}</strong>
                    </div>
                    @endif
                    @if(Session::get('loi'))
                    <div class="alert alert-danger">
                        <strong>{{Session::get('loi')}}</strong>
                    </div>
                    @endif
                    <!-- Billing Details -->
                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">Thông tin sản phẩm</h3>
                        </div>

                        <form action="addsp" method="post">
                            @csrf
                            <div class="form-group">
                                <input class="input" type="text" maxlength="8" name="masp" placeholder="Mã sản phẩm" value="{{old('masp')}}">
                                <span style="color: red;">@error('masp'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <input class="input" type="text" maxlength="8" name="malsp" placeholder="Mã loại sp" value="{{old('malsp')}}">
                                    <span style="color: red;">@error('malsp'){{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="tensp" placeholder="Tên sản phẩm" value="{{old('tensp')}}">
                                    <span style="color: red;">@error('tensp'){{$message}} @enderror</span>
                                </div>
                                <input class="input" type="text" name="mota" placeholder="Mô tả sp" value="{{old('mota')}}">
                                <span style="color: red;">@error('mota'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="hinhanh" placeholder="Hình ảnh" value="{{old('hinhanh')}}">
                                <span style="color: red;">@error('hinhanh'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="dvt" placeholder="Đơn vị tính" value="{{old('dvt')}}">
                                <span style="color: red;">@error('dvt'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <input class="input" type="number" name="dongia" placeholder="Đơn giá" value="{{old('dongia')}}">
                                <span style="color: red;">@error('dongia'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <input class="input" type="number" name="giakm" placeholder="giá khuyển mãi" value="{{old('giakm')}}">
                                <span style="color: red;">@error('giakm'){{$message}} @enderror</span>
                            </div>


                            <!-- /Billing Details -->
                            <!-- Order notes -->
                            <div class="order-notes">
                                <textarea class="input" placeholder="Ghi chú"></textarea>
                            </div>
                            <!-- /Order notes -->
                            <button type="submit" class="primary-btn order-submit">Thêm sản phẩm</button>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
</body>
@include('footer')

</html>