@extends('layouts.master') @section('content')
<div class="container">

    <section class="magazine-section my-5 d-none d-lg-block">
        <h4 class="h4-responsive font-weight-bold text-left text-uppercase badge aqua-gradient">Truyện hot
            <i class="fab fa-gripfire"></i>
        </h4>
        <hr class="between-sections mt-0">
        <div class="row row-eq-height mh-100" style="height:400px;">
            @foreach($top_hot_stories as $story) @if($loop->first)

            <div class="col-md-4 top-1">
                <a href="{{route('view_story',$story->getRouteKeyName())}}">
                    <div class="card hoverable card-image waves-effect waves-light rgba-white-slight rounded-0" style="background-image: url({{$story->image}});">
                        <div class="text-white text-center rgba-black-strong pt-3 mt-auto story-title">
                            {{$story->title}}
                        </div>
                    </div>
            </div>
            </a>
            @break @endif @endforeach
            <div class="col-md-8">
                <div class="t24-top-hot row row-eq-height mh-100" style="height:400px;">
                    @foreach($top_hot_stories as $story) @if($loop->index != 0)

                    <div class="col-md-3">
                        <a href="{{route('view_story',$story->getRouteKeyName())}}">
                            <div class="card hoverable card-image waves-effect waves-light rgba-white-slight rounded-0" style="background-image: url({{$story->image}});">

                                <div class="text-white text-center rgba-black-strong pt-3 mt-auto story-title">
                                    {{$story->title}}
                                </div>

                            </div>
                    </div>
                    </a>
                    @endif @endforeach
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
                                    @foreach($top_d_stories as $story)
                                <a class="list-group-item list-group-item-action waves-effect" href="{{route('view_story',$story->getRouteKeyName())}}">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="flex-grow-1">{{$story->title}}</span>
                                            <span class="genre flex-shrink-1 d-none d-xl-block">Võ Hiệp</span>

                                        </div>
                                        {{--
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="author">Hư Trúc</span>
                                        </div> --}}
                                    </a>
                                    @endforeach
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
            @foreach($stories as $story)
            <div class="col-lg-2 col-md-3 col-4">
                <a href="{{route('view_story',$story->getRouteKeyName())}}">
                    <div class="card card-image mb-3" style="background-image: url({{$story->image}});">
                        <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                            <h5 class="h5-reponsive">{{$story->title}}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>
    </div>
    @endsection