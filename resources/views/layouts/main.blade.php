<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('boostrap/bootsrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('boostrap/bootsrap/js/bootstrap.min.js') }}"></script>
    <title>@yield('title', 'CRUD')</title>
</head>
<body>
    <div class="container-fluid m-0 p-0 h-100 w-100 bg-info-subtle opacity-25">
        @include('layouts.navbar')

        <div>
            @yield('main')
        </div>

        @include('layouts.footer')
    </div>
</body>
</html>
