<div class="top-nav navbar pt-6 navbar-expand-sm">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">
            <img src="{{ asset('image/logo.png') }}"  height="40">
        </a>
        {{--
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2"
            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button> --}} {{--
        <div class="collapse navbar-collapse" id="navbarSupportedContent2"> --}}

            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav justify-content-center mr-auto">

            </ul>

            {{--
            <input class="form-control" type="text" placeholder="Nhập tên truyện hoặc tên tác giả" aria-label="Nhập tên truyện hoặc tên tác giả"> --}}
            <form class="form-inline t24-search">
                @csrf
                <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Nhập tên truyện hoặc tên tác giả" aria-label="Nhập tên truyện hoặc tên tác giả">
                </div>
            </form>
            {{--
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control" type="search" placeholder="Nhập tên truyện hoặc tên tác giả" aria-label="Search">
                <button class="btn btn-outline-blue btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
            </form> --}}
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <!-- Authentication Links -->
                @guest

                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary waves-effect" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt mr-1"></i>{{__('auth.login')}}
                    </a>

                    {{--
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}} {{--
                        <a class="dropdown-item" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i> {{ __('auth.login') }}</a>
                        <a class="dropdown-item" href="{{ route('register') }}">
                            <i class="fas fa-user-plus"></i> {{ __('auth.register') }}</a> --}} {{-- </div> --}}
                </li>
                {{--
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="{{ route('register') }}">
                        <i class="fas fa-address-card mr-1"></i>{{__('auth.register')}}
                    </a>

                </li> --}} @else

                <li class="nav-item">
                    <a class="nav-link btn btn-outline-info waves-effect px-4" href="{{route('profile',Auth::user()->username)}}" alt="Hồ sơ cá nhân"
                        title="Hồ sơ cá nhân">
                        <i class="fas fa-user-circle mr-1"></i>{{ Auth::user()->username }}
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary waves-effect px-3" href="{{ route('logout') }}" alt="Đăng xuất" title="Đăng xuất"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                {{--
                <li class="nav-item avatar dropdown show">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle waves-effect waves-light" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src="{{asset('admin/img/faces/default.jpg')}}" alt="avatar" class="rounded-circle z-depth-0"> {{ Auth::user()->username }}
                        <span class="fa fa-caret-down"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="{{route('profile',Auth::user()->username)}}" class="dropdown-item">
                            {{ __('navbar.profile')}}
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            {{ __('auth.logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li> --}} @endguest
            </ul>
            {{-- </div> --}}
    </div>
</div>
<div class="main-navbar mt-auto">
    <nav class="navbar navbar-expand-sm navbar-dark unique-color-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('index')}}">Trang chủ {{--
                            <span class="sr-only">(current)</span> --}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thể Loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Truyện HOT</a>
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-heart mr-1"></i>Truyện Theo Dõi
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-file-upload mr-1"></i>Đăng Truyện
                        </a>

                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>
<ol class="breadcrumb navbar-breadcrumb">
    <div class="container breadcrumb-container">
        Đọc truyện online, đọc truyện chữ, truyện full, truyện hay. Tổng hợp đầy đủ và cập nhật liên tục. 
    </div>
</ol>