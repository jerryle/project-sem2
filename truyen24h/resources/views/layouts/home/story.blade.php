@extends('layouts.user.master')
@section('content')
    <div class="container">
        <!--Section: Blog v.1-->
        <section class="py-4 text-left text-lg-left">
            <!--Grid row-->
            <div class="row justify-content-center">
                <!--Grid column-->
                <div class="col-md-4 table-responsive-sm">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-2 waves-light mb-3">
                        <img src="https://mdbootstrap.com/img/Photos/Others/img%20(34).jpg" alt="" class="card-img">
                    </div>
                    <p>Người Đăng:
                        <a>
                            <strong>Carine Fox</strong>
                        </a>, 19/08/2018.</p>
                    <p>Thể Loại:
                        <a>
                            <strong>Kiếm Hiệp</strong>
                        </a></p>
                    <p>Tác Giả:
                        <a>
                            <strong>Jerri Le</strong>
                        </a></p>
                </div>

                <!--Grid column-->
                <div class="col-md-8 table-responsive-sm">
                    <h3 class="mb-4 font-weight-bold dark-grey-text">
                        <strong>This is title of the Story!</strong>
                    </h3>
                    <p>Description: Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                        minus id quod maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis
                        debitis aut rerum. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                        minus id quod maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis
                        debitis aut rerum.</p>
                    <a mdbBtn color="success" class="mb-3 waves-light" mdbWavesEffect>Read more ... </a>
                </div>
                <!--Grid column-->
            </div>
        </section>
        <section class="list-story">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="text blue-text h2-responsive mt-1">Danh Sách Chương </h3>
                    <div class="list-group list-group-flush">
                        <a class="list-group-item list-group-item-action waves-effect">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="flex-grow-1"><strong>Chương 1:</strong> Chuyển kiếp sống lại</span>
                                <span class="genre flex-shrink-1 d-none d-sm-block">1 month</span>
                            </div>
                        </a>
                        <a class="list-group-item list-group-item-action waves-effect">
                            <div class="d-flex justify-content-between align-items-center">
                                <span
                                    class="flex-grow-1"><strong>Chương 2:</strong> Ta mang các ngươi đi giết người</span>
                                <span class="genre flex-shrink-1 d-none d-sm-block">1 month</span>
                            </div>
                        </a>
                        <a class="list-group-item list-group-item-action waves-effect">
                            <div class="d-flex justify-content-between align-items-center">
                                <span
                                    class="flex-grow-1"><strong>Chương 3:</strong> Đi lên trên chín tầng trời kia</span>
                                <span class="genre flex-shrink-1 d-none d-sm-block">1 month</span>
                            </div>
                        </a>
                        <a class="list-group-item list-group-item-action waves-effect">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="flex-grow-1"><strong>Chương 4:</strong> Xây dựng lại Ma Vân Môn</span>
                                <span class="genre flex-shrink-1 d-none d-sm-block">1 week</span>
                            </div>
                        </a>
                        <a class="list-group-item list-group-item-action waves-effect">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="flex-grow-1"><strong>Chương 5:</strong> Hai môn tranh chấp, Diệp Thần được lợi</span>
                                <span class="genre flex-shrink-1  d-none d-sm-block">1 week</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 d-none d-lg-block">
                    <h3 class="text blue-text h2-responsive mt-1">Bảng Xếp Hạng </h3>
                    <div class="row justify-content-center">
                        <div class="col-md-12 table-responsive-sm">
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab">Tuần</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#panel6" role="tab">Tháng</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#panel7" role="tab">Năm</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <!--Panel 1-->
                                <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
                                    <div class="list-group list-group-flush">
                                        <a class="list-group-item list-group-item-action waves-effect">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="flex-grow-1">Bắc Minh Thần Công</span>
                                                <span class="genre flex-shrink-1 d-none d-xl-block">Võ Hiệp</span>

                                            </div>
                                            {{-- <div  class="d-flex justify-content-between align-items-center">
                                                <span class="author">Hư Trúc</span>
                                            </div> --}}
                                        </a>
                                        <a class="list-group-item list-group-item-action waves-effect">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="flex-grow-1">Thiên Sơn Chiết Mai Thủ</span>
                                                <span class="genre flex-shrink-1 d-none d-xl-block">Võ Hiệp</span>

                                            </div>
                                            {{-- <div  class="d-flex justify-content-between align-items-center">
                                                <span class="author">Hư Trúc</span>
                                            </div> --}}
                                        </a>
                                        <a class="list-group-item list-group-item-action waves-effect">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="flex-grow-1">Sinh Tử Phù</span>
                                                <span class="genre flex-shrink-1 d-none d-xl-block">Võ Hiệp</span>

                                            </div>
                                            {{-- <div  class="d-flex justify-content-between align-items-center">
                                                <span class="author">Hư Trúc</span>
                                            </div> --}}
                                        </a>
                                    </div>
                                </div>
                                <!--/.Panel 1-->
                                <!--Panel 2-->
                                <div class="tab-pane fade" id="panel6" role="tabpanel">
                                    <div class="list-group list-group-flush">
                                        <a class="list-group-item list-group-item-action waves-effect">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="flex-grow-1">Bắc Minh Thần Công 2</span>
                                                <span class="genre flex-shrink-1 d-none d-xl-block">Võ Hiệp</span>

                                            </div>
                                            {{-- <div  class="d-flex justify-content-between align-items-center">
                                                <span class="author">Hư Trúc</span>
                                            </div> --}}
                                        </a>
                                        <a class="list-group-item list-group-item-action waves-effect">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="flex-grow-1">Thiên Sơn Chiết Mai Thủ 2</span>
                                                <span class="genre flex-shrink-1 d-none d-xl-block">Võ Hiệp</span>


                                            </div>
                                            {{-- <div  class="d-flex justify-content-between align-items-center">
                                                <span class="author">Hư Trúc</span>
                                            </div> --}}
                                        </a>
                                        <a class="list-group-item list-group-item-action waves-effect">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="flex-grow-1">Sinh Tử Phù 2</span>
                                                <span class="genre flex-shrink-1 d-none d-xl-block">Võ Hiệp</span>


                                            </div>
                                            {{-- <div  class="d-flex justify-content-between align-items-center">
                                                <span class="author">Hư Trúc</span>
                                            </div> --}}
                                        </a>
                                    </div>
                                </div>
                                <!--/.Panel 2-->
                                <!--Panel 3-->
                                <div class="tab-pane fade" id="panel7" role="tabpanel">
                                    <div class="list-group list-group-flush">
                                        <a class="list-group-item list-group-item-action waves-effect">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="flex-grow-1">Bắc Minh Thần Công 3</span>
                                                <span class="genre flex-shrink-1 d-none d-xl-block">Võ Hiệp</span>


                                            </div>
                                            {{-- <div  class="d-flex justify-content-between align-items-center">
                                                <span class="author">Hư Trúc</span>
                                            </div> --}}
                                        </a>
                                        <a class="list-group-item list-group-item-action waves-effect">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="flex-grow-1">Thiên Sơn Chiết Mai Thủ 3</span>
                                                <span class="genre flex-shrink-1 d-none d-xl-block">Võ Hiệp</span>


                                            </div>
                                            {{-- <div  class="d-flex justify-content-between align-items-center">
                                                <span class="author">Hư Trúc</span>
                                            </div> --}}
                                        </a>
                                        <a class="list-group-item list-group-item-action waves-effect">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="flex-grow-1">Sinh Tử Phù 3</span>
                                                <span class="genre flex-shrink-1 d-none d-xl-block">Võ Hiệp</span>


                                            </div>
                                            {{-- <div  class="d-flex justify-content-between align-items-center">
                                                <span class="author">Hư Trúc</span>
                                            </div> --}}
                                        </a>
                                    </div>
                                </div>
                                <!--/.Panel 3-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
