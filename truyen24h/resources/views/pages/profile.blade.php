@extends('layouts.master2',[
    'search' => ''
]) @section('content')

    <div id="app">
        <main class="my-5" style="min-height:500px;">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        @include('pages.sidebar')
                    </div>
                    <div class="col-9">
                        <!--Card-->
                        <div class="card testimonial-card">

                            <!--Background color-->
                            <div class="card-up grey lighten-1">
                            </div>

                            <!--Avatar-->
                            <div class="avatar mx-auto white"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg"
                                                                   alt="avatar mx-auto white" class="rounded-circle img-fluid">
                            </div>

                            <div class="card-body">
                                <!--Name-->
                                <h4 class="card-title mt-1">{{$users->username}}</h4>
                                <hr>


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

                            </div>
                            <!--Card-->
                        {{--@yield('content')--}}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
