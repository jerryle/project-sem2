@extends('layouts.master')
@section('title')
{{$story->title .' - '. $story->author}}
@endsection
@section('description')
{{'Đọc truyện '. $story->title .' - '. $story->author . ' online. Đơn giản và dễ sử dụng.'}}
@endsection

@section('content')
<div id="view-story">
    <div class="container">
        <!--Section: Blog v.1-->
        <section class="header-story py-4 text-left text-lg-left">
            <!--Grid row-->
            <div class="row justify-content-center">
                <!--Grid column-->
                <div class="col-md-3 table-responsive-sm">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-2 waves-light mb-3">
                        <img src="{{$story->image}}" alt="" class="card-img img-fluid">
                    </div>
                </div>

                <!--Grid column-->
                <div class="col-md-9 table-responsive-sm">
                    <h3 class="mb-4 font-weight-bold purple-text">
                        <strong>{{$story->title}}</strong>
                    </h3>
                    <p>Người Đăng:
                        <a>
                            <strong class="blue-text">{{$story->user->username}}</strong>
                        </a>, {{$story->created_at}}.</p>
                    <p>Tác Giả:
                        <a>
                            <strong class="blue-text">{{$story->author}}</strong>
                        </a>
                    </p>
                    <div class="d-flex justify-content-start">
                        @foreach($story->genres as $sg)
                        <a class="btn btn-outline-primary btn-rounded btn-sm waves-effect">{{$sg->name}}</a>
                        @endforeach
                    </div>


                    {{--<p>--}}
                        {{--@if($story->details != 'None')--}}
                        {{--{{$story->details}}--}}
                        {{--@else--}}
                        {{--Chưa có nội dung--}}
                        {{--@endif--}}
                        {{--</p>--}}
                    {{--<a mdbBtn color="success" class="mb-3 waves-light">Read more ... </a>--}}
                    <div class="d-flex justify-content-start lighten-4 py-4">

                        <p class="item">Xem: <strong>{{$story->getViews()}}</strong></p>
                        <em> | </em>
                        <p class="item">Số Chương: <strong>{{$story->chapters->count()}}</strong></p>
                        <em> | </em>
                    <p class="item">Lượt Theo Dõi: <strong>{{$story->followUsers->count()}}</strong></p>

                    </div>

                    <div class="d-flex justify-content-start">

                        <a href="{{route('view_chapter',$story->chaptersInverse()->first()->getRouteKeyName())}}">
                            <div class="btn btn-rounded btn-sm btn-info">Đọc Từ Đầu</div>
                        </a>
                        @if(auth()->check())
                        <a href="{{route('user.follow_story',$story->getRouteKeyName())}}">
                            <div class="btn btn-rounded btn-sm btn-danger">
                                <i class="fa fa-heart mr-1"></i>{{ !auth()->user()->followStories->contains($story->id) ? 'Theo Dõi' : 'Hủy Theo Dõi'}}
                            </div>
                        </a>
                        @endif
                    </div>

                </div>
                <!--Grid column-->


            </div>
            <hr class="between-sections mt-0">
        </section>
        <section class="list-story">
            <div class="row">
                <div class="col-md-8">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab"
                                aria-controls="home" aria-selected="true" style="background: #f7f7f7">
                                <h5 class="text blue-text h5-responsive mt-1">Giới Thiệu </h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="chapter-tab" data-toggle="tab" href="#chapter-list" role="tab"
                                aria-controls="profile" aria-selected="false" style="background: #f7f7f7">
                                <h5 class="text blue-text h5-responsive mt-1">Danh Sách Chương</h5>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <p class="h4-responsive black-text">

                                @if($story->details != 'None')
                                {!!$story->details!!}
                                @else
                                Chưa có nội dung
                                @endif
                            </p>
                        </div>
                        <div class="tab-pane fade" id="chapter-list" role="tabpanel" aria-labelledby="chapter-tab"
                            style="background: #eaeaea">
                            <div class="list-group list-group-flush">
                                @foreach($chapters as $chapter)
                                <a href="{{route('view_chapter',$chapter->getRouteKeyName())}}" class="list-group-item list-group-item-action waves-effect">

                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="flex-grow-1">
                                            <strong>Chương {{$chapter->number}}:</strong> {{$chapter->name}}</span>
                                        <span class="genre flex-shrink-1 d-none d-sm-block">{{$chapter->updated_at->format('m-d-Y
                                            H:i:s')}}</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-none d-lg-block">
                    <h5 class="text blue-text h5-responsive pt-2 pb-3">Bảng Xếp Hạng </h5>
                    <div class="row justify-content-center">
                        <div class="col-md-12 table-responsive-sm">
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" style="background: #f7f7f7" data-toggle="tab" href="#panel5"
                                        role="tab">Tuần</a>
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
    </div>
</div>


@endsection