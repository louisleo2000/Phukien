<!DOCTYPE html>
<html lang="en">


@include('header')

<body>


    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Thêm sản phẩm</h3>

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
                    @if(Session::get('thanhcong'))
                    <div class="alert alert-success">
                        <strong>{{Session::get('thanhcong')}}</strong>
                    </div>
                    @endif
                    @if(Session::get('loi'))
                    <div class="alert alert-danger">
                        <strong>{{Session::get('loi')}}</strong>
                    </div>
                    @endif
                    <!-- Billing Details -->
                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">Thông tin sản phẩm</h3>
                        </div>

                        <form action="addsp" method="post">
                            @csrf
                            <div class="form-group">
                                <input class="input" type="text" maxlength="8" name="masp" placeholder="Mã sản phẩm" value="{{old('masp')}}">
                                <span style="color: red;">@error('masp'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <input class="input" type="text" maxlength="8" name="malsp" placeholder="Mã loại sp" value="{{old('malsp')}}">
                                    <span style="color: red;">@error('malsp'){{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="tensp" placeholder="Tên sản phẩm" value="{{old('tensp')}}">
                                    <span style="color: red;">@error('tensp'){{$message}} @enderror</span>
                                </div>
                                <input class="input" type="text" name="mota" placeholder="Mô tả sp" value="{{old('mota')}}">
                                <span style="color: red;">@error('mota'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="hinhanh" placeholder="Hình ảnh" value="{{old('hinhanh')}}">
                                <span style="color: red;">@error('hinhanh'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="dvt" placeholder="Đơn vị tính" value="{{old('dvt')}}">
                                <span style="color: red;">@error('dvt'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <input class="input" type="number" name="dongia" placeholder="Đơn giá" value="{{old('dongia')}}">
                                <span style="color: red;">@error('dongia'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <input class="input" type="number" name="giakm" placeholder="giá khuyển mãi" value="{{old('giakm')}}">
                                <span style="color: red;">@error('giakm'){{$message}} @enderror</span>
                            </div>


                            <!-- /Billing Details -->
                            <!-- Order notes -->
                            <div class="order-notes">
                                <textarea class="input" placeholder="Ghi chú"></textarea>
                            </div>
                            <!-- /Order notes -->
                            <button type="submit" class="primary-btn order-submit">Thêm sản phẩm</button>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
</body>
@include('footer')

</html>