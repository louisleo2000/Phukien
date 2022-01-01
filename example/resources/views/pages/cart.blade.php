@extends('layouts.app')
@section('content')
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
<div class="container">
    <div id="datacart">
        @livewire('cart-details')
    </div>
</div>

<script>
    // function viewCartDetails() {
    //     let url = window.location.origin + "/cart";
    //     $.ajax({
    //             url: url,
    //             type: "get",
    //         })
    //         .done(function(data) {
    //             $("#datacart").html(data.html);
    //             Livewire.emit('resfreshHeader');
    //             loadjs();

    //         })
    //         .fail(function(jqXHR, ajaxOptions, thrownError) {
    //             alert('Máy chủ không phản hồi...');
    //         });

    // }





    function loadjs() {
        let bot = document.getElementById('stick');
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() + 200 >= $(document).height()) {

                bot.style.position = 'static'

            } else if ($(window).scrollTop() + $(window).height() < $(document).height() - 450) {
                bot.style.position = 'fixed'
            }
        });
    }
    loadjs();
</script>

@endsection