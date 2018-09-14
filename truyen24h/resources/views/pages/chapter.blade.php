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

    #back-to-top {
        position: fixed;
        bottom: 40px;
        right: 40px;
        z-index: 9999;
        width: 32px;
        height: 32px;
        text-align: center;
        line-height: 30px;
        background: #000;
        color: #fff;
        cursor: pointer;
        border: 0;
        border-radius: 2px;
        text-decoration: none;
        transition: opacity 0.2s ease-out;
        opacity: 0;
    }

    #back-to-top:hover {
        background: #e9ebec;
    }

    #back-to-top.show {
        opacity: 1;
    }

    #content {
        height: 2000px;
    }
</style>
@endsection
@section('header')

@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">

        <div class="container px-5 chapter-detail">
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
                    <li><a href="/tac-gia/nhat-nhi-01/"><i class="fas fa-pen-fancy mr-1"></i>{{str_limit($chapter->story->author,15)}}</a></li>
                    <li><a href="/tac-gia/nhat-nhi-01/"><i class="fas fa-user-ninja mr-1"></i>{{$chapter->user->username}}</a></li>
                    <li><i class="far fa-eye mr-1"></i>{{$chapter->getViews()}} lượt</li>
                    <li><i class="far fa-clock mr-1"></i>{{$chapter->updated_at}}</li>
                </ul>


                @if($chapter->name !== 'None')
                {!!$chapter->content!!}
                @else
                Nội dung chương chưa được cập nhật
                @endif

                @if(auth()->check())

                <div class="d-flex justify-content-end">
                    @if(auth()->user()->id == $chapter->user_id || auth()->user()->admin_level > 0)
                    <a href="{{route('user.inline.chapter.edit', $chapter->getRouteKeyName())}}" class="btn btn-sm btn-black">Sửa</a>
                    @endif
                </div>

                @endif
            </div>

            <div class="btn-group d-flex justify-content-center">
                @if($previous)
                <a href="{{route('view_chapter',$previous->getRouteKeyName())}}">
                    <div class="btn btn-success">Chương trước</div>
                </a>
                @endif
                <select name="chapter-pagination" class="mdb-select">
                    <option value="" disabled>Chọn chương mà bạn muốn</option>
                    @foreach($chapter->story->chaptersInverse as $chap)
                    <option value="{{route('view_chapter',$chap->getRouteKeyName())}}"
                        {{$chap->id == $chapter->id ? 'selected disabled':''}}>{{'Chương '.
                        $chap->number . ': '. str_limit($chap->name,10)}}</option>
                    @endforeach
                </select>
                @if($next)
                <a href="{{route('view_chapter',$next->getRouteKeyName())}}">
                    <div class="btn btn-success">Chương sau</div>
                </a>
                @endif
            </div>

        </div>
    </div>
</div>

<a href="#" id="back-to-top" title="Back to top">&uarr;</a>
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
    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });

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

        // $(window).resize(function () {
        //     var width = $(window).width();
        //     if (width < 1200) {
        //         alert('Your screen is too small');
        //     }
        // });

        let pagination = $('select[name="chapter-pagination"]');
        pagination.change(function () {
            window.location.replace($(this).val());
        });

        if ($('#back-to-top').length) {
            var scrollTrigger = 100, // px
                backToTop = function () {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#back-to-top').addClass('show');
                    } else {
                        $('#back-to-top').removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function () {
                backToTop();
            });
            $('#back-to-top').on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });
        }
    });
</script>
@endsection