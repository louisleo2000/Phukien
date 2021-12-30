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
<div class="container" id="datacart">
    @include('layouts.cart-details')

</div>
<div class="sticky-bottom" id="stick">
    <div class="modal-content row" style="width: 80%; padding: 20px;">
        <div class="col-md-6">
            <p style="font-weight: bold; font-size: 20px;">Đã chọn {{Auth::user()->cart->total_quantity}} sản phẩm</p>
        </div>
        <div class="col-md-4">
            <div class="">
                <p style="font-weight: bold; font-size: 20px;">Tổng thanh toán: {{number_format(Auth::user()->cart->total_price,0,",",".")}}VNĐ</p>
            </div>

            <div>
                <a href="{{route('checkout')}}" class="primary-btn" style="font-weight: bold; font-size: 20px;">Mua hàng</a>
            </div>
        </div>


    </div>

</div>
<script>
    let bot = document.getElementById('stick');
    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() + 200 >= $(document).height()) {

            bot.style.position = 'static'

        } else if ($(window).scrollTop() + $(window).height() < $(document).height() - 350) {
            bot.style.position = 'fixed'
        }
    });

    function viewCartDetails() {

        let url = window.location.origin + "/cart";
        $.ajax({
                url: url,
                type: "get",
            })
            .done(function(data) {
                $("#datacart").html(data.html);
                modal.style.display = "block";
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('Máy chủ không phản hồi...');
            });
    }

    function delCart(id) {
        let url = window.location.origin + "/cart/" + id;;
        $.ajax({
                url: url,
                type: "get",
            })
            .done(function(response) {
                viewCartDetails()
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('Máy chủ không phản hồi...');
            });
    }
</script>
@endsection