@if(isset($prod))
<div class="modal-content">
    <div class="modal-header">
        <span class="close">&times;</span>

    </div>
    <div class="modal-body row">
        <div class="col-md-6">
            <div class="product-preview">
                <img src="{{$prod->img}}" alt="">
            </div>
        </div>
        <!-- Product details -->

        <div class="product-details col-md-5">
            <h2 class="product-name">{{$prod->name}}</h2>
            <div>
                <div class="product-rating">
                    <span>{{number_format($prod->rating,1)}}</span>
                    {{ratingStar($prod->rating)}}
                </div>
                <a class="review-link" href="#">10 Đánh giá</a>
            </div>
            <div>
                <h3 class="product-price">{{number_format($prod->promo_price,0, "," , ".")}}đ <del class="product-old-price">{{number_format($prod->unit_price,0, "," , ".")}}đ</del></h3>
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
                <button onclick="add2Cart(<?php echo ($prod->id) ?>)" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
            </div>
            <ul class="product-btns">
                <li><a href="#"><i class="fa fa-heart-o"></i> Yêu thích</a></li>

            </ul>

            <ul class="product-links">
                <li>Thể loại:</li>
                <li><a href="#">{{$prod->productTypes->name}}</a></li>
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
        <!-- /Product details -->

    </div>

</div>
<script>
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    // Input number
    $(".input-number").each(function() {
        var $this = $(this),
            $input = $this.find('input[type="number"]'),
            up = $this.find(".qty-up"),
            down = $this.find(".qty-down");

        down.on("click", function() {
            var value = parseInt($input.val()) - 1;
            value = value < 1 ? 1 : value;
            $input.val(value);
            $input.change();

        });

        up.on("click", function() {
            var value = parseInt($input.val()) + 1;
            $input.val(value);
            $input.change();

        });
    });
</script>

@endif