@extends('layouts.user.master') @section('content')
<div class="container my-6">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <section class="form-gradient">
                <div class="card">
                    <div class="header pt-3 blue-gradient">

                        <div class="row d-flex justify-content-center">
                            <h3 class="white-text mb-3 pt-3 font-weight-bold">{{ __('Reset Password') }}</h3>
                        </div>

                        {{--
                        <div class="row mt-2 mb-3 d-flex justify-content-center">
                            <!--Facebook-->
                            <a class="fa-lg p-2 m-2 fb-ic">
                                <i class="fa fa-facebook white-text fa-lg"> </i>
                            </a>
                            <!--Twitter-->
                            <a class="fa-lg p-2 m-2 tw-ic">
                                <i class="fa fa-twitter white-text fa-lg"> </i>
                            </a>
                            <!--Google +-->
                            <a class="fa-lg p-2 m-2 gplus-ic">
                                <i class="fa fa-google-plus white-text fa-lg"> </i>
                            </a>
                        </div> --}}


                    </div>

                    <div class="card-body mx-4 mt-4">
                        <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                            @csrf
                            <!--Body-->
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="md-form">
                                {{--
                                <input type="text" id="Form-email3" class="form-control"> --}}
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}"
                                    required autofocus> @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                <label for="email">{{ __('E-Mail Address') }}</label>

                            </div>

                            <div class="md-form">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                    required> @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                                <label for="password">{{ __('Password') }}</label>
                            </div>

                            <div class="md-form">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                            </div>


                            <!--Grid row-->
                            <div class="row d-flex align-items-center mb-4">

                                <!--Grid column-->
                                <div class="col-md-1 col-md-5 d-flex align-items-start">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-grey btn-rounded z-depth-1a">{{ __('Reset Password') }}</button>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-7">
                                    <p class="font-small grey-text d-flex justify-content-end mt-3">Already have an account?
                                        <a href="{{route('login')}}" class="dark-grey-text ml-1 font-weight-bold">
                                        {{ __('Login') }}</a>
                                    </p>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->
                        </form>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection