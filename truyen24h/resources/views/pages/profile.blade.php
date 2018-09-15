@extends('layouts.master2',[
    'search' => ''
])

@section('title', 'Trang cá nhân')
@section('description', 'Trang cá nhân - Truyen24h')
@section('content')

    <div id="app">
        <main class="my-3" style="min-height:500px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        @include('layouts.ucp.sidebar')
                    </div>
                    <div class="col-md-9">
                        
                        @yield('content')
                    </div>
                </div>
            </div>

            </main>
    </div>

@endsection
