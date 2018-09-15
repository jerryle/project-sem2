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
                    <div class="col-md-3 table-responsive-sm">
                        @include('layouts.ucp.sidebar')
                    </div>
                    <div class="col-md-9 table-responsive-sm">
                        <!--Card-->
                        <div class="card testimonial-card">

                            <!--Background color-->
                            <div class="card-up purple-gradient lighten-1">
                            </div>

                            <!--Avatar-->
                            <div class="avatar ml-4 white">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg"
                                     alt="avatar mx-auto white" class="rounded-circle img-fluid">
                            </div>
                            <div>
                                <h4 class="card-title mt-1 ml-5">{{$users->username}}</h4>
                            </div>
                        </div>
                        <div class="about text-left">
                            <ul class="list-unstyled">
                                <li class="sub-title text-body mt-0">
                                    Tên:
                                    <hr class="between-sections mt-0">
                                </li>
                                <li class="sub-title text-body mt-2">
                                    Email:
                                    <hr class="between-sections mt-0">
                                </li>
                                <li class="sub-title text-body mt-2">
                                    Nhóm:
                                    <hr class="between-sections mt-0">
                                </li>
                                <li class="sub-title text-body mt-2">
                                    Ngày Tham Gia:
                                    <hr class="between-sections mt-0">
                                </li>
                                <li class="sub-title text-body mt-2">
                                    Giới Tính:
                                    <hr class="between-sections mt-0">
                                </li>
                            </ul>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>

            </main>
    </div>

@endsection
