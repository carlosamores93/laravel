<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title', 'Admin') | Panel de administración</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">

        
    </head>
    <body>

        @include('admin.nav')

        <section>
            @yield('content')
        </section>

        <script src="{{ asset('plugins/js/jquery-3.3.1.js') }}" ></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.js') }}" ></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}" ></script>

    </body>
</html>
