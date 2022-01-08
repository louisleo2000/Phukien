<div>
    <div id="lastpage">
        <p style="font-size: 0px;">{{$listproducts->lastPage()}} </p>
    </div>
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
                                <input wire:model="category.{{$cate->name}}.state" wire:click="onCheck()" type="checkbox" id="{{$cate->id}}">
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
                                <input wire:model="product_type.{{$type->name}}.state" wire:click="onCheck()" type="checkbox" id="lsp{{$type->id}}">
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
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <!-- <div class="aside">
                        <h3 class="aside-title">Giá</h3>
                        <div class="price-filter">
                            <div class="input-number ">
                                <input type="number" min=1000 max=1000000 value="1000">
                            </div>
                            <span>-</span>
                            <div class="input-number">
                                <input type="number" min=1000 max=1000000 value="500000">
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
                            <!-- <label>
                                Sắp xếp theo:
                                <select class="input-select">
                                    <option value="0">Phổ biến</option>
                                    <option value="1">Xếp hạng</option>
                                </select>
                            </label> -->


                        </div>
                        <ul class="store-grid">
                            <li class="active"><i class="fa fa-th"></i></li>
                            <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                    </div>
                    <!-- /store top filter -->

                    <!-- store products -->
                    <div class="row" id="post-data">
                        @if(isset($listproducts))
                        @foreach ($listproducts as $item)
                        <!-- product -->

                        <a href="{{URL::to('/product-details/'.$item->id)}}">

                            <div class="col-md-4 col-xs-6">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="{{$item->img}}" alt="">
                                        <div class="product-label">
                                            <span class="sale">{{$km = round(100-($item->unit_price/$item->promo_price*100))  }}%</span>
                                            <span class="Mới">Mới</span>
                                        </div>
                                    </div>
                                    <div class="product-body">

                                        <h3 class="product-name"><a href="{{URL::to('/product-details/'.$item->id)}}">{{mb_strimwidth($item->name, 0, 30, "...");}}</a></h3>
                                        <h4 class="product-price">{{number_format($item->promo_price,0, "," , ".")}}đ <del class="product-old-price">{{number_format($item->unit_price,0, "," ,  ".")}}đ</del></h4>
                                        <div class="product-rating">
                                            {{ratingStar($item->rating)}}
                                        </div>

                                        <div class="add-to-cart">
                                            <button onclick="viewDetails(<?php echo ($item->id) ?>)" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> thêm vào giỏ</button>
                                        </div>
                                    </div>
                                    <br><br>
                                </div>
                            </div>
                        </a>
                        <!-- /product -->
                        @endforeach
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