@extends('layouts.master') @section('content')
    <div id="view-story">
        <div class="container">
            <!--Section: Blog v.1-->
            <section class="py-4 text-left text-lg-left">
                <!--Grid row-->
                <div class="row justify-content-center">
                    <!--Grid column-->
                    <div class="col-md-3 d-none d-sm-block table-responsive-sm">
                        <!--Featured image-->
                        <div class="view overlay rounded z-depth-2 waves-light mb-3">
                            <img src="{{$story->image}}" alt="" class="card-img img-fluid">
                        </div>
                    </div>

                    <!--Grid column-->
                    <div class="col-md-9 table-responsive-sm">
                        <a class="purple-text h4-responsive" href="#"><strong>{{$story->title}}</strong></a>
                        <p>Người Đăng:
                            <a>
                                <strong>{{$story->user->username}}</strong>
                            </a>, {{$story->created_at}}.</p>
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-sm waves-effect">Huyền Huyễn</button>
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-sm waves-effect">Kiếm Hiệp</button>
                        <p>Tác Giả:
                            <a>
                                <strong>{{$story->author}}</strong>
                            </a>
                        </p>
                        <button type="button" class="btn btn-outline-danger btn-sm waves-effect">Theo dõi</button>
                        <button type="button" class="btn btn-outline-info btn-sm waves-effect">Số chương: </button>
                        <button type="button" class="btn btn-outline-success btn-sm waves-effect">Lượt xem: <strong>{{$story->getViews()}}</strong></button>

                        <p>Giới thiệu:
                            @if($story->details != 'None')
                                {{$story->details}}
                                <a mdbBtn color="success" class="mb-3 waves-light">Read more ... </a>
                            @else
                                Chưa có nội dung
                            @endif
                        </p>
                        <div class="fb-share-button" data-href="https://truyen24h.site/home" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://truyen24h.site/home" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>

                        {{--<g:plusone size="medium" ></g:plusone>--}}
                    </div>
                    <!--Grid column-->
                </div>
                <hr class="between-sections mt-0">
            </section>
            <section class="list-story">
                <div class="row">
                    <div class="col-md-8" style="background: #eae7e7">
                        <h3 class="text blue-text h2-responsive mt-1">Danh Sách Chương </h3>
                        <div class="list-group list-group-flush" style="background: #eaeaea">
                            @foreach($chapters as $chapter)
                                <a href="{{route('view_chapter',$chapter->getRouteKeyName())}}"
                                   class="list-group-item list-group-item-action waves-effect">

                                    <div class="d-flex justify-content-between align-items-center">
                                <span class="flex-grow-1">
                                <strong>Chương {{$chapter->number}}:</strong> {{$chapter->name}}</span>
                                        <span
                                            class="genre flex-shrink-1 d-none d-sm-block">{{$chapter->updated_at->format('m-d-Y H:i:s')}}</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-4 d-none d-lg-block">
                        <h3 class="text blue-text h2-responsive mt-1">Bảng Xếp Hạng </h3>
                        <div class="row justify-content-center">
                            <div class="col-md-12 table-responsive-sm">
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" style="background: #f7f7f7" data-toggle="tab"
                                           href="#panel5" role="tab">Tuần</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" style="background: #f7f7f7" data-toggle="tab" href="#panel6"
                                           role="tab">Tháng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" style="background: #f7f7f7" data-toggle="tab" href="#panel7"
                                           role="tab">Năm</a>
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
            {{--<section class="full-story">--}}
                {{--<h3 class="text blue-text h2-responsive mt-1">Truyện Cùng Thể Loại </h3>--}}
                {{--<hr class="between-sections mt-0">--}}

            {{--</section>--}}

        </div>
    </div>
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

@endsection
