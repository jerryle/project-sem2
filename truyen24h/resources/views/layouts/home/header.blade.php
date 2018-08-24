<nav class="navbar fixed-top navbar-expand-lg navbar-dark blue-gradient scrolling-navbar navbar-laravel">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            {{--{{ config('app.name') }}--}}
            <a href="#" class=""><img src="{{asset('logo.png')}}" alt=""></a>
        </a>
        <div class="">

        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{__('auth.account')}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('login') }}"><i
                                    class="fas fa-sign-in-alt"></i> {{ __('auth.login') }}</a>
                            <a class="dropdown-item" href="{{ route('register') }}"><i
                                    class="fas fa-user-plus"></i> {{ __('auth.register') }}</a>


                        </div>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('auth.login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('auth.register') }}</a>
                    </li> --}}
                @else
                    {{-- <form class="form-inline">
                        <div class="md-form my-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                    </form> --}}
                    {{-- <li class="nav-item avatar dropdown show">
                        <a href="#" class="nav-link dropdown-toggle waves-effect waves-light">
                            <img src="{{asset('admin/img/faces/default.jpg')}}" alt="avatar" class="rounded-circle z-depth-0"> <span class="caret"></span>
                        </a>
                    </li> --}}
                    <li class="nav-item avatar dropdown show">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle waves-effect waves-light" href="#"
                           role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{asset('admin/img/faces/default.jpg')}}" alt="avatar"
                                 class="rounded-circle z-depth-0"> {{ Auth::user()->name }} <span
                                class="fa fa-caret-down"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('auth.logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
