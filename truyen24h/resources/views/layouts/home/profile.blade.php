@extends('layouts.user.master')
@section('content')
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

                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3">

                                <!--Card-->
                                <div class="card card-cascade mt-1">

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
                                        <h4 class="card-title"><strong>Billy Cullen</strong></h4>
                                        <h5>Web developer</h5>

                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex, recusandae. Facere modi
                                            sunt, quod quibusdam.
                                        </p>

                                    </div>
                                    <!--/.Card content-->

                                </div>
                                <!--/.Card-->

                            </div>

                        <div class="col-md-9">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Tên Người Dùng:</th>
                                    <th>123456</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Tên:</th>
                                    <td>Mark</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email:</th>
                                    <td>truyen@24h.vn</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ngày Đăng Ký:</th>
                                    <td>20/10/2018</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nhóm:</th>
                                    <td>Chưa tham gia</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sinh Ngày:</th>
                                    <td>20/10/1999</td>
                                </tr>
                                </tbody>
                            </table>
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
