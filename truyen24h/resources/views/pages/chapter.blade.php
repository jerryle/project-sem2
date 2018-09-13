@extends('layouts.master2', [
    'search' => ''
])

@section('header')

@endsection
@section('content')
    <div class="row">
        <div class="col-md-1 col-sm table-responsive-sm"></div>
        <div class="col-md-10 col-sm-12 table-responsive-sm">
            <div class="container chapter" style="background: #e5e1e1">
                <div class="media text-center text-lg-center mt-4 mb-1 px-1">
                    <div class="media-body">
                        <a class="text purple-text h2-responsive" href="#">Thánh Vũ Tinh Thần</a>
                        <p class="mb-1 mt-1">Đang cập nhật!</p>
                        <p class="text-center mb-1">
                            <strong>Người đăng: <a href="#" class="text green-text">User </a></strong>
                        </p>
                    </div>
                </div>
                <div class="text text-center detail mb-4">
                    <i class="font-weight-bold">Chương 1: Thánh Vũ Tinh Thần</i>
                    <hr class="between-sections mt-0">
                    <p class="text-left">
                        noi dung dang cap nhat
                        {{--@if($chapter->name !== 'None')--}}
                        {{--{!!$chapter->content!!}--}}
                        {{--@else--}}
                        {{--Nội dung chương chưa được cập nhật--}}
                        {{--@endif--}}
                    </p>

                </div>
            </div>
        </div>
        <div class="col-md-1 col-sm table-responsive-sm"></div>
    </div>


    <style type='text/css'>
        #bttop{border:1px solid  #4adcff;background:#24bde2;text-align:center;padding:5px;position:fixed;bottom:35px;right:10px;cursor:pointer;display:none;color:#fff;font-size:11px;font-weight:900;}
        #bttop:hover{border:1px solid #ffa789;background:#737af4;}
    </style>
    <div id='bttop'><i class="fas fa-arrow-alt-circle-up"></i></div>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js' type='text/javascript'></script>
    <script  type='text/javascript'>$(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:0},800);});});</script>


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
    {{--<hr class="between-sections mt-0">--}}
    {{--<p class="text-left">--}}
        {{--@if($chapter->name !== 'None')--}}
        {{--{!!$chapter->content!!}--}}
        {{--@else--}}
        {{--Nội dung chương chưa được cập nhật--}}
        {{--@endif--}}
    {{--</p>--}}

{{--</div>--}}

@endsection
