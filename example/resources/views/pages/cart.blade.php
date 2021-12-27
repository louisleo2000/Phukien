@extends('layouts.app')
@section('content')
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
<div class="container">
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
                    <td class="pro-price"><span>{{number_format($item->product->promo_price,0, "," ,  ".")}}</span>

                    </td>
                    <td class="pro-quantity">
                        <div class="pro-qty"><input type="number" value="{{$item->quantity}}"></div>
                    </td>
                    <td class="pro-subtotal"><span>{{number_format($item->total,0, "," ,  ".")}}</span></td>
                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection