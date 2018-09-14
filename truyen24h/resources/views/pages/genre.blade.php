@extends('layouts.master2')
@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="py-4 text-left text-lg-left">
                <h5 class="h5-responsive black-text text-uppercase font-weight-bold mb-4">Truyện tiên hiệp</h5>
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
                        <p><a class="green-text h4-responsive" href="#">Thôn Thiên Ký</a>
                            <strong class="mr-2 ml-2"> - </strong> Tác giả:
                        </p>
                        <p><i class="fas fa-pen mr-1"></i>
                            Người đăng:  <i class="far fa-clock mr-1"></i>thời gian:
                        </p>

                        <ul class="nav lighten-4 py-0">
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
        <div class="detail col-md-3" style="background: #f7f3f3">
            <p class="mt-3"><h5><strong>Truyện tiên hiệp</strong></h5> thường kể về quá trình tu luyện và khám phá thế giới tu sĩ thần tiên đầy bí ẩn của nhân vật chính.

            Trong truyện tiên hiệp thường chia ra những cấp bậc tu luyện trước khi thành tiên như sau:

            Luyện Khí
            Khai Quang
            Trúc Cơ
            Ích Cốc.</p>
        </div>
    </div>
    @endsection
