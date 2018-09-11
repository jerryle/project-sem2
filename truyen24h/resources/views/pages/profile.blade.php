@extends('layouts.master2',[
    'search' => ''
]) @section('content')

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
                            <div class="card-up grey lighten-1">
                            </div>

                            <!--Avatar-->
                            <div class="avatar ml-4 white">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg"
                                                                   alt="avatar mx-auto white" class="rounded-circle img-fluid">
                            </div>
                                <h4 class="card-title mt-1 ml-5">{{$users->username}}</h4>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
    </main>
    </div>

@endsection
