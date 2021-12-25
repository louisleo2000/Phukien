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
            <tr>
                <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-1.png" alt="Product"></a></td>
                <td class="pro-title"><a href="#">Zeon Zen 4 Pro</a></td>
                <td class="pro-price"><span>$295.00</span></td>
                <td class="pro-quantity">
                    <div class="pro-qty"><input type="number" value="1"></div>
                </td>
                <td class="pro-subtotal"><span>$295.00</span></td>
                <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
            </tr>

        </tbody>
    </table>
</div>
@endsection