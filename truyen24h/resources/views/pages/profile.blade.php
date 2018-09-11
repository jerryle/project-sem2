@extends('layouts.master2',[
    'search' => ''
]) @section('content')

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
                        <img src="https://mdbootstrap.com/img/Photos/Others/men.jpg" class="card-img-top" alt="">
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
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                    aria-controls="v-pills-home" aria-selected="true">Giới Thiệu</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                    aria-controls="v-pills-profile" aria-selected="false">Truyện Theo Dõi</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                    aria-controls="v-pills-messages" aria-selected="false">Bảo Mật Tài Khoản</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                    aria-controls="v-pills-settings" aria-selected="false">Settings</a>
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

@endsection