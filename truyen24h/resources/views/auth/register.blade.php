@extends('auth.master')
@section('main')
    <!--Grid row-->
    <div class="row mt-5">
        <!--Grid column-->
        <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
            <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Đăng ký ngay! </h1>
            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
            <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Truyện24h - Đọc truyện online, đọc truyện chữ, truyện hay. Website luôn cập nhật những bộ truyện mới thuộc các thể loại đặc sắc như truyện tiên hiệp, truyện kiếm hiệp, hay truyện ngôn tình một cách nhanh nhất. Hỗ trợ mọi thiết bị như di động và máy tính bảng.</h6>

        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-6 col-xl-5 mb-4">
            <!--Form-->
            <div class="card wow fadeInRight" data-wow-delay="0.3s">
                <div class="card-body">
                    <!--Header-->
                    <div class="text-center">
                        <h3 class="white-text"> Đăng Ký</h3>
                        <hr class="hr-light">
                    </div>
                    <!--Body-->
                    <div class="md-form">
                        <i class="fa fa-user prefix white-text active"></i>
                        <input type="text" id="form3" class="white-text form-control">
                        <label for="form3" class="active">Tên tài khoản</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-envelope prefix white-text active"></i>
                        <input type="email" id="form2" class="white-text form-control">
                        <label for="form2" class="active">Email</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-lock prefix white-text active"></i>
                        <input type="password" id="form4" class="white-text form-control">
                        <label for="form4">Mật khẩu</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-lock prefix white-text active"></i>
                        <input type="password" id="form4" class="white-text form-control">
                        <label for="form4">Nhập lại mật khẩu</label>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-indigo">Gửi Thông Tin</button>
                        <hr class="hr-light mb-3 mt-4">
                        <div class="inline-ul text-center d-flex justify-content-center">
                            <!--Grid column-->
                            <div class="col-md-7">
                                <p class="font-small grey-text d-flex justify-content-end mt-3">Đã có tài khoản rồi?
                                    <a href="{{route('register')}}" class="white-text ml-1 font-weight-bold">
                                        Đăng nhập</a>
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
    <!--Grid row-->
{{--<div class="container my-6">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<section class="form-gradient">--}}
                {{--<div class="card">--}}
                    {{--<div class="header pt-3 blue-gradient">--}}

                        {{--<div class="row d-flex justify-content-center">--}}
                            {{--<h3 class="h3-reponsive white-text mb-3 pt-3 font-weight-bold text-uppercase">{{ __('auth.register') }}</h3>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<div class="card-body mx-4 mt-4">--}}
                        {{--<form method="POST" action="{{ route('register') }}" aria-label="{{ __('auth.register') }}">--}}
                            {{--@csrf--}}
                            {{--<!--Body-->--}}
                            {{--<div class="md-form">--}}
                                {{--<input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username"--}}
                                    {{--required autofocus> @if ($errors->has('username'))--}}
                                {{--<span class="invalid-feedback" role="alert">--}}
                                    {{--<strong>{{ $errors->first('username') }}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                                {{--<label for="username">{{ __('auth.username') }}</label>--}}
                            {{--</div>--}}

                            {{--<div class="md-form">--}}
                                {{----}}
                                {{--<input type="text" id="Form-email3" class="form-control"> --}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"--}}
                                    {{--required> @if ($errors->has('email'))--}}
                                {{--<span class="invalid-feedback" role="alert">--}}
                                    {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                                {{--<label for="email">{{ __('auth.email') }}</label>--}}

                            {{--</div>--}}

                            {{--<div class="md-form">--}}
                                {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"--}}
                                    {{--required> @if ($errors->has('password'))--}}
                                {{--<span class="invalid-feedback" role="alert">--}}
                                    {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                                {{--<label for="password">{{ __('auth.password') }}</label>--}}
                            {{--</div>--}}

                            {{--<div class="md-form">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                                {{--<label for="password-confirm">{{ __('auth.password-confirm') }}</label>--}}

                            {{--</div>--}}

                                <!-- Sign up button -->
                                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                                        type="submit"><strong>Đăng ký</strong>
                                </button>
                                <p>Đã có tài khoản rồi?
                                    <a href="{{route('login')}}" target="_blank"> Đăng nhập</a>.</p>


@endsection
