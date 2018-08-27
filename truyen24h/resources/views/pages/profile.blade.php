@extends('layouts.master') @section('content')
    <div class="card-body">
        <div class="container text-left text-md-left">

            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md">
                    <!-- Content -->
                    <h1 class="text black-text font-weight-bold h2-responsive">Thông Tin Cá Nhân </h1>
                    <hr class="between-sections mt-0">
                </div>
            </div>
            <div class="row profile">
                <div class="col-md-2">
                    <ul class="list-unstyled">
                        <li class="sub-title text-uppercase mt-0">
                            <a class="menu-item pl-1 mt-2" href="#!"><i class="fas fa-arrow-circle-right mr-1"></i>
                                Danh Sách
                            </a>
                            <hr class="between-sections mt-0">
                        </li>
                        <li class="sub-title text-uppercase mt-2">
                            <a class="menu-item pl-1 mt-2" href="#!"><i class="fas fa-arrow-circle-right mr-1"></i>
                                Thể Loại
                            </a>
                            <hr class="between-sections mt-0">
                        </li>
                        <li class="sub-title text-uppercase mt-2">
                            <a class="menu-item pl-1 mt-2" href="#!"><i class="fas fa-arrow-circle-right mr-1"></i>
                                Thông Tin
                            </a>
                            <hr class="between-sections mt-0">
                        </li>
                        <li class="sub-title text-uppercase mt-2">
                            <a class="menu-item pl-1 mt-2" href="#!"><i class="fas fa-arrow-circle-right mr-1"></i>
                                Nhóm
                            </a>
                            <hr class="between-sections mt-0">
                        </li>
                        <li class="sub-title text-uppercase mt-2">
                            <a class="menu-item pl-1 mt-2" href="#!"><i class="fas fa-arrow-circle-right mr-1"></i>
                                Chỉnh Sửa
                            </a>
                            <hr class="between-sections mt-0">
                        </li>
                    </ul>
                </div>
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
                        <div class="card-body card-body-cascade text-left">
                            <!--Title-->
                            <h4 class="card-title">
                                Username: <i>{{$users->username}}</i>
                            </h4>
                            <h5>Rank Admin: {{$users->adminLevel}} </h5>

                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->

                </div>

                <div class="col-md-7">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs md-tabs nav-justified grey" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab">
                                <i class="fa fa-user"></i> Giới Thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel6" role="tab">
                                <i class="fas fa-users"></i> Nhóm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel7" role="tab">
                                <i class="fas fa-edit"></i> Sửa Thông Tin</a>
                        </li>
                    </ul>
                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!--Panel 1-->
                        <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
                            <br>
                            <div class="about">
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
                        <!--/.Panel 1-->
                        <!--Panel 2-->
                        <div class="tab-pane fade" id="panel6" role="tabpanel">
                            <br>
                            <p>Chưa tham gia nhóm nào.</p>
                        </div>
                        <!--/.Panel 2-->
                        <!--Panel 3-->
                        <div class="tab-pane fade" id="panel7" role="tabpanel">
                            <br>
                            <p>Form</p>
                        </div>
                        <!--/.Panel 3-->
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
