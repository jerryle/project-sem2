<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | Admin Dashboard</title>

    <!-- Scripts -->
    <script src="{{ asset('mdb/js/jquery-3.2.1.min.js') }}" defer></script>
    <script src="{{ asset('mdb/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('mdb/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('mdb/js/mdb.min.js') }}" defer></script>
    <script src="{{ asset('mdb/js/modules/cards.js') }}" defer></script>
    <script src="{{ asset('js/admin.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('mdb/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('mdb/css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/client.css') }}" rel="stylesheet">
</head>

<body class="fixed-sn navy-blue-skin">
    <div id="app">
        @include('layouts.admin.header')
        <main class="t24-admin-content-m">
            <div class="container-fluid">
                @include('inc.message')
                
                @yield('content')
            </div>
        </main>
        @include('layouts.footer')
    </div>
</body>

</html>