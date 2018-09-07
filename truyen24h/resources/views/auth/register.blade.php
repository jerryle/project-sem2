@extends('layouts.master') @section('content')
    <div class="container my-6">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <section class="form-gradient">
                    <!-- Material form register -->
                    <div class="card">

                        <h5 class="card-header info-color white-text text-center py-4">
                            <strong>Đăng Ký</strong>
                        </h5>

                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">

                            <!-- Form -->
                            <form method="POST" action="{{ route('register') }}" class="text-center"
                                  style="color: #757575;">
                                @csrf
                                <div class="md-form">
                                    <input id="username" type="text"
                                           class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                           name="username"
                                           required autofocus> @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                    @endif
                                    <label for="username">{{ __('auth.username') }}</label>
                                </div>

                                <!-- E-mail -->
                                <div class="md-form mt-0">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}"
                                           required> @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                    @endif
                                    <label for="email">{{ __('auth.email') }}</label>
                                </div>

                                <!-- Password -->
                                <div class="md-form">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password"
                                           required> @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                    @endif
                                    <label for="password">{{ __('auth.password') }}</label>
                                </div>

                                <!-- Phone number -->
                                <div class="md-form">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                    <label for="password-confirm">{{ __('auth.password-confirm') }}</label>
                                </div>

                                <!-- Sign up button -->
                                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                                        type="submit"><strong>Đăng ký</strong>
                                </button>
                                <p>Đã có tài khoản rồi?
                                    <a href="{{route('login')}}" target="_blank"> Đăng nhập</a>.</p>

                            </form>
                            <!-- Form -->

                        </div>

                    </div>
                    <!-- Material form register -->
                </section>
            </div>
        </div>
    </div>


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


    {{--<!--Grid row-->--}}
    {{--<div class="row d-flex align-items-center mb-4">--}}

    {{--<!--Grid column-->--}}
    {{--<div class="col-md-1 col-md-5 d-flex align-items-start">--}}
    {{--<div class="text-center">--}}
    {{--<button type="submit" class="btn btn-grey btn-rounded z-depth-1a">{{ __('auth.register-btn') }}</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--Grid column-->--}}

    {{--<!--Grid column-->--}}
    {{--<div class="col-md-7">--}}
    {{--<p class="font-small grey-text d-flex justify-content-end mt-3">{{__('auth.user-exists')}}--}}
    {{--<a href="{{route('login')}}" class="dark-grey-text ml-1 font-weight-bold">--}}
    {{--{{ __('auth.login') }}</a>--}}
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
