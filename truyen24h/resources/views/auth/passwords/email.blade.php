@extends('layouts.client.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <section class="form-gradient">
                <div class="card">
                    <div class="header pt-3 blue-gradient">

                        <div class="row d-flex justify-content-center">
                            <h3 class="white-text mb-3 pt-3 font-weight-bold">{{ __('Reset Password') }}</h3>
                        </div>
                
                        {{-- <div class="row mt-2 mb-3 d-flex justify-content-center">
                            <!--Facebook-->
                            <a class="fa-lg p-2 m-2 fb-ic"><i class="fa fa-facebook white-text fa-lg"> </i></a>
                            <!--Twitter-->
                            <a class="fa-lg p-2 m-2 tw-ic"><i class="fa fa-twitter white-text fa-lg"> </i></a>
                            <!--Google +-->
                            <a class="fa-lg p-2 m-2 gplus-ic"><i class="fa fa-google-plus white-text fa-lg"> </i></a>
                        </div> --}}
                

                    </div>

                    <div class="card-body mx-4 mt-4">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                                @csrf
                            <!--Body-->
                            <div class="md-form">
                                {{-- <input type="text" id="Form-email3" class="form-control"> --}}
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                <label for="email">{{ __('E-Mail Address') }}</label>

                            </div>
            

                            <div class="justify-content-center">
                                <div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-grey btn-rounded z-depth-1a">{{ __('Send Password Reset Link') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
