<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Phu kien</title>

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

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop01.jpg" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Bộ sưu tập<br>Phụ kiện tóc</h3>
                            <a href="#" class="cta-btn">Xem ngay <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop03.jpg" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Bộ sưu tập<br>Thú bông & Gối</h3>
                            <a href="#" class="cta-btn">Xem ngay <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop02.jpg" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Bộ sưu tập<br>Túi xách</h3>
                            <a href="#" class="cta-btn">Xem ngay <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Sản phẩm mới</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                <li class="active"><a data-toggle="tab" href="#tab1">Phụ kiện tóc</a></li>
                                <li><a data-toggle="tab" href="##tab2">Phụ kiện thời trang</a></li>
                                <li><a data-toggle="tab" href="#tab3">Gấu bông & gối</a></li>
                                <li><a data-toggle="tab" href="#tab4">Túi xách</a></li>
                            </ul>

                        </div>
                    </div>
                </div>

                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                    @foreach ($list as $item)
                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/{{$item->hinhanh}}" alt="">
                                            <div class="product-label">
                                                <span class="sale">-30%</span>
                                                <span class="Mới">Mới</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Loại sản phẩm nè</p>
                                            <h3 class="product-name"><a href="#">{{$item->tensp}}</a></h3>
                                            <h4 class="product-price">{{number_format($item->giakm,0, "," , ".")}}đ
                                                <del class="product-old-price" style="margin-left: 3px;">{{number_format($item->dongia,0, "," ,  ".")}}đ</del>
                                            </h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp"> Yêu thích</span></button>

                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem trước</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                        </div>
                                    </div>
                                    <!-- /product -->
                                    @endforeach
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                            <div id="tab3" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-3">
                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/product01.jfif" alt="">
                                            <div class="product-label">
                                                <span class="sale">-30%</span>
                                                <span class="Mới">Mới</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Loại sản phẩm nè</p>
                                            <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                            <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp"> Yêu thích</span></button>

                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem trước</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                        </div>
                                    </div>
                                    <!-- /product -->

                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/product02.jfif" alt="">
                                            <div class="product-label">
                                                <span class="Mới">Mới</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Loại sản phẩm nè</p>
                                            <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                            <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp"> Yêu thích</span></button>

                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem trước</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                        </div>
                                    </div>
                                    <!-- /product -->

                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/product03.jfif" alt="">
                                            <div class="product-label">
                                                <span class="sale">-30%</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Loại sản phẩm nè</p>
                                            <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                            <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                            <div class="product-rating">
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp"> Yêu thích</span></button>

                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem trước</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                        </div>
                                    </div>
                                    <!-- /product -->

                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/product04.jfif" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Loại sản phẩm nè</p>
                                            <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                            <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp"> Yêu thích</span></button>

                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem trước</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                        </div>
                                    </div>
                                    <!-- /product -->

                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/product05.jfif" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Loại sản phẩm nè</p>
                                            <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                            <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp"> Yêu thích</span></button>

                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem trước</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                        </div>
                                    </div>
                                    <!-- /product -->
                                </div>
                                <div id="slick-3" class="products-slick-nav"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- HOT DEAL SECTION -->
    <div id="hot-deal" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="hot-deal">
                        <ul class="hot-deal-countdown">
                            <li>
                                <div>
                                    <h3>02</h3>
                                    <span>Days</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>10</h3>
                                    <span>Hours</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>34</h3>
                                    <span>Mins</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>60</h3>
                                    <span>Secs</span>
                                </div>
                            </li>
                        </ul>
                        <h2 class="text-uppercase">Hot sale trong tuần</h2>
                        <p>Bộ sưu tập mới giảm đến 50%</p>
                        <a class="primary-btn cta-btn" href="#">Xem ngay</a>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /HOT DEAL SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Top sản phẩm bán chạy</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                <li class="active"><a data-toggle="tab" href="#tab2">Phụ kiện tóc</a></li>
                                <li><a data-toggle="tab" href="#tab2">Phụ kiện thời trang</a></li>
                                <li><a data-toggle="tab" href="#tab2">Gấu bông & gối</a></li>
                                <li><a data-toggle="tab" href="#tab2">Túi xách</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab2" class="tab-pane fade in active">
                                <div class="products-slick" data-nav="#slick-nav-2">
                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/product06.jfif" alt="">
                                            <div class="product-label">
                                                <span class="sale">-30%</span>
                                                <span class="Mới">Mới</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Loại sản phẩm nè</p>
                                            <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                            <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp"> Yêu thích</span></button>

                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem trước</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                        </div>
                                    </div>
                                    <!-- /product -->

                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/product07.jfif" alt="">
                                            <div class="product-label">
                                                <span class="Mới">Mới</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Loại sản phẩm nè</p>
                                            <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                            <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp"> Yêu thích</span></button>

                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem trước</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                        </div>
                                    </div>
                                    <!-- /product -->

                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/product08.jfif" alt="">
                                            <div class="product-label">
                                                <span class="sale">-30%</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Loại sản phẩm nè</p>
                                            <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                            <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                            <div class="product-rating">
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp"> Yêu thích</span></button>

                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem trước</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                        </div>
                                    </div>
                                    <!-- /product -->

                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/product09.jfif" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Loại sản phẩm nè</p>
                                            <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                            <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp"> Yêu thích</span></button>

                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem trước</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                        </div>
                                    </div>
                                    <!-- /product -->

                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/product01.jfif" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Loại sản phẩm nè</p>
                                            <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                            <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp"> Yêu thích</span></button>

                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem trước</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                        </div>
                                    </div>
                                    <!-- /product -->
                                </div>
                                <div id="slick-nav-2" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- /Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <div class="section-title">
                        <h4 class="title">Top sản phẩm bán chạy</h4>
                        <div class="section-nav">
                            <div id="slick-nav-3" class="products-slick-nav"></div>
                        </div>
                    </div>

                    <div class="products-widget-slick" data-nav="#slick-nav-3">
                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product07.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product08.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product09.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>

                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product01.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product02.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product03.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-6">
                    <div class="section-title">
                        <h4 class="title">Top sản phẩm bán chạy</h4>
                        <div class="section-nav">
                            <div id="slick-nav-4" class="products-slick-nav"></div>
                        </div>
                    </div>

                    <div class="products-widget-slick" data-nav="#slick-nav-4">
                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product04.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product05.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product06.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>

                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product07.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product08.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product09.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>
                    </div>
                </div>

                <div class="clearfix visible-sm visible-xs"></div>

                <div class="col-md-4 col-xs-6">
                    <div class="section-title">
                        <h4 class="title">Top sản phẩm bán chạy</h4>
                        <div class="section-nav">
                            <div id="slick-nav-5" class="products-slick-nav"></div>
                        </div>
                    </div>

                    <div class="products-widget-slick" data-nav="#slick-nav-5">
                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product01.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product02.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product03.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>

                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product04.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product05.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/product06.jfif" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Loại sản phẩm nè</p>
                                    <h3 class="product-name"><a href="#">tên sản phẩm nè</a></h3>
                                    <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>
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