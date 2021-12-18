@if(isset($listproducts))
@foreach ($listproducts as $item)
<!-- product -->
<a href="{{URL::to('/product-details/'.$item->id)}}">

    <div class="col-md-4 col-xs-6">
        <div class="product">
            <div class="product-img">
                <img src="{{$item->img}}" alt="">
                <div class="product-label">
                    <span class="sale">-30%</span>
                    <span class="Mới">Mới</span>
                </div>
            </div>
            <div class="product-body">

                <h3 class="product-name"><a href="{{URL::to('/product-details/'.$item->id)}}">{{$item->name}}</a></h3>
                <h4 class="product-price">{{number_format($item->promo_price,0, "," , ".")}}đ <del class="product-old-price">{{number_format($item->unit_price,0, "," ,  ".")}}đ</del></h4>
                <div class="product-rating">
                    {{ratingStar($item->rating)}}
                </div>
                <div class="product-btns">
                    <button class="add-to-wishlist"><i class="far fa-heart"></i><span class="tooltipp">Yêu thích</span></button>

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
@endif