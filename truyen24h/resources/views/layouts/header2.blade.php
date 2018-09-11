<div class="header2">
    <!--Main Navigation-->
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark unique-color-dark">
            <div class="container">
                <a class="navbar-brand" href="{{route('index')}}"><img src="{{ asset('image/logo2.png') }}" height="30"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
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

    </header>
    <!--Main Navigation-->


    <div class="container py-4 d-flex justify-content-center">
        <form class="form-inline w-responsive" action="{{ route('search') }}" method="GET">

            <input name="s" class="form-control mr-sm-2" style="width:400px;" type="text" placeholder="Nhập tên truyện hoặc tên tác giả"
                aria-label="Nhập tên truyện hoặc tên tác giả" value="{{ isset($s) ? $s : '' }}">

        </form>
    </div>
</div>
