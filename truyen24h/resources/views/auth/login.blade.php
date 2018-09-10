@extends('auth.master')
@section('main')
    <!--Grid row-->
    <div class="row mt-5">
        <!--Grid column-->
        <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
            <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Đăng nhập ngay! </h1>
            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
            <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Vui lòng đăng nhập để trải nghiệm và sử dụng đầy đủ chức năng của truyện24h - Đọc truyện online, đọc truyện chữ, truyện
                hay. Website luôn cập nhật những bộ truyện mới thuộc các thể loại đặc sắc như truyện tiên hiệp, truyện
                kiếm hiệp, hay truyện ngôn tình một cách nhanh nhất. Hỗ trợ mọi thiết bị như di động và máy tính
                bảng.</h6>

        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-6 col-xl-5 mb-4">
            <!--Form-->
            <div class="card wow fadeInRight" data-wow-delay="0.3s">
                <div class="card-body">
                    <!--Header-->
                    <div class="text-center">
                        <h3 class="white-text"> Đăng Nhập</h3>
                        <hr class="hr-light">
                    </div>
                    <!--Body-->
                    <div class="md-form">
                        <i class="fa fa-user prefix white-text active"></i>
                        <input type="text" id="form3" class="white-text form-control">
                        <label for="form3" class="active">Tên tài khoản</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-lock prefix white-text active"></i>
                        <input type="password" id="form4" class="white-text form-control">
                        <label for="form4">Mật khẩu</label>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-indigo">Đăng nhập</button>
                        <hr class="hr-light mb-3 mt-4">
                        <div class="inline-ul text-center d-flex justify-content-center">
                            <!--Grid column-->
                            <div class="col-md-7">
                            <p class="font-small grey-text d-flex justify-content-end mt-3">Chưa có tài khoản?
                            <a href="{{route('register')}}" class="white-text ml-1 font-weight-bold">
                            Đăng ký</a>
                            </p>
                            </div>
                            <!--Grid column-->
                        </div>
                    </div>
                </div>
            </div>
            <!--/.Form-->
        </div>
        <!--Grid column-->
    </div>

@endsection
