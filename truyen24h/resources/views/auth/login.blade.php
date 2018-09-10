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
    {{--<div class="container my-6">--}}
    {{--<div class="row justify-content-center">--}}
    {{--<div class="col-md-8">--}}
    {{--<section class="form-gradient">--}}
    {{--<div class="card">--}}
    {{--<div class="header pt-3 blue-gradient">--}}

    {{--<div class="row d-flex justify-content-center">--}}
    {{--<h3 class="h3-reponsive white-text mb-3 pt-3 font-weight-bold text-uppercase">{{ __('auth.login') }}</h3>--}}
    {{--</div>--}}

    {{----}}
    {{--<div class="row mt-2 mb-3 d-flex justify-content-center">--}}
    {{--<!--Facebook-->--}}
    {{--<a class="fa-lg p-2 m-2 fb-ic">--}}
    {{--<i class="fa fa-facebook white-text fa-lg"> </i>--}}
    {{--</a>--}}
    {{--<!--Twitter-->--}}
    {{--<a class="fa-lg p-2 m-2 tw-ic">--}}
    {{--<i class="fa fa-twitter white-text fa-lg"> </i>--}}
    {{--</a>--}}
    {{--<!--Google +-->--}}
    {{--<a class="fa-lg p-2 m-2 gplus-ic">--}}
    {{--<i class="fa fa-google-plus white-text fa-lg"> </i>--}}
    {{--</a>--}}
    {{--</div> --}}


    {{--</div>--}}

    {{--<div class="card-body mx-4 mt-4">--}}
    {{--<form method="POST" action="{{ route('login') }}" aria-label="{{ __('auth.login') }}">--}}
    {{--@csrf--}}
    {{--<!--Body-->--}}
    {{--<div class="md-form">--}}
    {{----}}
    {{--<input type="text" id="Form-email3" class="form-control"> --}}
    {{--<input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username"--}}
    {{--value="{{ old('username') }}" required autofocus> @if ($errors->has('username'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('username') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--<label for="username">{{ __('auth.username') }}</label>--}}

    {{--</div>--}}

    {{--<div class="md-form pb-1 pb-md-3">--}}
    {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"--}}
    {{--required> @if ($errors->has('password'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('password') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--<label for="password">{{ __('auth.password') }}</label>--}}

    {{--<div class="form-check my-4">--}}
    {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>--}}

    {{--<label class="form-check-label" for="remember">--}}
    {{--{{ __('auth.rememberme') }}--}}
    {{--</label>--}}
    {{--</div>--}}

    {{--<p class="font-small grey-text d-flex justify-content-end">{{__('auth.forgot')}}--}}
    {{--<a href="{{ route('password.request') }}" class="dark-grey-text ml-1 font-weight-bold">--}}
    {{--{{__('auth.password')}}</a>?</p>--}}


    {{--</div>--}}


    {{--<!--Grid row-->--}}
    {{--<div class="row d-flex align-items-center mb-4">--}}

    {{--<!--Grid column-->--}}
    {{--<div class="col-md-1 col-md-5 d-flex align-items-start">--}}
    {{--<div class="text-center">--}}
    {{--<button type="submit" class="btn btn-grey btn-rounded z-depth-1a">{{ __('auth.login') }}</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--Grid column-->--}}

    {{--<!--Grid column-->--}}
    {{--<div class="col-md-7">--}}
    {{--<p class="font-small grey-text d-flex justify-content-end mt-3">{{ __('auth.user-new') }}--}}
    {{--<a href="{{route('register')}}" class="dark-grey-text ml-1 font-weight-bold">--}}
    {{--{{ __('auth.register') }}</a>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--<!--Grid column-->--}}

    {{--</div>--}}
    {{--<!--Grid row-->--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection
