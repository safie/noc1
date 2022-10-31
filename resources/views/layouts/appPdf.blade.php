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
    <link href="{{ asset('sb-admin-pro/dist/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('litepicker/dist/css/litepicker.css') }}" rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" /> --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('/pic/favicon.ico') }}" />
    @yield('css')
</head>

<body>
    <!-- Main page content-->
    <main>
        @yield('content')
    </main>

    @yield('js')
</body>

</html>
