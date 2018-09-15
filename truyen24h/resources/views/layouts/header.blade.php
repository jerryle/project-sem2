<div class="top-nav navbar pt-6 navbar-expand-md">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">
            <img src="{{ asset('image/logo.png') }}" height="40">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
            aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <i class="fas fa-search"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">

            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav justify-content-center mr-auto">

            </ul>

            {{--
            <input class="form-control" type="text" placeholder="Nhập tên truyện hoặc tên tác giả" aria-label="Nhập tên truyện hoặc tên tác giả">
            --}}
            <form class="form-inline t24-search" action="{{ route('search') }}" method="GET">
                <div class="md-form my-0">
                    <input name="s" class="form-control mr-sm-2" type="text" placeholder="Nhập tên truyện hoặc tên tác giả"
                        aria-label="Nhập tên truyện hoặc tên tác giả">
                </div>

            </form>
            {{--
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control" type="search" placeholder="Nhập tên truyện hoặc tên tác giả" aria-label="Search">
                <button class="btn btn-outline-blue btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
            </form> --}}
            <!-- Right Side Of Navbar -->

        </div>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <!-- Authentication Links -->
            @guest

            <li class="nav-item">
                <a class="nav-link btn btn-outline-primary waves-effect" href="{{ route('login') }}">
                    <i class="fas fa-sign-in-alt mr-1"></i>{{__('auth.login')}}
                </a>
            </li>
            @else

            <li class="nav-item">
                <a class="nav-link btn btn-outline-info btn-sm waves-effect px-4" href="{{route('profile',Auth::user()->username)}}"
                    alt="Hồ sơ cá nhân" title="Hồ sơ cá nhân">
                    <i class="fas fa-user-circle mr-1"></i>
                    <p class="d-none d-lg-inline">{{ Auth::user()->username }}</p>
                </a>
            </li>
            @if(auth()->user()->notifications->count())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn btn-outline-primary btn-sm px-3 " id="navbarDropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-globe"></i>
                    @if(auth()->user()->unreadNotifications->count())
                    <span class="badge badge-pill badge-danger">{{auth()->user()->unreadNotifications->count()}}</span>
                    @endif
                </a>
                @if(auth()->user()->notifications->count())
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                    @foreach(auth()->user()->unreadNotifications as $noti)

                    <a href="{{route('user.noti.mark_read', $noti->id)}}" class="dropdown-item">{{$noti->data['data']}}*</a>

                    @endforeach
                    @foreach(auth()->user()->readNotifications as $noti)

                    <a class="dropdown-item">{{$noti->data['data']}}</a>

                    @endforeach

                </div>
                @endif
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link btn btn-outline-primary btn-sm px-3 ">
                    <i class="fas fa-globe"></i>
                </a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link btn btn-outline-primary btn-sm waves-effect px-3" href="{{ route('logout') }}" alt="Đăng xuất"
                    title="Đăng xuất" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @endguest
        </ul>

    </div>
</div>
<div class="main-navbar mt-auto">
    <nav class="navbar navbar-expand-md navbar-dark unique-color-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <i class="fas fa-bars"></i>
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
            </div>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto nav-flex-icons">
                @if(Auth::check())
                @if(Auth::user()->admin_level > 0)

                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.index')}}" alt="Admin CP" title="Admin CP">
                        <i class="fas fa-skull mr-1"></i>
                        <p class="d-none d-md-inline">Admin CP</p>
                    </a>

                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="#" alt="Tủ truyện" title="Tủ truyện">
                        <i class="fas fa-heart mr-1"></i>
                        <p class="d-none d-sm-inline">Truyện Theo Dõi</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/story/create" alt="Đăng truyện" title="Đăng truyện">
                        <i class="fas fa-file-upload mr-1"></i>
                        <p class="d-none d-sm-inline">Đăng Truyện</p>
                    </a>

                </li>
                @endif
            </ul>
        </div>
    </nav>
</div>
<ol class="breadcrumb navbar-breadcrumb">
    <div class="container breadcrumb-container">
        Đọc truyện online, đọc truyện chữ, truyện full, truyện hay. Tổng hợp đầy đủ và cập nhật liên tục.
    </div>
</ol>