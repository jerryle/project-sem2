@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="py-4 text-left text-lg-left">
            <h5 class="h5-responsive blue-text text-uppercase font-weight-bold mb-4">Tác giả Phong Thanh Dương</h5>
            <hr class="between-sections mt-0">
            <!--Grid row-->
            <div class="row justify-content-center">
                <!--Grid column-->
                <div class="col-md-3 table-responsive-sm">
                    <!--Featured image-->
                    <div class="view zoom float-left">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" class="img-fluid"
                             alt="">
                    </div>
                </div>

                <!--Grid column-->
                <div class="story-info-box col-md-9 table-responsive-sm">
                    <h4><i class="fas fa-file-alt mr-1"></i>
                        <a class="green-text" href="#">Thôn Thiên Ký</a>
                    </h4>
                    <p><i class="fas fa-pen mr-1"></i>
                        Người đăng: , thời gian:
                    </p>
                    <ul class="nav lighten-4 py-1">
                        <li class="nav-item">
                            <p class="item">Xem: </p>
                        </li>
                        <li class="nav-item">
                            <p class="mr-2 ml-2"> | </p>
                        </li>
                        <li class="nav-item">
                            <p class="item">Số Chương: </p>
                        </li>
                        <li class="nav-item">
                            <p class="mr-2 ml-2"> | </p>
                        </li>
                        <li class="nav-item">
                            <p class="item">Lượt Theo Dõi: </p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
        </div>
    </div>
@endsection
