<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="admin/img/apple-icon.png">
    <link rel="icon" type="image/png" href="admin/img/favicon.png">
    <title>
        {{ config('app.name', 'Laravel') }}
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="admin/css/nucleo-icons.css" rel="stylesheet" />
    <link href="admin/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="admin/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="admin/css/style.css" rel="stylesheet" />
    <link id="pagestyle" href="admin/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    <!-- CKEDITOR -->
    <script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{ URL::asset('js/stand-alone-button.js')}}"></script>


</head>

<body class="g-sidenav-show  bg-gray-100" style="overflow:hidden;">
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
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
                        @if(isset($title))
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{$title}}</li>
                        @else
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dash board</li>
                        @endif
                    </ol>
                    @if(isset($title))
                    <h6 class="font-weight-bolder mb-0">{{$title}}</h6>
                    @else
                    <h6 class="font-weight-bolder mb-0">Dash board</h6>
                    @endif
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i style="font-size: 20px;" class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Tìm kiếm">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <!-- <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body px-0">
                                <i class="fa fa-user me-sm-1"></i>
                            
                            </a>
                        </li> -->
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">{{ Auth::user()->name}}</span>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">Thông tin người dùng</span>
                                                </h6>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item border-radius-md" :href="route('logout')" class="dropdown-item " onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            <div class="d-flex py-1">
                                                <div class="d-flex flex-row justify-content-center">
                                                    <i style="font-size: 20px;margin-right: 10px;" class="fas fa-sign-out-alt"></i>
                                                    <span class="font-weight-bold">Đăng xuất</span>
                                                </div>
                                            </div>
                                        </a>
                                    </form>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        @yield('admin_content')
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Cài đặt giao diện</h5>
                    <p>Các tùy chọn</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Màu Sidebar</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Loạt Sidenav</h6>
                    <p class="text-sm">Chọn 1 trong 2 loại</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Trong suốt</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">Trắng</button>
                </div>
                <!-- <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p> -->
                <!-- Navbar Fixed -->
                <div class="mt-3">
                    <h6 class="mb-0">Sửa lỗi Navbar</h6>
                </div>
                <div class="form-check form-switch ps-0">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                </div>
                <hr class="horizontal dark my-sm-4">

            </div>
        </div>
    </div>

</body>


</html><!--   Core JS Files   -->
<script src="admin/js/core/popper.min.js"></script>
<script src="admin/js/core/bootstrap.min.js"></script>
<script src="admin/js/plugins/perfect-scrollbar.min.js"></script>
<script src="admin/js/plugins/smooth-scrollbar.min.js"></script>
<script src="admin/js/plugins/chartjs.min.js"></script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="admin/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
<script>
    function readUrl(input) {

        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = (e) => {
                let imgData = e.target.result;
                console.log(e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }

    }
    if (typeof inputFile != 'undefined') {
        inputFile.onchange = evt => {
            var bg = document.getElementById("bgimg");
            const [file] = inputFile.files
            if (file) {
                src = URL.createObjectURL(file);
                inputFile.hide = true;
                bg.style.backgroundImage = "url('" + src + "')";
                inputFile.setAttribute("data-title", "");
            }
        }
    }
</script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
</script>
<script>
    let my_editor = document.getElementById("my-editor");
    if (my_editor != null) {
        CKEDITOR.replace('my-editor', options);
    }
</script>
<script>
    $('#lfm').filemanager('image');
    if (typeof thumbnail != 'undefined') {
        thumbnail.onchange = evt => {
            var img = document.getElementById("imgpreview");
            if (img != null)
                img.src = thumbnail.value;
        }
    }
</script>
<script>
    let id = ""
    $('.bg-gradient-success').click(function() {
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
        });
        id = $(this).attr('data-preview');
        let url = $(this).attr('data-url');
        // console.log(window.location.origin);
        showEditData(url);
    });



    function cancel() {
        let my_editor = document.getElementById("my-editor");

        document.getElementById('myform').reset();
        if (my_editor != null) {
            CKEDITOR.instances['my-editor'].setData('');
        }
        let previewIMG = document.getElementById("imgpreview");
        if (previewIMG != null) {
            previewIMG.src = '';
        }
        id = "0";
        $('#btnAdd').show();
        $('#btnEdit').hide();
    }

    function save(href) {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        $.ajax({
                url: window.location.origin + href + id,
                type: "post",
                dataType: "text",
                data: $('#myform').serialize(),
            })
            .done(function(response) {
                location.reload();
                cancel();

            }).fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('Máy chủ không phản hồi...');
            });
    }

    function showEditData(url) {

        let name = document.getElementById("name");
        let img = document.getElementById("thumbnail");
        let category_id = document.getElementById("type_id");
        let product_type_id = document.getElementById("product_type_id");
        let previewIMG = document.getElementById("imgpreview");
        let unit = document.getElementById("unit");
        let unit_price = document.getElementById("unit_price");
        let promo_price = document.getElementById("promo_price");
        let color = document.getElementById("color");
        let my_editor = document.getElementById("my-editor");
        let btnEdit = document.getElementById("btnEdit");
        let btnAdd = document.getElementById("btnAdd");
        $.ajax({
                url: url,
                type: "get",
            })
            .done(function(response) {
                $('#btnAdd').hide();
                name.value = response.data.name;
                if (img != null) {
                    img.value = response.data.img;
                }
                if (product_type_id != null) {
                    product_type_id.value = response.data.product_type_id;
                }
                if (category_id != null) {
                    category_id.value = response.data.category_id;
                }
                if (previewIMG != null) {
                    previewIMG.src = response.data.img;
                }
                if (unit_price != null) {
                    unit_price.value = response.data.unit_price;
                }
                if (unit != null) {
                    unit.value = response.data.unit.toLowerCase();
                }
                if (promo_price != null) {
                    promo_price.value = response.data.promo_price;
                }
                if (color != null) {
                    color.value = response.data.color;
                }
                if (my_editor != null) {
                    CKEDITOR.instances['my-editor'].setData(response.data.descrip);
                }
                window.scrollTo(0, 0);

                $('#btnEdit').show();

                // console.log(response);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('Máy chủ không phản hồi...');
            });
    }
</script>