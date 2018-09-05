@extends('layouts.master')

@section('content')
<div class="container">

    @if(count($hotStories) > 1)
    <section class="magazine-section my-5 d-none d-lg-block">
        <h4 class="h4-responsive font-weight-bold text-left text-uppercase badge aqua-gradient">Truyện hot
            <i class="fab fa-gripfire"></i>
        </h4>
        <hr class="between-sections mt-0">
        <div class="row row-eq-height mh-100" style="height:400px;">
            @foreach($hotStories as $story) @if($loop->first)

            <div class="col-md-4 top-1">
                <a href="{{route('view_story',$story->getRouteKeyName())}}">
                    <div class="card hoverable card-image waves-effect waves-light rgba-white-slight rounded-0" style="background-image: url({{$story->image}});">
                        <div class="text-white text-center rgba-black-strong pt-3 mt-auto story-title">
                            {{str_limit($story->title, 23)}}
                        </div>
                    </div>
                </a>
            </div>
            @break @endif @endforeach
            <div class="col-md-8">
                <div class="t24-top-hot row row-eq-height mh-100" style="height:400px;">
                    @foreach($hotStories as $story) @if($loop->index != 0)

                    <div class="col-md-3">
                        <a href="{{route('view_story',$story->getRouteKeyName())}}">
                            <div class="card hoverable card-image waves-effect waves-light rgba-white-slight rounded-0"
                                style="background-image: url({{$story->image}});">

                                <div class="text-white text-center rgba-black-strong pt-3 mt-auto story-title">
                                    {{str_limit($story->title, 23)}}
                                </div>

                            </div>
                        </a>
                    </div>
                    @endif @endforeach
                </div>
            </div>
    </section>
    @endif
    <section class="story_update my-5">
        <div class="row">
            <div class="col-lg-8">
                <h4 class="h4-responsive font-weight-bold text-left text-uppercase blue-text">Truyện Mới Cập Nhật
                    <i class="fab fa-gripfire"></i>
                </h4>
                @if(count($updatedStories) > 0)
                <div class="list-group list-group-flush">
                    @foreach($updatedStories as $story)
                    <a href="{{route('view_story', $story->getRouteKeyName())}}" class="list-group-item list-group-item-action waves-effect">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="flex-grow-1"><strong>{{$story->title}}</strong></span>
                            @if(count($story->genres) > 0)
                            <span class="genre flex-shrink-1">{{$story->genres->first()->name}}</span>
                            @endif
                            <span class="text-right author flex-shrink-1 d-none d-sm-block">{{$story->author}}</span>
                        </div>
                    </a>
                    @endforeach
                </div>

                @else
                Hiện chưa có truyện nào

                @endif
            </div>
            <div class="col-lg-4 d-none d-lg-block">
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
    </section>
    <section class="story_full my-5">
        <h4 class="h4-responsive font-weight-bold text-left text-uppercase blue-text">Truyện Đã Hoàn Thành
            <i class="fab fa-gripfire"></i>
        </h4>
        <hr class="between-sections mt-0">
        <div class="row justify-content-left js-equal-height">
            @foreach($stories as $story)
            <div class="col-lg-2 col-md-3 col-xs-4 col-6">
                <a href="{{route('view_story',$story->getRouteKeyName())}}">
                    <div class="card card-image mb-3" style="background-image: url({{$story->image}});">
                        <div class="text-white text-center rgba-black-strong pt-3 mt-auto story-title">
                            {{str_limit($story->title, 23)}}
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection