@extends('layouts.app')
@section('content')

@if(Auth::user()->cart->total_quantity>0)
<div>
    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Thanh toán</h3>
                    <!-- <ul class="breadcrumb-tree">
                        <li><a href="#">Home</a></li>
                        <li class="active">Thanh toán</li>
                    </ul> -->
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

                <div class="col-md-7">
                    <!-- Billing Details -->
                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">Địa chỉ giao hàng</h3>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="name" placeholder="Họ và tên" disabled value="{{Auth::user()->name}}">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <input class="input" type="email" name="email" placeholder="Email" disabled value="{{Auth::user()->email}}">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="address" placeholder="Địa chỉ" disabled value="{{Auth::user()->adress}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <input class="input" type="tel" name="tel" placeholder="Điện thoại" disabled value="{{Auth::user()->tel}}">
                        </div>
                        <!-- <div class="form-group">
                            <div class="input-checkbox">
                                <input type="checkbox" id="create-account">
                                <label for="create-account">
                                    <span></span>
                                    Create Account?
                                </label>
                                <div class="caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                    <input class="input" type="password" name="password" placeholder="Enter Your Password">
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- /Billing Details -->

                    <!-- Shiping Details -->
                    <div class="shiping-details">
                        <div class="section-title">
                            <h3 class="title">Shiping address</h3>
                        </div>
                        <div class="input-checkbox">
                            <input type="checkbox" id="shiping-address">
                            <label for="shiping-address">
                                <span></span>
                                Giao đến địa chỉ khác?
                            </label>
                            <div class="caption">
                                <div class="form-group">
                                    <input class="input" type="text" name="first-name" placeholder="Họ và tên">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="address" placeholder="Địa chỉ">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="tel" name="tel" placeholder="Điện thoại">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Shiping Details -->

                    <!-- Order notes -->
                    <div class="order-notes">
                        <textarea class="input" placeholder="Ghi chú"></textarea>
                    </div>
                    <!-- /Order notes -->
                </div>

                <!-- Order Details -->
                <div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Đơn hàng của bạn</h3>
                    </div>
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>SẢN PHẨM</strong></div>
                            <div><strong>Tổng</strong></div>
                        </div>
                        <div class="order-products">
                            @foreach($cart as $item)
                            <div class="order-col">
                                <div>{{$item->quantity}} x {{$item->product->name}}</div>
                                <div>{{number_format($item->product->promo_price * $item->quantity,0, "," , ".")}}</div>
                            </div>
                            @endforeach
                        </div>
                        <div class="order-col">
                            <div>Phí ship</div>
                            <div><strong>Miễn phí</strong></div>
                        </div>
                        <div class="order-col">
                            <div><strong>Thành tiền</strong></div>
                            <div><strong class="order-total">{{number_format(Auth::user()->cart->total_price,0, "," , ".")}} VNĐ</strong></div>
                        </div>
                    </div>
                    <!-- <div class="payment-method">
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-1">
                            <label for="payment-1">
                                <span></span>
                                Direct Bank Transfer
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-2">
                            <label for="payment-2">
                                <span></span>
                                Cheque Payment
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-3">
                            <label for="payment-3">
                                <span></span>
                                Paypal System
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="input-checkbox">
                        <input type="checkbox" id="terms">
                        <label for="terms">
                            <span></span>
                            I've read and accept the <a href="#">terms & conditions</a>
                        </label>
                    </div> -->
                    <a href="#" class="primary-btn order-submit">Hoàn tất đặt hàng</a>
                </div>
                <!-- /Order Details -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
</div>
@else
<div style="height: 400px;display: flex; align-items: center; justify-content: center;flex-direction: column;">
    <h1 class="text-warning"> Bạn chưa có sản phẩm nào trong giỏ!</h1>
    
    <h4><a href="{{route('home')}}">quay lại trang chủ <i class="fa fa-arrow-right" aria-hidden="true"></i></a></h4>
</div>
@endif
@endsection