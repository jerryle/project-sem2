<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{--
    <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta name="description" content="@yield('description')" />

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="@yield('title') - {{ config('app.name') }}">
    <meta itemprop="description" content="@yield('description')">
    {{--
    <meta itemprop="image" content="https://lorempixel.com/400/200/"> --}}

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title') - {{ config('app.name') }}">
    <meta property="og:description" content="@yield('description')">
    {{--
    <meta property="og:image" content="https://lorempixel.com/400/200/"> --}}

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    @yield('header')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    {{--
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('mdb/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('mdb/css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/client.css') }}" rel="stylesheet">
    @yield('stylesheets')
</head>

<body>
    <div id="app">
        @include('layouts.header2', ['search' => $search])
        <main class="t24-content-m">
            <div class="container">
                @yield('content')
            </div>
        </main>
        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('mdb/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('mdb/js/popper.min.js') }}"></script>
    <script src="{{ asset('mdb/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('mdb/js/mdb.min.js') }}"></script>
    <script src="{{ asset('mdb/js/modules/cards.js') }}"></script>

    @yield('scripts')
    @include('inc.message')
</body>

</html>