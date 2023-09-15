<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kallfu</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

    @yield('css')

</head>

<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
    <div class="wrapper">

        @include('layouts.partials.navbar')

        @yield('content')

        <footer class="main-footer">
            <strong>Copyright &copy; 2023</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Kallfu</b> v 2.2.0
            </div>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <script src="{{ asset('js/kallfu.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.js') }}"></script>

    @yield('js')



</body>

</html>