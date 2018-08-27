@extends('layouts.master') @section('content')
<div class="container">
    <div class="row justify-content-center">

        {{-- Status / Alert --}} @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg) @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
                <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </p>
            {{Session::forget('alert-' . $msg)}} @endif @endforeach
        </div>
        {{-- End Status / Alert --}}


    </div>
    <section class="magazine-section my-5 d-none d-lg-block">
        <h4 class="h4-responsive font-weight-bold text-left text-uppercase badge aqua-gradient">Truyện hot
            <i class="fab fa-gripfire"></i>
        </h4>
        <hr class="between-sections mt-0">
        <div class="row row-eq-height mh-100" style="height:400px;">
            <div class="col-md-4 top-1">

                {{--
                <div class="card hoverable">
                    <div class="card-image">
                        <div class="view overlay hm-white-slight z-depth-1">
                            <div id="yourElement"></div>
                            <a href="#">
                                <div class="mask waves-effect"></div>
                            </a>
                        </div>
                    </div>
                    <div class="card-content">
                        <h5>Card title</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id amet, quisquam modi nobis nostrum iusto
                            incidunt dolore assumenda delectus officia quia, sequi eum perspiciatis architecto. Ullam voluptatum,
                            facere nihil quidem.</p>
                    </div>
                </div> --}}


                <div class="card hoverable card-image waves-effect waves-light rgba-white-slight rounded-0" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">
                    <div class="text-white text-center rgba-black-strong pt-3 mt-auto story-title">
                        Thế Giới Thứ Chín
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="t24-top-hot row row-eq-height mh-100" style="height:400px;">
                    <div class="col-md-3">
                        <div class="card hoverablemb card-image waves-effect waves-light rgba-white-slight rounded-0" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">

                            <div class="text-white text-center rgba-black-strong pt-3 mt-auto story-title">
                                Thế Giới Thứ Chín
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card hoverable card-image waves-effect waves-light rgba-white-slight rounded-0" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">

                            <div class="text-white text-center rgba-black-strong pt-3 mt-auto story-title">
                                Thế Giới Thứ Chín
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card hoverable card-image waves-effect waves-light rgba-white-slight rounded-0" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">

                            <div class="text-white text-center rgba-black-strong pt-3 mt-auto story-title">
                                Thế Giới Thứ Chín
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card hoverable card-image waves-effect waves-light rgba-white-slight rounded-0" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">

                            <div class="text-white text-center rgba-black-strong pt-3 mt-auto story-title">
                                Thế Giới Thứ Chín
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card hoverable card-image waves-effect waves-light rgba-white-slight rounded-0" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">

                            <div class="text-white text-center rgba-black-strong pt-3 mt-auto story-title">
                                Thế Giới Thứ Chín
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card hoverable card-image waves-effect waves-light rgba-white-slight rounded-0" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">

                            <div class="text-white text-center rgba-black-strong pt-3 mt-auto story-title">
                                Thế Giới Thứ Chín
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card hoverable card-image waves-effect waves-light rgba-white-slight rounded-0" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">

                            <div class="text-white text-center rgba-black-strong pt-3 mt-auto story-title">
                                Thế Giới Thứ Chín
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card hoverable card-image waves-effect waves-light rgba-white-slight rounded-0" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">

                            <div class="text-white text-center rgba-black-strong pt-3 mt-auto story-title">
                                Thế Giới Thứ Chín
                            </div>

                        </div>
                    </div>
                </div>
                {{--
                <div class="row row-eq-height mh-100" style="height:200px;">
                    <div class="col-md-3">

                        <div class="card hoverable card-image waves-effect waves-light rgba-white-slight" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">

                            <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                                <h5 class="h5-reponsive">Thế Giới Thứ Chín</h5>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card hoverable card-image waves-effect waves-light rgba-white-slight" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">

                            <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                                <h5 class="h5-reponsive">Thế Giới Thứ Chín</h5>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card hoverable card-image waves-effect waves-light rgba-white-slight" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">

                            <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                                <h5 class="h5-reponsive">Thế Giới Thứ Chín</h5>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card hoverable card-image waves-effect waves-light rgba-white-slight" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">

                            <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                                <h5 class="h5-reponsive">Thế Giới Thứ Chín</h5>
                            </div>

                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <section class="story_update my-5">
        <div class="row">
            <div class="col-lg-8">
                <h4 class="h4-responsive font-weight-bold text-left text-uppercase blue-text">Truyện Mới Cập Nhật
                    <i class="fab fa-gripfire"></i>
                </h4>
                {{--
                <hr class="between-sections mt-0"> --}}
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action waves-effect">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="flex-grow-1">Bắc Minh Thần Công</span>
                            <span class="genre flex-shrink-1">Võ Hiệp</span>
                            <span class="w-25 text-right author flex-shrink-1 d-none d-sm-block">Thiên Tàm Thổ Đậu</span>

                        </div>
                        {{--
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="author">Hư Trúc</span>
                        </div> --}}
                    </a>
                    <a class="list-group-item list-group-item-action waves-effect">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="flex-grow-1">Thiên Sơn Chiết Mai Thủ</span>
                            <span class="genre flex-shrink-1">Võ Hiệp</span>
                            <span class="author w-25 text-right flex-shrink-1 d-none d-sm-block">Hư Trúc</span>

                        </div>
                        {{--
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="author">Hư Trúc</span>
                        </div> --}}
                    </a>
                    <a class="list-group-item list-group-item-action waves-effect">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="flex-grow-1">Sinh Tử Phù</span>
                            <span class="genre flex-shrink-1">Võ Hiệp</span>
                            <span class="author w-25 text-right flex-shrink-1 d-none d-sm-block">Hư Trúc</span>

                        </div>
                        {{--
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="author">Hư Trúc</span>
                        </div> --}}
                    </a>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <h4 class="h4-responsive font-weight-bold text-left text-uppercase blue-text">Bảng xếp hạng
                    <i class="fab fa-gripfire"></i>
                </h4>
                {{--
                <hr class="between-sections mt-0"> --}}

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
                                        {{--
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="author">Hư Trúc</span>
                                        </div> --}}
                                    </a>
                                    <a class="list-group-item list-group-item-action waves-effect">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="flex-grow-1">Thiên Sơn Chiết Mai Thủ</span>
                                            <span class="genre flex-shrink-1 d-none d-xl-block">Võ Hiệp</span>

                                        </div>
                                        {{--
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="author">Hư Trúc</span>
                                        </div> --}}
                                    </a>
                                    <a class="list-group-item list-group-item-action waves-effect">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="flex-grow-1">Sinh Tử Phù</span>
                                            <span class="genre flex-shrink-1 d-none d-xl-block">Võ Hiệp</span>

                                        </div>
                                        {{--
                                        <div class="d-flex justify-content-between align-items-center">
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
                                        {{--
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="author">Hư Trúc</span>
                                        </div> --}}
                                    </a>
                                    <a class="list-group-item list-group-item-action waves-effect">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="flex-grow-1">Thiên Sơn Chiết Mai Thủ 2</span>
                                            <span class="genre flex-shrink-1 d-none d-xl-block">Võ Hiệp</span>


                                        </div>
                                        {{--
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="author">Hư Trúc</span>
                                        </div> --}}
                                    </a>
                                    <a class="list-group-item list-group-item-action waves-effect">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="flex-grow-1">Sinh Tử Phù 2</span>
                                            <span class="genre flex-shrink-1 d-none d-xl-block">Võ Hiệp</span>


                                        </div>
                                        {{--
                                        <div class="d-flex justify-content-between align-items-center">
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
                                        {{--
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="author">Hư Trúc</span>
                                        </div> --}}
                                    </a>
                                    <a class="list-group-item list-group-item-action waves-effect">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="flex-grow-1">Thiên Sơn Chiết Mai Thủ 3</span>
                                            <span class="genre flex-shrink-1 d-none d-xl-block">Võ Hiệp</span>


                                        </div>
                                        {{--
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="author">Hư Trúc</span>
                                        </div> --}}
                                    </a>
                                    <a class="list-group-item list-group-item-action waves-effect">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="flex-grow-1">Sinh Tử Phù 3</span>
                                            <span class="genre flex-shrink-1 d-none d-xl-block">Võ Hiệp</span>


                                        </div>
                                        {{--
                                        <div class="d-flex justify-content-between align-items-center">
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
    <section class="story_full my-5">
        <h4 class="h4-responsive font-weight-bold text-left text-uppercase blue-text">Truyện Đã Hoàn Thành
            <i class="fab fa-gripfire"></i>
        </h4>
        <hr class="between-sections mt-0">
        <div class="row justify-content-left row-eq-height">
            <div class="col-lg-2 col-md-3 col-4">
                <div class="card card-image mb-3" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">
                    <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                        <h5 class="h5-reponsive">Thế Giới Thứ Chín</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <div class="card card-image mb-3" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">
                    <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                        <h5 class="h5-reponsive">Thế Giới Thứ Chín</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <div class="card card-image mb-3" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">
                    <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                        <h5 class="h5-reponsive">Thế Giới Thứ Chín</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <div class="card card-image mb-3" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">
                    <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                        <h5 class="h5-reponsive">Thế Giới Thứ Chín</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <div class="card card-image mb-3" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">
                    <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                        <h5 class="h5-reponsive">Thế Giới Thứ Chín</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <div class="card card-image mb-3" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">
                    <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                        <h5 class="h5-reponsive">Thế Giới Thứ Chín</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <div class="card card-image mb-3" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">
                    <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                        <h5 class="h5-reponsive">Thế Giới Thứ Chín</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <div class="card card-image mb-3" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">
                    <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                        <h5 class="h5-reponsive">Thế Giới Thứ Chín</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4">
                <div class="card card-image mb-3" style="background-image: url(https://yycdn.vietnvl.com/novels/26a53158d7.jpg);">
                    <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                        <h5 class="h5-reponsive">Thế Giới Thứ Chín</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection