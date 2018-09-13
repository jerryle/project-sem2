@extends('layouts.master2', [
'search' => isset($s) ? $s : ''
])
@section('title')
    {{'Kết quả tìm kiếm cho '. isset($s) ? $s : ''}}
@endsection
@section('description')
{{'Kết quả tìm kiếm cho '. isset($s) ? $s : ''}}
@endsection
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
                                                    <span>{{count($story->chapters)}} chương</span>
                                                </p>
                                                <p class="intro"> {{ str_limit($story->description, 40) }} </p>
                                            </div>
                                            <!--Grid column-->
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                @else
                    Không tìm thấy kết quả nào
                @endif
            @endif
        </div>
        <div class="col-md-3">
            <h4 class="h4-responsive font-weight-bold text-left text-uppercase blue-text">Thể loại
                <i class="fab fa-gripfire"></i>
            </h4>
            {{--
            <hr class="between-sections mt-0"> --}}
            @if(count($genres) > 0)

            <div class="row justify-content-start genre-list">

                @foreach ($genres as $genre)
                <div class="col-xs-6 col-6 py-2">
                    <a href="{{$genre->getRouteKeyName()}}" title="{{$genre->name}}">{{$genre->name}}</a>
                </div>
                @endforeach

            </div>

            @else
            Chưa có thể loại nào
            @endif
        </div>
    </div>
@endsection
