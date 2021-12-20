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

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>

    <script src="{{ URL::asset('js/stand-alone-button.js')}}"></script>


</head>

<body class="g-sidenav-show  bg-gray-100" style="overflow:hidden;">
    <!--LEFT Navbar -->
    @include('admin.layouts.leftnav')
    <!-- End LEFT Navbar -->
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        @include('admin.layouts.navbar')
        <!-- End Navbar -->
        @yield('admin_content')
    </main>
    <!-- Navbar -->
    @include('admin.layouts.fixplugin')
    <!-- End Navbar -->

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
<!-- <script>
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
</script> -->
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

    function edit(idp) {
        id = idp;
        idp = '#edit' + idp;
        let url = $(idp).attr('data-url');
        // console.log(url);
        // console.log(idp);
        // console.log("id:", id);
        showEditData(url);
    };

    function del(idp) {
        idp = '#del' + idp;
        let url = $(idp).attr('data-url');
        console.log(url);
        // console.log(idp);
        // console.log("id:", id);
        if (confirm('Bạn có chắc muốn xóa sản phẩm này?')) {
            $.ajax({
                    url: url,
                    type: "get",
                })
                .done(function(response) {
                    table.ajax.reload();
                    cancel();

                }).fail(function(jqXHR, ajaxOptions, thrownError) {
                    alert('Máy chủ không phản hồi...');
                });
        }

    }

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


    function save(href, i = 0) {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        let url = 0;
        if (i == 1) {
            url = window.location.origin + href;
        } else {
            url = window.location.origin + href + id;

        }
        $.ajax({
                url: url,
                type: "post",
                dataType: "text",
                data: $('#myform').serialize(),
            })
            .done(function(response) {
                alert('thao tác thành công!!');
                table.ajax.reload();
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