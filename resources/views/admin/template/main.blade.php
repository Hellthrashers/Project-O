<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default') | Panel de administracion</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>

<body>
    @include('admin.template.partials.nav')
    <section>
    @include('flash::message') 
    @include('admin.template.partials.error')
    @yield('content')
    </section>
    <script type="text/javascript" src="{{ asset('jquery/jquery-3.3.1.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <script>
        $('#flash-overlay-modal').modal();
    </script>
</body>

</html>