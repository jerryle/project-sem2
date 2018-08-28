<!--Double navigation-->
<header>
    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
        <ul class="custom-scrollbar">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light">
                    <a href="{{route('index')}}">
                        {{-- <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center"> --}}
                        <img src="{{ asset('image/logo2.png') }}" class="img-fluid flex-center">
                    </a>
                </div>
            </li>
            <!--/. Logo -->
            <!--Social-->
            {{--
            <li>
                <ul class="social">
                    <li>
                        <a href="#" class="icons-sm fb-ic">
                            <i class="fa fa-facebook"> </i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icons-sm pin-ic">
                            <i class="fa fa-pinterest"> </i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icons-sm gplus-ic">
                            <i class="fa fa-google-plus"> </i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icons-sm tw-ic">
                            <i class="fa fa-twitter"> </i>
                        </a>
                    </li>
                </ul>
            </li> --}}
            <!--/Social-->
            <!--Search Form-->
            <li>
                <form class="search-form" role="search">
                    <div class="form-group md-form mt-0 pt-1 waves-light">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </li>
            <!--/.Search Form-->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                        <li>
                                <a class="waves-effect">
                                        <i class="fas fa-home mr-1"></i>Trang chủ
                                </a>
                               
                            </li>
                    <li>
                        <a data-toggle="collapse" class="collapsible-header waves-effect arrow-r {{$current_menu == 'quan-ly' ? 'active' : ''}}">
                                <i class="fas fa-toolbox mr-1"></i>Quản lý
                            <i class="fa fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="{{route('admin.genre.index')}}" class="waves-effect {{$sub_current_menu == 'genre' ? 'current-menu-item' : ''}}">Thể loại</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.story.index')}}" class="waves-effect {{$sub_current_menu == 'story' ? 'current-menu-item' : ''}}">Truyện</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn mr-auto">
        <p>Trang quản lý | {{ config('app.name') }}</p>
        </div>
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            @yield('button')
            {{--<li class="nav-item">
                <a class="nav-link">
                    <i class="fa fa-envelope"></i>
                    <span class="clearfix d-none d-sm-inline-block">Contact</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <i class="fa fa-comments-o"></i>
                    <span class="clearfix d-none d-sm-inline-block">Support</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <i class="fa fa-user"></i>
                    <span class="clearfix d-none d-sm-inline-block">{{Auth::user()->username}}</span>
                </a>
            </li> --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user mr-1"></i>
                    <span class="clearfix d-none d-sm-inline-block">{{Auth::user()->username}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                    {{-- <a class="dropdown-item" href="#">{{ __('auth.logout') }}</a> --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>{{ __('auth.logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>
            </li>
        </ul>
    </nav>
    <!-- /.Navbar -->
</header>
<!--/.Double navigation-->
