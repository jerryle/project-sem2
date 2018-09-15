@extends('layouts.master3', [
'current_menu' => 'list',
'search' => isset($s) ? $s : '' ])
@section('title')
{{'Đăng chương truyện mới'}}
@endsection
@section('description')
{{'Trang đăng truyện dành cho người dùng'}}
@endsection
@section('header')
<script src="//cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>

@endsection

@section('content')
<div class="card">
    <div class="card-header unique-color-dark">

        {{--
        <div class="row d-flex justify-content-center"> --}}
        <h3 class="h3-reponsive white-text text-uppercase">Tạo chương truyện cho '{{$story->title}}'</h3>

            {{-- </div> --}}
    </div>
    <div class="card-body mx-4 mt-4">
        <form action="{{route('user.chapter.store')}}" method="POST">
            @csrf
            <div class="md-form">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                    required autofocus> @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
                <label for="name">Tên chương truyện</label>
            </div>
            <input id="story_id" type="hidden" value="{{$story->id}}" name="story_id">
            <div class="md-form">
                <input id="number" type="text" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}"
                    name="number" required> @if ($errors->has('number'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('number') }}</strong>
                </span>
                @endif
                <label for="number">Thứ tự chương truyện</label>
            </div>

            <div class="form-group">
                <label for="content">Nội dung chương truyện</label>
                <textarea id="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content"
                    required></textarea>
                @if ($errors->has('content'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('content') }}</strong>
                </span>
                @endif
                <script>
                    CKEDITOR.replace( 'content' );
                            </script>
            </div>

            <!--Grid row-->
            <div class="mr-auto">
                <div class="text-center">
                    <button type="submit" class="btn btn-grey z-depth-1a">Tạo mới</button>
                </div>
            </div>


        </form>
    </div>
</div>
@endsection
@section('scripts')
<script>
    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });
</script>
@endsection