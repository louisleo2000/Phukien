@extends('layouts.app')
@section('content')

<div>

    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="">Home</a></li>
                        <li><a href="">{{$loaisp->name}}</a></li>

                        <!-- <li class="active">Tên sản phẩm</li> -->
                    </ul>
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
                <!-- Product main img -->
                <div class="col-md-6 ">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="{{$product->img}}" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <!-- <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="{{$product->img}}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{$product->img}}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{$product->img}}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{$product->img}}" alt="">
                        </div>
                    </div>
                </div> -->
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-6">
                    <div class="product-details">
                        <h2 class="product-name">{{$product->name}}</h2>
                        <div>
                            <div class="product-rating">
                                <span>{{number_format($product->rating,1)}}</span>
                                {{ratingStar($product->rating)}}
                            </div>
                            <a class="review-link" href="#">10 Đánh giá</a>
                        </div>
                        <div>
                            <h3 class="product-price">{{number_format($product->promo_price,0, "," , ".")}}đ <del class="product-old-price">{{number_format($product->unit_price,0, "," , ".")}}đ</del></h3>
                            <span class="product-available">In Stock</span>
                        </div>

                        <form id="myform" method="post">
                            @csrf
                            <div class="product-options">

                                <label>
                                    Màu sắc
                                    <select class="input-select" style="font-size:16px;" name="color">
                                        @foreach($mausac as $mau)
                                        <option value="{{$mau}}">{{$mau}}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>

                            <div class="add-to-cart">
                                <div class="qty-label">
                                    Số lượng
                                    <div class="input-number">
                                        <input type="number" value="1" min="1" name="quantity">
                                        <span class="qty-up">+</span>
                                        <span class="qty-down">-</span>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <div class="add-to-cart">
                            <button onclick="add2Cart(<?php echo ($product->id) ?>)" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                        </div>
                        <ul class="product-btns">
                            <li><a href="#"><i class="fa fa-heart-o"></i> Yêu thích</a></li>

                        </ul>

                        <ul class="product-links">
                            <li>Thể loại:</li>
                            <li><a href="#">{{$product->productTypes->name}}</a></li>
                            <li><a href="#">Gấu bông</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Chia sẻ:</li>
                            <li><a href="#"><i class="fab fa-facebook-square "></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                        </ul>

                    </div>
                </div>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class="col-md-12">
                    <div id="product-tab">
                        <!-- product tab nav -->
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Mô tả</a></li>
                            <!-- <li><a data-toggle="tab" href="#tab2">Chi tiết</a></li> -->
                            <li><a data-toggle="tab" href="#tab3">Đánh giá (3)</a></li>
                        </ul>
                        <!-- /product tab nav -->

                        <!-- product tab content -->
                        <div class="tab-content">
                            <!-- tab1  -->
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        {!! $product->descrip!!}
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1  -->

                            <!-- tab2  -->
                            <!-- <div id="tab2" class="tab-pane fade in">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Trần đời này có bao nhiêu sự cute hình như đều được đặt hết vào team quả bơ này rùi í các cậu ạ, tất thảy mọi đồ dùng mà có thêm hình những em bơ chinh chinh nhỏ nhắn này là muốn ôm hết về nhà lun. Cùng đắm chìm trong màu xanh xanh cute thích mê này nào các cậu </p>
                                    </div>
                                </div>
                            </div> -->
                            <!-- /tab2  -->

                            <!-- tab3  -->
                            <div id="tab3" class="tab-pane fade in">
                                <div class="row">
                                    <!-- Rating -->
                                    <div class="col-md-3">
                                        <div id="rating">
                                            <div class="rating-avg">
                                                <span>{{number_format($product->rating,1)}}</span>

                                                <div class="rating-stars">
                                                    {{ratingStar($product->rating)}}
                                                    <!-- <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fas fa-star-half-alt"></i> -->
                                                </div>
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div style="width: 80%;"></div>
                                                    </div>
                                                    <span class="sum">3</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div style="width: 60%;"></div>
                                                    </div>
                                                    <span class="sum">2</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Rating -->

                                    <!-- Reviews -->
                                    <div class="col-md-6">
                                        <div id="reviews">
                                            <ul class="reviews">
                                                <li>
                                                    <div class="review-heading">
                                                        <h5 class="name">John</h5>
                                                        <p class="date">27 DEC 2018, 8:0 PM</p>
                                                        <div class="review-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="review-heading">
                                                        <h5 class="name">John</h5>
                                                        <p class="date">27 DEC 2018, 8:0 PM</p>
                                                        <div class="review-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="review-heading">
                                                        <h5 class="name">John</h5>
                                                        <p class="date">27 DEC 2018, 8:0 PM</p>
                                                        <div class="review-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="reviews-pagination">
                                                <li class="active">1</li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Reviews -->

                                    <!-- Review Form -->
                                    <div class="col-md-3">
                                        <div id="review-form">
                                            <form class="review-form">
                                                <input class="input" type="text" placeholder="Họ và Tên">
                                                <input class="input" type="email" placeholder="Email">
                                                <textarea class="input" placeholder="Đánh giá của bạn"></textarea>
                                                <div class="input-rating">
                                                    <span>Xếp hạng của bạn: </span>
                                                    <div class="stars">
                                                        <input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
                                                        <input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
                                                        <input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
                                                        <input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
                                                        <input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
                                                    </div>
                                                </div>
                                                <button class="primary-btn">Gửi đánh giá</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /Review Form -->
                                </div>
                            </div>
                            <!-- /tab3  -->
                        </div>
                        <!-- /product tab content  -->
                    </div>
                </div>
                <!-- /product tab -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- Section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="title">Sản phẩm tương tự</h3>
                    </div>
                </div>

                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ URL::asset('./img/product01.jfif')}}" alt="">
                            <div class="product-label">
                                <span class="sale">-30%</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <p class="product-category">Loại sản phẩm</p>
                            <h3 class="product-name"><a href="#">tên sản phẩm ở đây</a></h3>
                            <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Yêu thích</span></button>

                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem trước</span></button>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>
                <!-- /product -->

                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ URL::asset('./img/product02.jfif')}}" alt="">
                            <div class="product-label">
                                <span class="new">Mới</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <p class="product-category">Loại sản phẩm</p>
                            <h3 class="product-name"><a href="#">tên sản phẩm ở đây</a></h3>
                            <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-btns">
                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Yêu thích</span></button>

                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem trước</span></button>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>
                <!-- /product -->

                <div class="clearfix visible-sm visible-xs"></div>

                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ URL::asset('./img/product03.jfif')}}" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Loại sản phẩm</p>
                            <h3 class="product-name"><a href="#">tên sản phẩm ở đây</a></h3>
                            <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="product-btns">
                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Yêu thích</span></button>

                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem trước</span></button>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>
                <!-- /product -->

                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ URL::asset('./img/product04.jfif')}}" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Loại sản phẩm</p>
                            <h3 class="product-name"><a href="#">tên sản phẩm ở đây</a></h3>
                            <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Yêu thích</span></button>

                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem trước</span></button>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>
                <!-- /product -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Section -->

</div>
@endsection