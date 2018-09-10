@extends('layouts.master2') @section('content')
    <div class="container my-0">
        <div class="card">
            <div class="card-header grey-color lighten-1">
                <h1 class="font-weight-light h3-responsive" style="color: #007bff">Thông Tin Cá Nhân </h1>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <div class="card">

                            <!--Card image-->
                            <div class="view">
                                <img src="https://mdbootstrap.com/img/Photos/Others/men.jpg"
                                     class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--/.Card image-->
                            <!--Card content-->
                            <div class="card-body text-left">
                                <!--Title-->
                                <h4 class="card-title text-uppercase">
                                    {{$users->username}}
                                </h4>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Giới Thiệu</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Truyện Theo Dõi</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Bảo Mật Tài Khoản</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
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
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                    </div>
                </div>
            </div>
            </div>
        {{--<div class="card-body">--}}


            {{----}}
            {{--<!-- Content -->--}}
            {{--<h1 class="text black-text font-weight-bold h2-responsive">Thông Tin Cá Nhân </h1>--}}
            {{--<hr class="between-sections mt-0"> --}}
            {{--<div class="row profile">--}}
                {{--<div class="col-md-2 d-none d-lg-block">--}}
                    {{--<div class="list-group">--}}
                        {{--<a href="#" class="list-group-item active waves-effect">--}}
                            {{--Thông tin chung--}}
                        {{--</a>--}}
                        {{--<a href="#" class="list-group-item list-group-item-action waves-effect">Truyện theo dõi</a>--}}
                        {{--<a href="#" class="list-group-item list-group-item-action waves-effect">Nhóm dịch</a>--}}
                        {{--<a href="#" class="list-group-item list-group-item-action waves-effect">Bảo mật tài--}}
                            {{--khoản</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-10 col-md-12">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-3 col-md-4">--}}
                            {{--<!--Card-->--}}
                            {{--<div class="card card-cascade">--}}

                                {{--<!--Card image-->--}}
                                {{--<div class="view view-cascade">--}}
                                    {{--<img src="https://mdbootstrap.com/img/Photos/Others/men.jpg"--}}
                                         {{--class="card-img-top" alt="">--}}
                                    {{--<a>--}}
                                        {{--<div class="mask rgba-white-slight"></div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<!--/.Card image-->--}}

                                {{--<!--Card content-->--}}
                                {{--<div class="card-body card-body-cascade text-center">--}}
                                    {{--<!--Title-->--}}
                                    {{--<h4 class="card-title text-uppercase">--}}
                                        {{--{{$users->username}}--}}
                                    {{--</h4>--}}
                                    {{----}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-4">--}}
                                            {{--<div class="btn btn-elegant btn-sm text-uppercase">Admin</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-4">--}}
                                            {{--<div class="btn btn-elegant btn-sm text-uppercase">Admin</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-4">--}}
                                            {{--<div class="btn btn-elegant btn-sm text-uppercase">Admin</div>--}}
                                        {{--</div>--}}
                                    {{--</div> --}}
                                    {{--<div class="justify-content-center">--}}
                                        {{--<div class="btn btn-elegant btn-sm text-uppercase">Admin</div>--}}
                                        {{--<div class="btn btn-elegant btn-sm text-uppercase">Admin</div>--}}
                                    {{--</div>--}}

                                {{--</div>--}}
                                {{--<!--/.Card content-->--}}

                            {{--</div>--}}
                            {{--<!--/.Card-->--}}
                        {{--</div>--}}


                        {{--<div class="col-lg-9 col-md-8">--}}
                            {{--<!-- Nav tabs -->--}}
                            {{--<ul class="nav nav-tabs md-tabs nav-justified grey mb-2" role="tablist">--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link active" data-toggle="tab" href="#panel5" role="tab">--}}
                                        {{--<i class="fa fa-user"></i> Giới Thiệu</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" data-toggle="tab" href="#panel6" role="tab">--}}
                                        {{--<i class="fas fa-users"></i> Nhóm</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" data-toggle="tab" href="#panel7" role="tab">--}}
                                        {{--<i class="fas fa-edit"></i> Sửa Thông Tin</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                            {{--<!-- Tab panels -->--}}
                            {{--<div class="tab-content">--}}
                                {{--<!--Panel 1-->--}}
                                {{--<div class="tab-pane fade in show active" id="panel5" role="tabpanel">--}}
                                    {{--<br>--}}
                                    {{--<div class="about">--}}
                                        {{--<ul class="list-unstyled">--}}
                                            {{--<li class="sub-title text-body mt-0">--}}
                                                {{--Tên:--}}
                                                {{--<hr class="between-sections mt-0">--}}
                                            {{--</li>--}}
                                            {{--<li class="sub-title text-body mt-2">--}}
                                                {{--Email:--}}
                                                {{--<hr class="between-sections mt-0">--}}
                                            {{--</li>--}}
                                            {{--<li class="sub-title text-body mt-2">--}}
                                                {{--Nhóm:--}}
                                                {{--<hr class="between-sections mt-0">--}}
                                            {{--</li>--}}
                                            {{--<li class="sub-title text-body mt-2">--}}
                                                {{--Ngày Tham Gia:--}}
                                                {{--<hr class="between-sections mt-0">--}}
                                            {{--</li>--}}
                                            {{--<li class="sub-title text-body mt-2">--}}
                                                {{--Giới Tính:--}}
                                                {{--<hr class="between-sections mt-0">--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!--/.Panel 1-->--}}
                                {{--<!--Panel 2-->--}}
                                {{--<div class="tab-pane fade" id="panel6" role="tabpanel">--}}
                                    {{--<br>--}}
                                    {{--<p>Chưa tham gia nhóm nào.</p>--}}
                                {{--</div>--}}
                                {{--<!--/.Panel 2-->--}}
                                {{--<!--Panel 3-->--}}
                                {{--<div class="tab-pane fade" id="panel7" role="tabpanel">--}}
                                    {{--<br>--}}
                                    {{--<div class="md-form">--}}
                                        {{--<i class="far fa-user prefix"></i>--}}
                                        {{--<input type="text" id="inputIconEx2" class="form-control">--}}
                                        {{--<label for="inputIconEx2">Tên: </label>--}}
                                    {{--</div>--}}
                                    {{--<div class="md-form">--}}
                                        {{--<i class="far fa-envelope prefix"></i>--}}
                                        {{--<input type="text" id="inputIconEx2" class="form-control">--}}
                                        {{--<label for="inputIconEx2">E-mail: </label>--}}
                                    {{--</div>--}}
                                    {{--<div class="md-form">--}}
                                        {{--<i class="fas fa-transgender prefix"></i>--}}
                                        {{--<input type="text" id="inputIconEx2" class="form-control">--}}
                                        {{--<label for="inputIconEx2">Giới Tính: </label>--}}
                                    {{--</div>--}}
                                    {{--<div class="md-form">--}}
                                        {{--<i class="far fa-calendar-alt prefix"></i>--}}
                                        {{--<input type="text" id="inputIconEx2" class="form-control">--}}
                                        {{--<label for="inputIconEx2">Ngày Sinh: </label>--}}
                                    {{--</div>--}}
                                    {{--<button type="button" class="btn btn-outline-primary mb-0 waves-effect">Lưu Thông--}}
                                        {{--Tin--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                                {{--<!--/.Panel 3-->--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection
