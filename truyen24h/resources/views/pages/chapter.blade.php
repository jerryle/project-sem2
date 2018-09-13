@extends('layouts.master2', [
'search' => ''
])

@section('title')
{{$chapter->story->title .' - Chương '. $chapter->number . ': '. $chapter->name}}
@endsection
@section('description')
{{'Đọc truyện '. $chapter->story->title .' - Chương '. $chapter->number . ': '. $chapter->name}}
@endsection
@section('stylesheets')
<style>
    body {
        margin: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff;
    }
</style>
@endsection
@section('header')

@endsection
@section('content')
<div class="row">


    <div class="container px-5 chapter-detail">
        {{-- <div class="media text-center text-lg-center">
            <div class="media-body">
                <a class="purple-text h2-responsive" href="#">{{$chapter->story->title}}</a>
                <p>
                    <strong>Chương {{$chapter->number}}: {{$chapter->name}}</strong>
                </p>
                <p>
                    Người đăng: <a href="#" class="text green-text">{{$chapter->user->username}}</a> - Lượt xem:
                    {{$chapter->getViews()}}
                </p>
            </div>
        </div> --}}

        <div class="width-bar">
            <div class="w1140">1140</div>
            <div class="w960">960</div>
            <div class="w720">720</div>
            <span class="show-text" style="display: none;"></span>
        </div>

        <div id="id_chap_content" class="p-5 wiki-content w1140">
            <h1 class="chapter-title">Chương {{$chapter->number}}: {{$chapter->name}}</h1>
            <ul class="list-info list-unstyled">
                <li><a href="{{route('view_story',$chapter->story->getRouteKeyName())}}"><i class="fas fa-book mr-1"></i>{{$chapter->story->title}}</a></li>
                <li><a href="/tac-gia/nhat-nhi-01/"><i class="fas fa-pen-fancy mr-1"></i>{{$chapter->story->author}}</a></li>
                <li><a href="/tac-gia/nhat-nhi-01/"><i class="fas fa-user-ninja mr-1"></i>{{$chapter->user->username}}</a></li>
                <li><i class="far fa-eye mr-1"></i>{{$chapter->getViews()}} lượt</li>
                <li><i class="far fa-clock mr-1"></i>{{$chapter->updated_at}}</li>
            </ul>


            @if($chapter->name !== 'None')
            {!!$chapter->content!!}
            @else
            Nội dung chương chưa được cập nhật
            @endif

        </div>
    </div>
</div>
{{-- <style type='text/css'>
    #bttop {
        border: 1px solid #4adcff;
        background: #24bde2;
        text-align: center;
        padding: 5px;
        position: fixed;
        bottom: 35px;
        right: 10px;
        cursor: pointer;
        display: none;
        color: #fff;
        font-size: 20px;
        font-weight: 900;
    }

    #bttop:hover {
        border: 1px solid #ffa789;
        background: #737af4;
    }
</style>
<div id='bttop'><i class="fas fa-arrow-alt-circle-up"></i></div>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js' type='text/javascript'></script>
<script type='text/javascript'>
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $('#bttop').fadeIn();
            } else {
                $('#bttop').fadeOut();
            }
        });
        $('#bttop').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
        });
    });
</script> --}}


{{--<div class="media mt-4 mb-2 px-1">--}}
    {{--<img class="card-img-100 d-flex z-depth-1 mr-3" src="{{$chapter->story->image}}" alt="{{$chapter->story->title}}">--}}
    {{--<div class="media-body">--}}
        {{--<a class="text blue-text h2-responsive" href="#">{{$chapter->story->title}}</a>--}}
        {{--<p>(Đang cập nhật)</p>--}}

        {{--<a class="fb-ic mr-3"><i class="fab fa-facebook-square"></i></a>--}}

        {{--<a class="tw-ic mr-3"><i class="fab fa-twitter-square"> </i></a>--}}

        {{--<a class="gplus-ic mr-3"><i class="fab fa-google-plus-square"></i></a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--<div class="detail mb-4">--}}
    {{--<i class="font-weight-bold">Chương {{$chapter->number}}: {{$chapter->name}}</i>--}}
    {{--
    <hr class="between-sections mt-0">--}}
    {{--<p class="text-left">--}}
        {{--@if($chapter->name !== 'None')--}}
        {{--{!!$chapter->content!!}--}}
        {{--@else--}}
        {{--Nội dung chương chưa được cập nhật--}}
        {{--@endif--}}
        {{--</p>--}}

    {{--</div>--}}

@endsection

@section('scripts')
<script>
    $(function () {
        let width_bar = $('.width-bar');
        let show_text = width_bar.find('.show-text');
        let id_chap_content = $('#id_chap_content');

        let current_chap_width = localStorage.getItem('chapter-width');
        if (current_chap_width) {
            id_chap_content.removeClass('w720 w960 w1140');
            id_chap_content.addClass(current_chap_width);
            show_text.text(current_chap_width.replace('w', '')).show();
        }

        width_bar.find('> div').hover(function () {
                show_text.text($(this).text()).show();
            }, function () {
                if (current_chap_width) {
                    show_text.text(current_chap_width.replace('w', '')).show();
                } else {
                    show_text.text('').hide();
                }
            })
            .click(function () {
                let w = $(this).attr('class');
                id_chap_content.removeClass('w720 w960 w1140');
                id_chap_content.addClass(w);
                localStorage.setItem('chapter-width', w);
                current_chap_width = w;
            });
    });
</script>
@endsection