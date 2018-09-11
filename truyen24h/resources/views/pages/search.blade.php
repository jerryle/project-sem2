@extends('layouts.master2', [
'search' => isset($s) ? $s : ''
])

@section('content')
<div class="row">
    <div class="col-9">
        @if(isset($s))
        @if(count($results) > 0)
        Tìm thấy {{count($results)}} kết quả phù hợp với từ khóa {{$s}}
        <div class="list-stories">
            <ul>
            @foreach($results as $story)
            <li>
            {{-- <a href="{{route('view_story', $story->getRouteKeyName())}}" class="list-group-item list-group-item-action waves-effect">
                <div class="d-flex justify-content-between align-items-center">
                    <img src="{{$story->image}}" class="flex-shrink-1 mr-2" style="max-width:150px;">
                    <span class="flex-grow-1"><strong>{{$story->title}}</strong></span>
                    @if(count($story->genres) > 0)
                    <span class="genre flex-shrink-1">{{$story->genres->first()->name}}</span>
                    @endif
                    <span class="text-right author flex-shrink-1 d-none d-sm-block">{{$story->author}}</span>
                </div>
            </a> --}}
                <div class="story-img-box view zoom float-left">
                    <img src="{{$story->image}}" class="img-fluid" alt="">
                </div>
                <div class="story-info-box float-left">
                    <h4><a href="{{route('view_story', $story->getRouteKeyName())}}">{{$story->title}}</a></h4>
                    <p class="author d-flex justify-content-start">
                    <span>{{$story->author}}</span> 
                    <em>|</em>
                    @if(count($story->genres) > 0)
                    <span class="genre flex-shrink-1">{{$story->genres->first()->name}}</span>
                    <em>|</em>
                    @endif
                    <span>Đang ra</span>
                    <em>|</em>
                    <span>{{count($story->chapters)}} chương</span>
                    </p>
                <p class="intro">{{ str_limit($story->description, 40) }}</p>
                </div>
                <div class="story-right-info">

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
    <div class="col-3">
        Thể loại
    </div>
</div>
@endsection