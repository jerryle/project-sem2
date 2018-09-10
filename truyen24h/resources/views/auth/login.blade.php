@extends('auth.master')
@section('main')
<!--Grid row-->
<div class="row mt-5">
    <!--Grid column-->
    <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
        <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.1s">Đăng nhập ngay! </h1>
        <hr class="hr-light wow fadeInLeft" data-wow-delay="0.1s">
        <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.1s">Vui lòng đăng nhập để trải nghiệm và sử dụng đầy đủ chức
            năng của truyện24h - Đọc truyện online, đọc truyện chữ, truyện
            hay. Website luôn cập nhật những bộ truyện mới thuộc các thể loại đặc sắc như truyện tiên hiệp, truyện
            kiếm hiệp, hay truyện ngôn tình một cách nhanh nhất. Hỗ trợ mọi thiết bị như di động và máy tính
            bảng.</h6>

    </div>
    <!--Grid column-->
    <!--Grid column-->
    <div class="col-md-6 col-xl-5 mb-4">
        <!--Form-->
        <div class="card wow fadeInRight" data-wow-delay="0.1s">
            <div class="card-body">
                <!--Header-->
                <div class="text-center">
                    <h3 class="white-text text-uppercase">{{__('auth.login')}}</h3>
                    <hr class="hr-light">
                </div>
                <!--Body-->
                <form action="{{ route('login') }}" method="POST" aria-label="{{ __('auth.login') }}">
                    @csrf
                    <div class="md-form">
                        <i class="fa fa-user prefix white-text"></i>
                        <input id="username" type="text" class="white-text form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                            name="username" value="{{ old('username') }}" required autofocus>
                        @if($errors->has('username'))
                        <span class="text-danger" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                        @endif

                        {{-- <input type="text" id="username" name="username" class="white-text form-control" required
                            autofocus> --}}
                        <label for="username">{{ __('auth.username') }}</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-lock prefix white-text"></i>
                        {{-- <input type="password" id="password" name="password" class="white-text form-control"> --}}
                        <input id="password" type="password" class="white-text form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                            name="password" required> @if ($errors->has('password'))
                        <span class="text-danger" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        <label for="password">{{ __('auth.password') }}</label>

                        <div class="form-check my-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old( 'remember') ? 'checked' : '' }}>
                
                            <label class="form-check-label" for="remember">
                                {{ __('auth.rememberme') }}
                            </label>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-indigo">{{ __('auth.login')}}</button>
                        <hr class="hr-light mb-3 mt-4">
                        <div class="inline-ul text-center d-flex justify-content-center">
                            <p class="font-small grey-text d-flex justify-content-end mt-3">{{ __('auth.user-new') }}
                                <a href="{{route('register')}}" class="white-text ml-1 font-weight-bold">
                                    {{ __('auth.register') }}</a>
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

@endsection