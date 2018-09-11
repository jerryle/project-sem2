<div class="header2">
    <div class="main-navbar mt-auto">
        <nav class="navbar navbar-expand-md navbar-dark unique-color-dark">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="navbar-brand" href="{{route('index')}}">
                        <img src="{{ asset('image/logo2.png') }}" height="30">
                    </a>
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tiên Hiệp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Huyền Huyễn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Võ Hiệp</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container py-4 d-flex justify-content-center">
        <form class="form-inline" action="{{ route('search') }}" method="GET">
            
            <input name="s" class="form-control mr-sm-2" style="width:400px;" type="text" placeholder="Nhập tên truyện hoặc tên tác giả"
                aria-label="Nhập tên truyện hoặc tên tác giả" value="{{ isset($s) ? $s : '' }}">

        </form>
    </div>
</div>