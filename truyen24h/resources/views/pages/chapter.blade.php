@extends('layouts.master2', [
    'search' => ''
])

@section('header')

@endsection
@section('content')

<div class="media mt-4 mb-2 px-1">
    <img class="card-img-100 d-flex z-depth-1 mr-3" src="{{$chapter->story->image}}" alt="Generic placeholder image">
    <div class="media-body">
        <a class="text blue-text h2-responsive" href="#">{{$chapter->story->title}} </a>
        <p>(Đang cập nhật)</p>

        <a class="fb-ic mr-3"><i class="fab fa-facebook-square"></i></a>

        <a class="tw-ic mr-3"><i class="fab fa-twitter-square"> </i></a>

        <a class="gplus-ic mr-3"><i class="fab fa-google-plus-square"></i></a>
    </div>
</div>
<div class="detail mb-4">
    <i class="font-weight-bold">Chương {{$chapter->number}}: {{$chapter->name}}</i>
    <hr class="between-sections mt-0">
    <p class="text-left">
        @if($chapter->name !== 'None')
        {!!$chapter->content!!}
        @else
        Nội dung chương chưa được cập nhật
        @endif
    </p>

</div>

@endsection