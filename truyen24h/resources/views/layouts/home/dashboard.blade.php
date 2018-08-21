@extends('layouts.user.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        {{-- Status / Alert --}}
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
        
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                {{Session::forget('alert-success')}}
                @endif
            @endforeach
        </div>
        {{-- End Status / Alert --}}


    </div>

    <div class="row justify-content-center text-center">
        <div class="col-md-2 h-100">Truyện hot nhất</div>
        <div class="col-md-10 h-100">
            <div class="row">
                <div class="col-md-2">Truyện hot 2</div>
                <div class="col-md-2">Truyện hot 3</div>
                <div class="col-md-2">Truyện hot 4</div>
                <div class="col-md-2">Truyện hot 5</div>
                <div class="col-md-2">Truyện hot 6</div>
                <div class="col-md-2">Truyện hot 7</div>
            </div>
            <div class="row">
                <div class="col-md-2">Truyện hot 8</div>
                <div class="col-md-2">Truyện hot 9</div>
                <div class="col-md-2">Truyện hot 10</div>
                <div class="col-md-2">Truyện hot 11</div>
                <div class="col-md-2">Truyện hot 12</div>
                <div class="col-md-2">Truyện hot 13</div>
            </div>
        </div>
    </div>
</div>
@endsection
