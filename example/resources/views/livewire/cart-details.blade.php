<div>
    @if(count($list)>0)
    <div class="cart-table ">
        <table class="table">
            <thead>
                <tr>
                    <th class="pro-thumbnail">HÌnh ảnh</th>
                    <th class="pro-title">Sản phẩm</th>
                    <th class="pro-price">Giá</th>
                    <th class="pro-quantity">số lượng</th>
                    <th class="pro-subtotal">Tổng</th>
                    <th class="pro-remove">Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $item)
                <tr>
                    <td class="pro-thumbnail"><a href="{{route('product-details',$item->product_id)}}"><img src="{{$item->product->img}}" alt="Product"></a></td>
                    <td class="pro-title">
                        <div>
                            <p><a href="{{route('product-details',$item->product_id)}}">{{$item->product->name}}</a></p>
                            <p style="color: black;">
                                Màu sắc: {{$item->color}}
                            </p>
                        </div>
                    </td>
                    <td class="pro-price">
                        <span>{{number_format($item->product->promo_price,0, "," ,  ".")." ₫"}}</span>

                    </td>
                    <td class="pro-quantity">
                        <div class="pro-qty">
                            <span class="dec qtybtn">
                                <i class="fas fa-minus" style="font-size:10px;"></i>
                            </span>

                            <input min="1" product_id="{{$item->product_id}}" type="number" data-price="{{$item->product->promo_price}}" value="{{$item->quantity}}">

                            <span class="inc qtybtn">
                                <i class="fas fa-plus" style="font-size:10px;"></i>
                            </span>
                        </div>
                    </td>
                    <td class="pro-subtotal">{{number_format($item->total,0, "," ,  ".")." ₫"}}</td>
                    <td class="pro-remove"><a onclick="delCart(<?php echo ($item->product_id) ?>)"><i class="fas fa-trash"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="sticky-bottom" id="stick">
        <div class="modal-content row" style="width: 100%; padding: 20px;">
            <div class="col-md-6">
                <p style="font-weight: bold; font-size: 20px;">Đã chọn {{$list[0]->cart->total_quantity}} sản phẩm</p>
            </div>
            <div class="col-md-4">
                <div class="">
                    <p style="font-weight: bold; font-size: 20px;">Tổng thanh toán: <span id="toltal">{{number_format($list[0]->cart->total_price,0,",",".")}}</span>VNĐ</p>
                </div>

                <div>
                    <a href="{{route('checkout')}}" class="primary-btn" style="font-weight: bold; font-size: 20px;">Mua hàng</a>
                </div>
            </div>
        </div>
    </div>
    @else
    <br>
    <div class="container">
        <div class="row">
            <h1>Bạn chưa có sản phẩm nào trong giỏ hàng! <a style="font-size: 20px;" href="{{route('home')}}">hãy thêm sản phẩm</a></h1>

        </div>
    </div>
    @endif



</div>