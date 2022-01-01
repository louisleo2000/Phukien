  <!-- NAVIGATION -->
  <nav id="navigation" x-data="{ open: false }">
      <!-- container -->
      <div class="container">
          <!-- responsive-nav -->
          <div id="responsive-nav">
              <!-- NAV -->

              <ul class="main-nav nav navbar-nav">
                  <li class="active"><a href="/">Home</a></li>
                  <!-- <li><a href="#">Hot Sales</a></li> -->
                  <li><a href="{{URL::to('products?filter[0]=1&filter[1]=2&filter[2]=3&type_search=product_type_id')}}">Phụ kiện tóc</a></li>
                  <li><a href="{{URL::to('products?filter[0]=4&filter[1]=5&type_search=product_type_id')}}">Phụ kiện trang sức</a></li>
                  <!-- <li><a href="#">Trang sức</a></li> -->
                  <li><a href="{{URL::to('products?search=all')}}">Tất cả sản phẩm</a></li>
                  <li><a href="/about">Giới thiệu</a></li>
                  <div :class="{'hidden': !open}" class="hidden">
                      <li> <a :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                              {{ __('Đăng xuất') }}
                          </a>
                      </li>
                  </div>
              </ul>
              <!-- /NAV -->
          </div>
          <!-- /responsive-nav -->
      </div>
      <!-- /container -->
  </nav>
  <!-- /NAVIGATION -->