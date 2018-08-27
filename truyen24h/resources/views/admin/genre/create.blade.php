@extends('layouts.admin.master') @section('content')


            <section class="form-gradient">
                <div class="card">
                    <div class="header pt-3 blue-gradient">

                        <div class="row d-flex justify-content-center">
                            <h3 class="h3-reponsive white-text mb-3 pt-3 font-weight-bold text-uppercase">Tạo thể loại truyện mới</h3>
                        </div>
                    </div>
                    <div class="card-body mx-4 mt-4">
                        <form action="{{route('admin.genre.store')}}" method="POST">
                            @csrf
                            <div class="md-form">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required autofocus> @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                                <label for="name">Tên thể loại</label>
                            </div>

                            <div class="md-form">
                                <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description"
                                    required> @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                                <label for="description">Mô tả</label>
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
            </section>


@endsection