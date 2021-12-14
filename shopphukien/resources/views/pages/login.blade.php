<head>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />

</head>
<div class="wrapper">
    <div class="logo"> <img src="{{ URL::asset('./img/logo.png') }}" alt="" style="width: 65%;"> </div>
    <div class="text-center mt-4 name"> Đăng nhập </div>
    <form class="p-3 mt-3">
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="userName" placeholder="Tài khoản"> </div>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="password" placeholder="Mật khẩu"> </div> <button class="btn mt-3">Login</button>
    </form>
    <div class="text-center fs-6" style="margin-top: 20px;"> <a href="#">Quên mật khẩu?</a> hoặc <a href="#">Đăng ký</a> </div>
</div>