@extends('layouts.user.master') @section('content')
<div class="card-body">
    <div class="container-fluid text-left text-md-left">

        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md mt-md-0 mt-1">
                <!-- Content -->
                <h1 class="text blue-text h2-responsive">Thông Tin Cá Nhân </h1>
                <hr class="between-sections mt-0">
            </div>
        </div>
        <div class="row profile-photo">
            <div class="col-md-2">
                <nav class="nav flex-column lighten-3 py-4 mb-r font-weight-bold z-depth-1">
                    <a class="nav-link active indigo-text" href="#">Active</a>
                    <a class="nav-link indigo-text" href="#">Link 1</a>
                    <a class="nav-link indigo-text" href="#">Link 2</a>
                    <a class="nav-link indigo-text" href="#">Link 3</a>
                </nav>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3">

                        <!--Card-->
                        <div class="card card-cascade">

                            <!--Card image-->
                            <div class="view view-cascade">
                                <img src="https://mdbootstrap.com/img/Photos/Others/men.jpg" class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body card-body-cascade text-center">
                                <!--Title-->
                                <h4 class="card-title">
                                    <strong>{{$users->name}}</strong>
                                </h4>
                                <h5>Rank Admin: {{$users->adminLevel}} </h5>

                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex, recusandae. Facere
                                    modi sunt, quod quibusdam.
                                </p>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>

                    <div class="col-md-9">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs md-tabs nav-justified blue-gradient" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab">
                                    <i class="fa fa-user"></i> Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel6" role="tab">
                                    <i class="fa fa-heart"></i> Follow</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel7" role="tab">
                                    <i class="fa fa-envelope"></i> Mail</a>
                            </li>
                        </ul>
                        <!-- Tab panels -->
                        <div class="tab-content">
                            <!--Panel 1-->
                            <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
                                <br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                    doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur.
                                    Tempora, placeat ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel6" role="tabpanel">
                                <br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                    doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur.
                                    Tempora, placeat ratione porro voluptate odit minima.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                    doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur.
                                    Tempora, placeat ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 2-->
                            <!--Panel 3-->
                            <div class="tab-pane fade" id="panel7" role="tabpanel">
                                <br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta
                                    doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur.
                                    Tempora, placeat ratione porro voluptate odit minima.</p>
                            </div>
                            <!--/.Panel 3-->
                        </div>

                        <div>
                            <button class="btn blue-gradient">Cập Nhật Thông Tin</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection