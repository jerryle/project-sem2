@extends('layouts.admin.master', [ 'current_menu' => 'quan-ly', 'sub_current_menu' => 'story' ]) @section('button')
<li class="nav-item">
    <a class="nav-link" href="{{route('admin.genre.index')}}">
        <i class="fas fa-list-alt mr-1"></i>
        <span class="clearfix d-none d-sm-inline-block">Danh sách truyện</span>
    </a>
</li>
@endsection @section('header')
<script src="//cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>

@endsection @section('content') {{--
<section class="form-gradient"> --}}
    <div class="card">
        <div class="card-header unique-color-dark">

            {{--
            <div class="row d-flex justify-content-center"> --}}
                <h3 class="h3-reponsive white-text text-uppercase">Đăng truyện mới</h3>

                {{-- </div> --}}
        </div>
        <div class="card-body mx-4 mt-4">
            <form action="{{route('admin.story.store')}}" method="POST">
                @csrf
                <div class="md-form">
                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                        name="title" required autofocus> @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                    @endif
                    <label for="title">Tiêu đề truyện</label>
                </div>

                <div class="md-form">
                    <input id="author" type="text" class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}"
                        name="author" required> @if ($errors->has('author'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('author') }}</strong>
                    </span>
                    @endif
                    <label for="author">Tên tác giả</label>
                </div>

                <div class="md-form">
                    <input id="image" type="text" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                        name="image" required> @if ($errors->has('image'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                    @endif
                    <label for="image">Ảnh bìa</label>
                </div>

                <div class="form-group">
                    <label for="details">Thông tin truyện</label>
                    <textarea id="details" class="ckeditor form-control{{ $errors->has('details') ? ' is-invalid' : '' }}"
                        name="details" required></textarea>
                    @if ($errors->has('details'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('details') }}</strong>
                    </span>
                    @endif
                </div>

                <div>
                    <select name="genres[]" class="mdb-select colorful-select dropdown-primary{{ $errors->has('genres') ? ' is-invalid' : '' }}"
                        multiple searchable="Tìm ở đây..">
                        <option value="" disabled selected>Chọn thể loại truyện</option>
                        @foreach($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->name}}</option>
                        @endforeach
                    </select>
                    {{-- <label>Thể loại truyện</label> --}}
                    @if ($errors->has('genres'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('genres') }}</strong>
                    </span>
                    @endif
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
    {{-- </section> --}} @endsection