@extends('layouts.user.master')
@section('content')
    <div class="card-body">
        <div class="container text-left text-md-left">

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
                <div class="col-md-3">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg" alt="Avatar" class="avatar">
                    <p>Username</p>
                </div>
                <div class="col-md-9">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID:</th>
                            <th>12345</th>
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
@endsection
