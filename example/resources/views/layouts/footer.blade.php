    <!-- FOOTER -->
    <footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Về chúng tôi</h3>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p> -->
                            <ul class="footer-links">
                                <li><a href="#"><i class="fas fa-map-marker-alt"></i>Nha Trang - Khánh Hòa</a></li>
                                <li><a href="#"><i class="fas fa-phone"></i>0123-456-789</a></li>
                                <li><a href="#"><i class="far fa-envelope"></i>email@email.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Các loại sản phẩm</h3>
                            <ul class="footer-links">
                                <li><a href="#">Phụ kiện tóc</a></li>
                                <li><a href="#">Phụ kiện thời trang</a></li>
                                <li><a href="#">Gấu bông & gối</a></li>
                                <li><a href="#">Túi xách</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Thông tin liên hệ</h3>
                            <ul class="footer-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Service</h3>
                            <ul class="footer-links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">View Cart</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->

        <!-- bottom footer -->

        <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->
    <!-- jQuery Plugins -->
    <!-- <script src="{{ URL::asset('js/jquery.min.js') }}"></script> -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/slick.min.js') }}"></script>
    <script src="{{ URL::asset('js/nouislider.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.zoom.min.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
    <script>
        function add2Cart(id) {
            let url = window.location.origin + "/cart/" + id;
            console.log(url)
            $.ajax({
                    url: url,
                    type: "post",
                    dataType: "text",
                    data: $('#myform').serialize(),
                })
                .done(function(response) {
                    alert('đã thêm vào giỏ');

                }).fail(function(jqXHR, ajaxOptions, thrownError) {
                    alert('Máy chủ không phản hồi...');
                });
        }
    </script>