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
                        <li><a href="#">Home</a></li>
                        @if(isset($listproducts))
                        <li class="active">Tất cả sản phẩm ({{$listproducts->total()}} sản phẩm)</li>
                        @endif
                        <!-- <li><a href="#">Phụ kiện</a></li>
                        <li class="active">Phụ kiện thời trang </li> -->
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
                        <h3 class="aside-title">Danh mục</h3>
                        <div class="checkbox-filter">
                            @if(isset($categories))
                            @foreach($categories as $cate)
                            <div class="input-checkbox">
                                <input type="checkbox" id="{{$cate->id}}">
                                <label for="{{$cate->id}}">
                                    <span></span>
                                    {{$cate->name}}
                                    <small>
                                        <?php $sum = 0;
                                        foreach ($cate->productTypes as $type) {
                                            $sum += $type->products->count();
                                        }
                                        ?>
                                        ({{$sum}})
                                    </small>
                                </label>
                            </div>
                            @endforeach
                            @endif
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
                        <h3 class="aside-title">Thể loại</h3>
                        <div class="checkbox-filter">
                            @if(isset($listtype))
                            @foreach($listtype as $type)
                            <div class="input-checkbox">
                                <input type="checkbox" id="lsp{{$type->id}}">
                                <label for="lsp{{$type->id}}">
                                    <span></span>
                                    {{$type->name}}
                                    <small>
                                        ({{$type->products->count()}})
                                    </small>
                                </label>
                            </div>
                            @endforeach
                            @endif
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


                        </div>
                        <ul class="store-grid">
                            <li class="active"><i class="fa fa-th"></i></li>
                            <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                    </div>
                    <!-- /store top filter -->

                    <!-- store products -->
                    <div class="row" id="post-data">
                        @include('pages.more-product')
                    </div>
                    <div id="lastpage">
                        @if(isset($listproducts))
                        <p style="font-size: 0;"> {{$listproducts->lastPage()}}</p>
                        @else {{0}}
                        @endif
                    </div>
                    <div class="ajax-load text-center" style="display: none;">
                        <img src="img/loading.gif" style="width: 50px;" />

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var div = document.getElementById("lastpage");
    var lastpage = parseInt(div.textContent);
    var page = 1;
    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() + 100 >= $(document).height()) {

            if (page <= (lastpage + 1)) {
                page++;
                loadMoreData(page);
            }

        }
    });


    function loadMoreData(page) {
        $.ajax({
                url: '?page=' + page,
                type: "get",

                beforeSend: function() {
                    $('.ajax-load').show();
                }
            })
            .done(function(data) {
                $('.ajax-load').hide();
                $("#post-data").append(data.html);
                if (page >= lastpage) {
                    $('.ajax-load').html("Không còn sản phẩm để hiển thị").show();
                    return;
                }

            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('Máy chủ không phản hồi...');
            });
    }
</script>
@endsection