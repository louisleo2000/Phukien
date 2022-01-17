<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{asset('admin/img/favicon.png')}}">
    <title>{{ config('app.name', 'Laravel') }}</title>






    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
