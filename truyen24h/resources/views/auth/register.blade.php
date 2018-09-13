@extends('auth.master')
@section('title', 'Đăng ký tài khoản')
@section('description', 'Đọc truyện online, đọc truyện chữ 24h, truyện hay')
@section('main')
<!--Grid row-->
<div class="row mt-5">
    <!--Grid column-->
    <div class="col-md-7 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
        <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.1s">Đăng ký ngay! </h1>
        <hr class="hr-light wow fadeInLeft" data-wow-delay="0.1s">
        <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.1s">Truyện24h - Đọc truyện online, đọc truyện chữ, truyện
            hay. Website luôn cập nhật những bộ truyện mới thuộc các thể loại đặc sắc như truyện tiên hiệp, truyện kiếm
            hiệp, hay truyện ngôn tình một cách nhanh nhất. Hỗ trợ mọi thiết bị như di động và máy tính bảng.</h6>

    </div>
    <!--Grid column-->
    <!--Grid column-->
    <div class="col-md-5 mb-4">
        <!--Form-->
        <div class="card wow fadeInRight" data-wow-delay="0.1s">
            <div class="card-body">
                <!--Header-->
                <div class="text-center">
                    <h3 class="white-text text-uppercase">{{ __('auth.register') }}</h3>
                    <hr class="hr-light">
                </div>
                <form action="{{ route('register') }}" method="POST" aria-label="{{ __('auth.register') }}">
                    @csrf
                    <!--Body-->
                    <div class="md-form">
                        <i class="fa fa-user prefix white-text"></i>
                        <input id="username" type="text" class="white-text form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                            name="username" value="{{ old('username') }}" required autofocus>
                        @if($errors->has('username'))
                        <span class="text-danger" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                        @endif
                        <label for="username">{{ __('auth.username' )}}</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-envelope prefix white-text active"></i>
                        <input id="email" type="email" class="white-text form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
                        <span class="white-danger" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                        <label for="email">{{ __('auth.email') }}</label>

                    </div>
                    <div class="md-form">
                        <i class="fa fa-lock prefix white-text active"></i>
                        <input id="password" type="password" class="white-text form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                            name="password" required> @if ($errors->has('password'))
                        <span class="white-text" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        <label for="password">{{ __('auth.password') }}</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-lock prefix white-text active"></i>
                        <input id="password-confirm" type="password" class="white-text form-control" name="password_confirmation"
                            required>
                        <label for="password-confirm">{{ __('auth.password-confirm') }}</label>

                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn purple-gradient btn-lg">{{__('auth.register')}}</button>
                        <hr class="hr-light mb-3 mt-4">
                        <div class="inline-ul text-center d-flex justify-content-center">
                            <p class="font-small grey-text d-flex justify-content-end mt-3">{{__('auth.user-exists')}}
                                <a href="{{route('login')}}" class="white-text ml-1 font-weight-bold">
                                    {{ __('auth.login') }}</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--/.Form-->
    </div>
    <!--Grid column-->
</div>
<!--Grid row-->

@endsection