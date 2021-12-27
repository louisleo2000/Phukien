 <!-- MAIN HEADER -->
 <div id="header">
     <!-- container -->
     <div class="container">
         <!-- row -->
         <div class="row">
             <!-- LOGO -->
             <div class="col-sm-3">
                 <div class="header-logo">
                     <a href="/" class="logo">
                         <img src="{{ URL::asset('./img/logo.png') }}" alt="" style="width: 75%;">
                     </a>
                 </div>
             </div>
             <!-- /LOGO -->

             <!-- SEARCH BAR -->
             <div class="col-sm-6">
                 <div class="header-search">
                     <form>
                         <input class="input" style="border-top-left-radius:20px;border-bottom-left-radius:20px; width: 90%;" placeholder="Tìm kiếm">
                         <button class="search-btn" style=" width: 10%;"><i class="fas fa-search    "></i></button>
                     </form>
                 </div>
             </div>
             <!-- /SEARCH BAR -->

             <!-- ACCOUNT -->
             <div class="col-sm-3 clearfix">
                 <div class="header-ctn">
                     <!-- Wishlist -->
                     <div>
                         <a href="#">

                             <i class="far fa-heart"></i>
                             <span style="color: black;">Yêu thích</span>
                             <div class="qty">2</div>
                         </a>
                     </div>
                     <!-- /Wishlist -->

                     <!-- Cart -->
                     <div class="dropdown">
                         <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                             <i class="fa fa-shopping-cart"></i>
                             <span style="color: black;">Giỏ hàng</span>
                             @if(Auth::user() != null)
                             <div class="qty">{{Auth::user()->cart->total_quantity}}</div>
                             @endif
                         </a>
                         @if(Auth::user() != null)
                         <div class="cart-dropdown">
                             <div class="cart-list">
                                 @foreach(Auth::user()->cart->cartdetails as $cartItem)
                                 <div class="product-widget">
                                     <div class="product-img">
                                         <img src="{{$cartItem->product->img}}" alt="">
                                     </div>
                                     <div class="product-body">
                                         <h3 class="product-name"><a href="{{route('product-details',$cartItem->product_id)}}">{{$cartItem->product->name}}</a></h3>
                                         <h4 class="product-price"><span class="qty">{{$cartItem->quantity}}x</span> {{number_format($cartItem->product->promo_price,0, "," ,  ".")}}</h4>
                                     </div>
                                     <button class="delete"><i class="fas fa-times"></i></button>
                                 </div>
                                 @endforeach

                             </div>
                             <div class="cart-summary">
                                 <small>{{count(Auth::user()->cart->cartdetails)}} sản phẩm đã được chọn</small>
                                 <h5>{{number_format(Auth::user()->cart->total_price,0, "," ,  ".")}}</h5>
                             </div>
                             <div class="cart-btns">
                                 <a href="{{route('cart')}}">Xem giỏ hàng</a>
                                 <a href="/checkout">Thanh toán <i class="fa fa-arrow-circle-right"></i></a>
                             </div>
                         </div>
                         @endif
                     </div>
                     <!-- /Cart -->

                     <!-- Menu Toogle -->
                     <div class="menu-toggle">
                         <a href="#">
                             <i class="fa fa-bars"></i>
                             <span>Menu</span>
                         </a>
                     </div>
                     <!-- /Menu Toogle -->
                 </div>
             </div>
             <!-- /ACCOUNT -->
         </div>
         <!-- row -->
     </div>
     <!-- container -->
 </div>
 <!-- /MAIN HEADER -->