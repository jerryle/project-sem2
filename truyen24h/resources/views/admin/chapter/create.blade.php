@extends('layouts.admin.master', [ 'current_menu' => 'quan-ly', 'sub_current_menu' => 'chapter' ]) @section('button')
<li class="nav-item">
    <a class="nav-link" href="{{route('admin.chapter.index')}}">
        <i class="fas fa-list-alt mr-1"></i>
        <span class="clearfix d-none d-sm-inline-block">Danh sách chương truyện</span>
    </a>
</li>
@endsection @section('header')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js" defer></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js" defer></script>
<script defer>
    $('.ckeditor').ckeditor();
    // $('.textarea').ckeditor(); // if class is prefered.
</script>

@endsection @section('content') {{--
<section class="form-gradient"> --}}
    <div class="card">
        <div class="card-header unique-color-dark">

            {{--
            <div class="row d-flex justify-content-center"> --}}
                <h3 class="h3-reponsive white-text text-uppercase">Tạo chương truyện mới</h3>

                {{-- </div> --}}
        </div>
        <div class="card-body mx-4 mt-4">
            <form action="{{route('admin.chapter.store')}}" method="POST">
                @csrf
                <div class="md-form">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required autofocus> @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                    <label for="name">Tên chương truyện</label>
                </div>

                <div class="md-form">
                    <input id="story_id" type="text" class="form-control{{ $errors->has('story_id') ? ' is-invalid' : '' }}" name="story_id"
                        required> @if ($errors->has('story_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('story_id') }}</strong>
                    </span>
                    @endif
                    <label for="story_id">ID truyện (for now)</label>
                </div>

                <div class="md-form">
                    <input id="number" type="text" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" required> @if ($errors->has('number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('number') }}</strong>
                    </span>
                    @endif
                    <label for="number">Thứ tự chương truyện</label>
                </div>

                <div class="form-group">
                    <label for="content">Nội dung chương truyện</label>
                    <textarea id="content" class="ckeditor form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" required></textarea>
                    @if ($errors->has('content'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('content') }}</strong>
                    </span>
                    @endif

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
    {{-- </section> --}} @endsection