@extends('layouts.master2', [
'search' => isset($s) ? $s : ''
])

@section('content')
    <div class="row">
        <div class="col-md-9">
            @if(isset($s))
                @if(count($results) > 0)
                    <h4>Tìm thấy {{count($results)}} kết quả phù hợp với từ khóa: "{{$s}}"</h4>
                    <div class="list-stories">
                        <ul>

                            @foreach($results as $story)
                                <li>
                                    <div class="py-4 text-left text-lg-left">
                                        <!--Grid row-->
                                        <div class="row justify-content-center">
                                            <!--Grid column-->
                                            <div class="col-md-3 table-responsive-sm">
                                                <!--Featured image-->
                                                <div class="view zoom float-left">
                                                    <img src="{{$story->image}}" class="img-fluid"
                                                         alt="">
                                                </div>
                                            </div>

                                            <!--Grid column-->
                                            <div class="story-info-box col-md-9 table-responsive-sm">
                                                <h4>
                                                    <a href="{{route('view_story', $story->getRouteKeyName())}}">{{$story->title}}</a>
                                                </h4>
                                                <p class="author d-flex justify-content-start">

                                                    <span>{{$story->author}} </span>
                                                    <em> | </em>
                                                    @if(count($story->genres) > 0)
                                                        <span>
                                                            class="genre flex-shrink-1"> {{$story->genres->first()->name}} </span>
                                                        <em> | </em>
                                                    @endif
                                                    <span> 1 chương</span>
                                                </p>
                                                <p class="intro"> {{ str_limit($story->description, 40) }} </p>
                                            </div>
                                            <!--Grid column-->
                                        </div>
                                    </div>
                                </li>
                                {{--<li>--}}
                                {{--<div class="story-img-box view zoom float-left">--}}
                                {{--<img src="{{$story->image}}" class="img-fluid" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="story-info-box float-left">--}}
                                {{--<h4><a href="{{route('view_story', $story->getRouteKeyName())}}">{{$story->title}}</a></h4>--}}
                                {{--<p class="author d-flex justify-content-start">--}}
                                {{--<span>{{$story->author}}</span>--}}
                                {{--<em>|</em>--}}
                                {{--@if(count($story->genres) > 0)--}}
                                {{--<span class="genre flex-shrink-1">{{$story->genres->first()->name}}</span>--}}
                                {{--<em>|</em>--}}
                                {{--@endif--}}
                                {{--<span>Đang ra</span>--}}
                                {{--<em>|</em>--}}
                                {{--<span>1 chương</span>--}}
                                {{--</p>--}}
                                {{--<p class="intro">{{ str_limit($story->description, 40) }}</p>--}}
                                {{--</div>--}}
                                {{--<div class="story-right-info">--}}

                                {{--</div>--}}

                                {{--</li>--}}
                            @endforeach
                        </ul>
                    </div>

                @else
                    Không tìm thấy kết quả nào
                @endif
            @endif
        </div>
        <div class="col-md-3">
            <h4>Thể loại</h4>
        </div>
    </div>
@endsection
