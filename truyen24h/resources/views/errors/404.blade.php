<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | 404</title>

    <!-- Scripts -->
    <script src="{{ asset('mdb/js/jquery-3.2.1.min.js') }}" defer></script>
    <script src="{{ asset('mdb/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('mdb/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('mdb/js/mdb.min.js') }}" defer></script>
    <script src="{{ asset('mdb/js/modules/cards.js') }}" defer></script>

    @yield('header')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">  --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('mdb/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('mdb/css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/client.css') }}" rel="stylesheet">

    <link href="//fonts.googleapis.com/css?family=Arial:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 72px;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Xin lỗi, hổng tìm thấy điều bạn yêu cầu!</div>
    <a href="{{route('index')}}" class="btn btn-primary waves-effect">Quay về trang chủ</a>
    </div>
</div>
</body>
</html>
