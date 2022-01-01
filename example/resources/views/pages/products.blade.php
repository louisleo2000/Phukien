@extends('layouts.app')
@section('content')


<div>
    <!-- BREADCRUMB -->
    <!-- <div id="breadcrumb" class="section">
       
        <div class="container">
        
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Home</a></li>

                        <li class="active">Tất cả sản phẩm sản phẩm)</li>

                    </ul>
                </div>
            </div>
         
        </div>
       
    </div> -->
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    @livewire('more-product')

</div>
<div id="myModal" class="modal">
    <!-- Modal content -->
    @include('layouts.modal-product')
</div>
<script type="text/javascript">
    // lastpage = parseInt(lastpage.innerHTML);

    $(window).scroll(function() {
        lastpage = document.getElementById('lastpage');
        lastpage = parseInt(lastpage.textContent);
        if (lastpage > 1) {
            if ($(window).scrollTop() + $(window).height() + 30 >= $(document).height()) {
                $('.ajax-load').show();
                Livewire.emit('loadmore');
            } else {
                $('.ajax-load').hide();
            }
        } else {
            $('.ajax-load').show();
            $('.ajax-load').html("Không còn sản phẩm để hiển thị");
        }
    });


    // function loadMoreData(page) {
    //     $.ajax({
    //             url: '?page=' + page,
    //             type: "get",

    //             beforeSend: function() {
    //                 $('.ajax-load').show();
    //             }
    //         })
    //         .done(function(data) {
    //             $('.ajax-load').hide();
    //             $("#post-data").append(data.html);
    //             if (page >= lastpage) {
    //                 $('.ajax-load').html("Không còn sản phẩm để hiển thị").show();
    //                 return;
    //             }

    //         })
    //         .fail(function(jqXHR, ajaxOptions, thrownError) {
    //             alert('Máy chủ không phản hồi...');
    //         });
    // }
</script>
@endsection