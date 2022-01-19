<div>
    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-3">
                    <div class="header-logo">
                        <a href="/" class="logo">
                            <img src="{{ URL::asset('./img/logo.png') }}" alt="" style="width: 75%;">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-6">
                    <div class="header-search">
                        <input wire:model="search" wire:change="search" class="input" style="border-top-left-radius:20px;border-bottom-left-radius:20px; width: 90%;" placeholder="Tìm kiếm">
                        <button wire:click="search" class="search-btn" style=" width: 8%;"><i class="fas fa-search"></i></button>

                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-sm-3 clearfix">

                    <div class="header-ctn row" style="margin-top: 15px;">
                        <div>
                            @if(Auth::user() != null)
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" style="background-color:#F28394 ;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user-circle " style="margin-right: 5px;font-size: 20px;"></i>{{ Auth::user()->name}}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a :href="route('logout')" class="dropdown-item " onclick="event.preventDefault();
                                                this.closest('form').submit();" style="font-size: 16px; ">
                                            Đăng xuất
                                        </a>
                                    </form>
                                    @if(Auth::user()->role == 'admin')
                                    <a class="dropdown-item" style="font-weight: bold;" href="{{route('dashboard')}}">Dash board</a>
                                    @endif
                                    <!-- <a class="dropdown-item" href="#">Something else here</a> -->

                                </div>
                            </div>

                            @else

                            <a class="a1" href="{{ route('login') }}">
                                Đăng nhập
                            </a>

                            @endif

                        </div>

                        <!-- Cart -->

                        <div class="dropdown" style="margin-left: -20px;">
                            <a class="dropdown-toggle" id="dropdownCart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-shopping-cart" style="font-size: 25px; "></i>
                                @if(Auth::user() != null)
                                <div class="qty">{{Auth::user()->cart->total_quantity}}</div>
                                @endif

                            </a>

                            @if(Auth::user() != null)
                            <div class="cart-dropdown dropdown-menu" aria-labelledby="dropdownCart">
                                <div class="cart-list">
                                    @foreach($carts as $cartItem)
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="{{$cartItem->product->img}}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="{{route('product-details',$cartItem->product_id)}}">{{mb_strimwidth($cartItem->product->name, 0, 35, "...");}}</a></h3>
                                            <h4 class="product-price"><span class="qty">{{$cartItem->quantity}}x</span> {{number_format($cartItem->product->promo_price,0, "," ,  ".")}}</h4>
                                        </div>
                                        <button class="delete"><i class="fas fa-times" onclick="delCart(<?php echo ($cartItem->product_id) ?>)"></i></button>
                                    </div>
                                    @endforeach

                                </div>
                                <div class="cart-summary">
                                    <small>{{count($carts)}} sản phẩm đã được chọn</small>
                                    <h5>Tổng: {{$price}}đ </h5>
                                </div>
                                <div class="cart-btns row">
                                    <a href="{{route('cart')}}">Xem giỏ hàng</a>
                                    <a href="/checkout">Thanh toán <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            @endif

                        </div>

                    </div>
                    <!-- /Cart -->

                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</div>
