<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{asset('admin/img/favicon.png')}}">
    <title>{{ config('app.name', 'Laravel') }}</title>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Fonts -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" /> -->


    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/slick.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/slick-theme.css') }}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/nouislider.min.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- <link rel="stylesheet" href="{{ URL::asset('css/fontawesome.min.css') }}"> -->

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    @livewireStyles
</head>
<?php
function rating($number)
{
    foreach (range(1, $number) as $i) {
        echo ('<i class="fa fa-star"></i>');
    }
}
?>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">


        <header>
            @include('layouts.topheader')
            @livewire('header')
        </header>
        @include('layouts.botheader')



        <!-- Page Heading -->
        <!-- <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"> -->

        <!-- 
            </div>
        </header> -->

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>
</body>
@include('layouts.footer')

</html>