  <!-- NAVIGATION -->
  <nav id="navigation" x-data="{ open: false }">
      <!-- container -->
      <div class="container">
          <!-- responsive-nav -->
          <div id="responsive-nav">
              <!-- NAV -->

              <ul class="main-nav nav " style="padding-top: 15px;">
                  <li class="active"><a href="/">Home</a></li>
                  <!-- <li><a href="#">Hot Sales</a></li> -->
                  <li><a href="{{URL::to('products?filter[0]=1&filter[1]=2&filter[2]=3&type_search=product_type_id')}}">Phụ kiện tóc</a></li>
                  <li><a href="{{URL::to('products?filter[0]=4&filter[1]=5&type_search=product_type_id')}}">Phụ kiện trang sức</a></li>
                  <!-- <li><a href="#">Trang sức</a></li> -->
                  <li><a href="{{URL::to('products?search=all')}}">Tất cả sản phẩm</a></li>
                  <li><a href="/about">Giới thiệu</a></li>

              </ul>
              <!-- /NAV -->
          </div>
          <!-- /responsive-nav -->
      </div>
      <!-- /container -->
  </nav>
  <!-- /NAVIGATION -->