@extends('layouts.admin.master', [
'current_menu' => 'quan-ly',
'sub_current_menu' => 'story'
])
@section('button')
    <li class="nav-item">
    <a class="nav-link" href="{{route('admin.genre.index')}}">
                <i class="fas fa-list-alt mr-1"></i>
            <span class="clearfix d-none d-sm-inline-block">Danh sách truyện</span>
        </a>
    </li>
@endsection

@section('content')


{{-- <section class="form-gradient"> --}}
    <div class="card">
        <div class="card-header unique-color-dark">

            {{-- <div class="row d-flex justify-content-center"> --}}
                <h3 class="h3-reponsive white-text text-uppercase">Đăng truyện mới</h3>

            {{-- </div> --}}
        </div>
        <div class="card-body mx-4 mt-4">
            <form action="{{route('admin.story.store')}}" method="POST">
                @csrf
                <div class="md-form">
                    <input id="title" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="title" required autofocus> @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                    @endif
                    <label for="name">Tên truyện</label>
                </div>

                <div class="md-form">
                    <textarea id="detail" class="form-control{{ $errors->has('detail') ? ' is-invalid' : '' }}" name="detail"
                              required></textarea>
                    @if ($errors->has('detail'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('detail') }}</strong>
                    </span>
                    @endif
                    <label for="description">Mô tả</label>
                </div>

                <div class="md-form">
                    <input type="file" name="images">
                    <label for="name">Hình ảnh</label>
                </div>

                <div class="md-form">
                    <input id="author" type="text" class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" name="author" required autofocus> @if ($errors->has('author'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('author') }}</strong>
                    </span>
                    @endif
                    <label for="name">Tên truyện</label>
                </div>

                <!--Grid row-->
                <div class="mr-auto">
                    <div class="text-center">
                        <button type="submit" class="btn btn-grey z-depth-1a">Đăng truyện</button>
                    </div>
                </div>


            </form>
        </div>
    </div>
{{-- </section> --}}


@endsection
