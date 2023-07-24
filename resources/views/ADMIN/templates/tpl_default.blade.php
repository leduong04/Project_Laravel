<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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