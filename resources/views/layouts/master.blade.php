<!doctype html>
<html lang="en">

<head>
    {{-- meta --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="canonical" href="@yield(url()->current())">
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    {{-- google fonts --}}
    <link rel="stylesheet" href="./assets/css/main.css">

    <title>@yield('title')Lightspeed Voice</title>

</head>

<body>

    {{-- @include('inc.header') --}}

    <main id="main" class="site-main">

        @yield('content')

    </main><!-- #main -->


    {{-- @include('inc.footer') --}}


    <!-- Optional JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>
