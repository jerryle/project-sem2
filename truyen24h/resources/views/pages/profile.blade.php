@extends('layouts.master3', [
'current_menu' => 'user',
'search' => isset($s) ? $s : '' ])
@section('title')
{{'Trang cá nhân của bạn'}}
@endsection
@section('description')
{{'Trang cá nhân dành cho người dùng'}}
@endsection
@section('header')
<script src="//cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>

@endsection

@section('content')
<!-- Card -->
<div class="card testimonial-card">

    <!-- Bacground color -->
    <div class="card-up indigo lighten-1">
    </div>

    <!-- Avatar -->
    <div class="d-flex justify-content-start" style="position: absolute; top: 80px;">
        <div class="avatar ml-5 white"><img src="{{asset('image/default.jpg')}}" class="rounded-circle"></div>
        <div class="ml-3 d-flex flex-column">
            <h3 class="h3-reponsive text-white font-weight-bold">{{auth()->user()->username}}</h3>
        </div>
    </div>
    <div class="card-body">
        <!-- Name -->


        <div class="row text-left p-3">
            <div class="col-sm-6 col-xs-6 border">
                <h5 class="h5-reponsive py-3">Truyện theo dõi</h5>
                <h1 class="h1-reponsive indigo-text text-center font-weight-bold">{{auth()->user()->followStories->count()}}</h1>
                <hr>
                <a href="{{route('user.story.follow_list')}}" class="indigo-text">Xem tất cả</a>
            </div>
            <div class="col-sm-6 col-xs-6 border">
                <h5 class="h5-reponsive py-3">Truyện đã đăng</h5>
                <h1 class="h1-reponsive indigo-text text-center font-weight-bold">{{auth()->user()->uploadedStories->count()}}</h1>
                <hr>
                <a href="{{route('user.story.list')}}" class="indigo-text">Xem tất cả</a>
                
            </div>
        </div>

    
    </div>

</div>
<!-- Card -->
@endsection
@section('scripts')
<script>
    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });
</script>
@endsection