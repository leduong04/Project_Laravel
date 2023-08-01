<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/sidebar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/navbar.css')}}"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/orders.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ADMIN/nhanvien.css')}}"> -->

    <meta name="csrf-token" content="{{ csrf_token() }}">


    @yield('css')
</head>

<body id="{{$pageId}}">
    @include('ADMIN.includes.sidebar')

    <section id="content">

        @include('ADMIN.includes.navbar')

        @yield('content')
    </section>

    @yield('js')

</body>

</html>