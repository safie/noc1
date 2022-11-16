<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>i-NOC</title>
    {{-- <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <link href="{{ asset('bootstrap-5.2.0-dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('sb-admin-pro/dist/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('litepicker/dist/css/litepicker.css') }}" rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" /> --}}
    <link type="image/x-icon" href="{{ asset('/pic/favicon.ico') }}" rel="icon" />
    @yield('css')
    <script data-search-pseudo-elements defer src="{{ asset('fontawesome/js/all.min.js') }}"></script>
    {{-- <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        crossorigin="anonymous"></script> --}}
    <script src="{{ asset('feather-icons/dist/feather.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script> --}}
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
</head>

<body class="nav-fixed">
    @include('layouts.template.navbar')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('layouts.template.sidenav')
        </div>
        <div id="layoutSidenav_content">
            <main>
                @yield('header')
                <!-- Main page content-->
                @yield('content')
            </main>
            @include('layouts.template.footer')
        </div>
    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script> --}}

    <script src="{{ asset('sb-admin-pro/dist/js/scripts.js') }}"></script>
    <script src="{{ asset('bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js') }}"></script>
    @yield('js')
</body>

</html>
