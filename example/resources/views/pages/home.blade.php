@extends('layouts.app')
@section('content')

<div>

    <div class="row p-0" style="max-width: 100%;">
        <div class="col-9 p-0">

            <div id="carouselExampleIndicators" data-interval="3000" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <img class="d-block w-100" src="https://storage.googleapis.com/cdn.nhanh.vn/store/7534/bn/SG_Banner_web_doigiomocua.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://storage.googleapis.com/cdn.nhanh.vn/store/7534/bn/sb_1612181109_394.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://storage.googleapis.com/cdn.nhanh.vn/store/7534/bn/Banner_tet_Nham_Dan.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

        <div class="col-3 p-0">
            <div>
                <img src="https://storage.googleapis.com/cdn.nhanh.vn/store/7534/bn/BTS_Web.png" style="width: 98%; margin-left: 22px; " alt="">
            </div>
            <div style=" margin-top: 11px;">
                <img src="https://storage.googleapis.com/cdn.nhanh.vn/store/7534/bn/3_Banner_Web.jpg" style="width: 98%;margin-left: 22px;" alt="">
            </div>
        </div>
    </div>

    <!-- SAN PHAM MOI -->
    <div class="container p-0">
        <!-- section title -->

        <div class="section-title">
            <h3 class="title">Sản phẩm mới</h3>
            <div class="section-nav">
                <ul class="section-tab-nav tab-nav">
                    <li class="active"><a data-toggle="tab" href="#tab1">Phụ kiện tóc</a></li>
                    <li><a data-toggle="tab" href="#tab2">Phụ kiện trang sức</a></li>
                    <!-- <li><a data-toggle="tab" href="#tab3">Trang sức</a></li> -->

                </ul>

            </div>
        </div>

        <!-- /section title -->
        @if($dm1 !=null && $dm2!=null)
        <!-- Products tab & slick -->
        <div class="col p-0">

            <div class="products-tabs p-0">
                <!-- tab1 -->
                <div id="tab1" class="active tab-pane ">
                    <div class="products-slick" data-nav="#slick-nav-1">
                        @foreach ($dm1 as $DM)
                        @foreach ($DM->products as $item)
                        <!-- product -->
                        <div class="product">
                            <a href="{{URL::to('/product-details/'.$item->id)}}">
                                <div class="product-img">
                                    <img src="{{$item->img}}" alt="">
                                    <div class="product-label">
                                        <span class="sale">{{$km = round(100-($item->unit_price/$item->promo_price*100))  }}%</span>
                                        <span class="Mới">Mới</span>
                                    </div>
                                </div>
                                <div class="product-body">

                                    <h3 class="product-name"><a href="{{URL::to('/product-details/'.$item->id)}}">{{mb_strimwidth($item->name, 0, 30, "...");}}</a></h3>
                                    <h4 class="product-price">{{number_format($item->promo_price,0, "," , ".")}}đ
                                        <del class="product-old-price" style="margin-left: 3px;">{{number_format($item->unit_price,0, "," ,  ".")}}đ</del>
                                    </h4>
                                    <div class="product-rating">
                                        {{ratingStar($item->rating)}}

                                    </div>
                                    <div>
                                        <div class="add-to-cart">
                                            <button onclick="viewDetails(<?php echo ($item->id) ?>)" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                        </div>
                                    </div>


                                </div>
                                <br><br>

                            </a>
                        </div>
                        <!-- /product -->
                        @endforeach
                        @endforeach
                    </div>
                    <div id="slick-nav-1" class="products-slick-nav"></div>
                </div>
                <!-- /tab2 -->
                <div id="tab2" class="tab-pane">
                    <div class="products-slick" data-nav="#slick-2">
                        @foreach ($dm2 as $DM)
                        @foreach ($DM->products as $item)
                        <!-- product -->
                        <div class="product">
                            <a href="{{URL::to('/product-details/'.$item->id)}}">
                                <div class="product-img">
                                    <img src="{{$item->img}}" alt="">
                                    <div class="product-label">
                                        <span class="sale">{{$km = round(100-($item->unit_price/$item->promo_price*100))  }}%</span>
                                        <span class="Mới">Mới</span>
                                    </div>
                                </div>
                                <div class="product-body">

                                    <h3 class="product-name"><a href="{{URL::to('/product-details/'.$item->id)}}">{{mb_strimwidth($item->name, 0, 30, "...");}}</a></h3>
                                    <h4 class="product-price">{{number_format($item->promo_price,0, "," , ".")}}đ
                                        <del class="product-old-price" style="margin-left: 3px;">{{number_format($item->unit_price,0, "," ,  ".")}}đ</del>
                                    </h4>
                                    <div class="product-rating">
                                        {{ratingStar($item->rating)}}

                                    </div>
                                    <div>
                                        <div class="add-to-cart">
                                            <button onclick="viewDetails(<?php echo ($item->id) ?>)" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                        </div>
                                    </div>


                                </div>
                                <br><br>

                            </a>
                        </div>
                        <!-- /product -->
                        @endforeach
                        @endforeach
                    </div>
                    <div id="slick-2" class="products-slick-nav"></div>
                </div>

            </div>

        </div>
        @endif
    </div>

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
    <!-- container -->
    <div class="container p-0">
        <!-- section title -->
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
        <!-- /section title -->
        <!-- Products tab & slick -->
        <div class="col p-0">
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
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                </div>
                            </div>
                            <br><br>
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
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                </div>
                            </div>
                            <br><br>
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
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                </div>
                            </div>
                            <br><br>
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
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                </div>
                            </div>
                            <br><br>
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
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                </div>
                            </div>
                            <br><br>
                        </div>
                        <!-- /product -->
                    </div>
                    <div id="slick-nav-2" class="products-slick-nav"></div>
                </div>
                <!-- /tab -->
            </div>

        </div>
        <!-- /Products tab & slick -->

        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->



</div>
<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->

    @include('layouts.modal-product')
</div>


@endsection
