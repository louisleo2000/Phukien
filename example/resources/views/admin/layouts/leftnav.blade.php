<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
        <i style="font-size: 20px;" class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{route('home')}}">
            <img src="/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Admin</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                @if(isset($active)&&$active == 1)
                <a class="nav-link active" href="#">
                    @else
                    <a class="nav-link" href="{{route('dashboard')}}">
                        @endif
                        <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <title>Thống kê</title>
                            <i style="font-size: 20px;" class="fas fa-chart-line    "></i>
                        </div>
                        <span class="nav-link-text ms-1">Thống kê</span>
                    </a>
            </li>
            <li class="nav-item">
                @if(isset($active)&&$active == 2)
                <a class="nav-link active" href="#">
                    @else
                    <a class="nav-link" href="{{route('admin-product')}}">
                        @endif
                        <div class="icon  icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <title>Quản lý sản phẩm </title>
                            <i style="font-size: 20px;" class="fas fa-boxes    "></i>
                        </div>
                        <span class="nav-link-text ms-1">Sản phẩm</span>
                    </a>
            </li>
            <li class="nav-item">
                @if(isset($active)&&$active == 3)
                <a class="nav-link active" href="#">
                    @else
                    <a class=" nav-link" href="{{route('admin-product-type')}}">
                        @endif
                        <div class="icon  icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <title>Quản lý loại sản phẩm</title>
                            <i style="font-size: 20px;" class="fas fa-tasks    "></i>
                        </div>
                        <span class="nav-link-text ms-1">Loại sản phẩm</span>
                    </a>
            </li>
            <li class="nav-item">
                @if(isset($active)&&$active == 4)
                <a class="nav-link active" href="#">
                    @else
                    <a class="nav-link" href="{{route('admin-categories')}}">
                        @endif
                        <div class="icon  icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <title>Danh mục</title>
                            <i style="font-size: 20px;" class="fab fa-buffer"></i>
                        </div>
                        <span class="nav-link-text ms-1">Danh mục sản phẩm</span>
                    </a>
            </li>
            <li class="nav-item">
                @if(isset($active)&&$active == 5)
                <a class="nav-link active" href="#">
                    @else
                    <a class="nav-link" href="#">
                        @endif
                        <div class="icon  icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">

                            <title>Người dùng</title>
                            <i style="font-size: 20px;" class="fas fa-users"></i>
                        </div>
                        <span class="nav-link-text ms-1">Quản lý người dùng</span>
                    </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="../pages/profile.html">
                    <div class="icon  icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <title>customer-support</title>
                        <i style="font-size: 20px;" class="fas fa-id-card"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>

            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link  " :href="route('logout')" class="dropdown-item " onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <div class="  icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i style="font-size: 20px;" class="fas fa-sign-out-alt    "></i>
                            <title>spaceship</title>
                        </div>
                        <span class="nav-link-text ms-1 ">Đăng xuất</span>
                    </a>
                </form>
            </li>
        </ul>
    </div>

</aside>