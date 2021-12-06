<!DOCTYPE html>
<html lang="en">


@include('header')

<body>




    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Tất cả sản phẩm</a></li>
                        <li><a href="#">Phụ kiện</a></li>
                        <li class="active">Phụ kiện thời trang ({{$listproducts->total()}} sản phẩm)</li>
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
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Thể loại</h3>
                        <div class="checkbox-filter">

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-1">
                                <label for="category-1">
                                    <span></span>
                                    Phụ kiện tóc
                                    <small>(120)</small>
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-2">
                                <label for="category-2">
                                    <span></span>
                                    Phụ kiện thời trang
                                    <small>({{$listproducts->total()}})</small>
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-3">
                                <label for="category-3">
                                    <span></span>
                                    Gấu bông & gối
                                    <small>(1450)</small>
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-4">
                                <label for="category-4">
                                    <span></span>
                                    Túi xách
                                    <small>(578)</small>
                                </label>
                            </div>

                            <!-- <div class="input-checkbox">
                                <input type="checkbox" id="category-5">
                                <label for="category-5">
                                    <span></span>
                                    Laptops
                                    <small>(120)</small>
                                </label>
                            </div> -->

                            <!-- <div class="input-checkbox">
                                <input type="checkbox" id="category-6">
                                <label for="category-6">
                                    <span></span>
                                    Smartphones
                                    <small>(740)</small>
                                </label>
                            </div> -->
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Giá</h3>
                        <div class="price-filter">
                            <div id="price-slider"></div>
                            <div class="input-number price-min">
                                <input id="price-min" type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                            <span>-</span>
                            <div class="input-number price-max">
                                <input id="price-max" type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <!-- <div class="aside">
                        <h3 class="aside-title">Brand</h3>
                        <div class="checkbox-filter">
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-1">
                                <label for="brand-1">
                                    <span></span>
                                    SAMSUNG
                                    <small>(578)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-2">
                                <label for="brand-2">
                                    <span></span>
                                    LG
                                    <small>(125)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-3">
                                <label for="brand-3">
                                    <span></span>
                                    SONY
                                    <small>(755)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-4">
                                <label for="brand-4">
                                    <span></span>
                                    SAMSUNG
                                    <small>(578)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-5">
                                <label for="brand-5">
                                    <span></span>
                                    LG
                                    <small>(125)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-6">
                                <label for="brand-6">
                                    <span></span>
                                    SONY
                                    <small>(755)</small>
                                </label>
                            </div>
                        </div>
                    </div> -->
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Top sản phẩm bán chạy</h3>
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product01.jfif" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">Tên sản phẩm nè</a></h3>
                                <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                            </div>
                        </div>

                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product02.jfif" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">Tên sản phẩm nè</a></h3>
                                <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                            </div>
                        </div>

                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product03.jfif" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Loại sản phẩm</p>
                                <h3 class="product-name"><a href="#">Tên sản phẩm nè</a></h3>
                                <h4 class="product-price">30.000đ <del class="product-old-price">45.000đ</del></h4>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->
                </div>
                <!-- /ASIDE -->

                <!-- STORE -->
                <div id="store" class="col-md-9">
                    <!-- store top filter -->
                    <div class="store-filter clearfix">
                        <div class="store-sort">
                            <label>
                                Sắp xếp theo:
                                <select class="input-select">
                                    <option value="0">Phổ biến</option>
                                    <option value="1">Xếp hạng</option>
                                </select>
                            </label>

                            <label>
                                Show:
                                <select class="input-select">
                                    <option value="0">20</option>
                                    <option value="1">50</option>
                                </select>
                            </label>
                        </div>
                        <ul class="store-grid">
                            <li class="active"><i class="fa fa-th"></i></li>
                            <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                    </div>
                    <!-- /store top filter -->

                    <!-- store products -->
                    <div class="row">
                        @foreach ($listproducts as $item)
                        <!-- product -->
                        <a href="{{URL::to('/product-details/'.$item->masp)}}">

                            <div class="col-md-4 col-xs-6">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="{{$item->hinhanh}}" alt="">
                                        <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="Mới">Mới</span>
                                        </div>
                                    </div>
                                    <div class="product-body">

                                        <h3 class="product-name"><a href="#">{{$item->tensp}}</a></h3>
                                        <h4 class="product-price">{{number_format($item->giakm,0, "," , ".")}}đ <del class="product-old-price">{{number_format($item->dongia,0, "," ,  ".")}}đ</del></h4>
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
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> thêm vào giỏ</button>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- /product -->
                        @endforeach
                    </div>
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        @if(!$listproducts->onFirstPage())
                        <li><a href="{{$listproducts->previousPageUrl()}}"><i class="fa fa-chevron-left"></i></a></li>
                        @endif
                        @foreach (range(1, $listproducts->lastPage()) as $number)
                        @if($number == $listproducts->currentPage())
                        <li class="page-item active"><a href="products?page={{$number}}">{{$number}}</a></li>
                        @else
                        <li class="page-item "><a href="products?page={{$number}}">{{$number}}</a></li>
                        @endif
                        @endforeach
                        @if($listproducts->hasMorePages())
                        <li><a href="{{$listproducts->nextPageUrl()}}"><i class="fa fa-chevron-right"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
@include('footer')

</html>