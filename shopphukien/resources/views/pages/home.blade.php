<!DOCTYPE html>
<html lang="en">

@include('header')

<body>

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
                            <h3>Bộ sưu tập<br>Phụ kiện thời trang</h3>
                            <a href="#" class="cta-btn">Xem ngay <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="https://storage.googleapis.com/cdn.nhanh.vn/store/7534/albumCT/9007/biaitb.jpg" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Bộ sưu tập<br>Trang sức</h3>
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
                                <li><a data-toggle="tab" href="#tab3">Trang sức</a></li>

                            </ul>

                        </div>
                    </div>
                </div>

                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab1 -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                    @foreach ($listproducts as $item)
                                    @if($item->maloaisp == 'LSP00001' ||$item->maloaisp == 'LSP00002' || $item->maloaisp == 'LSP00003')
                                    <!-- product -->
                                    <div class="product">
                                        <a href="{{URL::to('/product-details/'.$item->masp)}}">
                                            <div class="product-img">
                                                <img src="{{$item->hinhanh}}" alt="">
                                                <div class="product-label">
                                                    <span class="sale">{{$km = round(100-($item->dongia/$item->giakm*100))  }}%</span>
                                                    <span class="Mới">Mới</span>
                                                </div>
                                            </div>
                                            <div class="product-body">

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
                                        </a>
                                    </div>
                                    @endif
                                    <!-- /product -->
                                    @endforeach
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab2 -->
                            <div id="tab2" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-2">
                                    @foreach ($listproducts as $item)
                                    @if( $item->maloaisp == 'LSP00005'|| $item->maloaisp == 'LSP00006')
                                    <!-- product -->
                                    <div class="product">
                                        <a href="{{URL::to('/product-details/'.$item->masp)}}">
                                            <div class="product-img">
                                                <img src="{{$item->hinhanh}}" alt="">
                                                <div class="product-label">
                                                    <span class="sale">{{$km = round(100-($item->dongia/$item->giakm*100))  }}%</span>
                                                    <span class="Mới">Mới</span>
                                                </div>
                                            </div>
                                            <div class="product-body">

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
                                        </a>
                                    </div>
                                    @endif
                                    <!-- /product -->
                                    @endforeach
                                </div>
                                <div id="slick-2" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab3 -->
                            <div id="tab3" class="tab-pane">
                                <div class="products-slick" data-nav="#slick-3">
                                    @foreach ($listproducts as $item)
                                    @if($item->maloaisp == 'LSP00004')
                                    <!-- product -->
                                    <div class="product">
                                        <a href="{{URL::to('/product-details/'.$item->masp)}}">
                                            <div class="product-img">
                                                <img src="{{$item->hinhanh}}" alt="">
                                                <div class="product-label">
                                                    <span class="sale">{{$km = round(100-($item->dongia/$item->giakm*100))  }}%</span>
                                                    <span class="Mới">Mới</span>
                                                </div>
                                            </div>
                                            <div class="product-body">

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
                                        </a>
                                    </div>
                                    @endif
                                    <!-- /product -->
                                    @endforeach
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