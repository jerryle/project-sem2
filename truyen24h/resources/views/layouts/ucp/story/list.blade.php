@extends('layouts.master3', [ 'current_menu' => 'list', 'search' => isset($s) ? $s :
'' ])

@section('header')
<script src="//cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>

@endsection

@section('content')
<div class="card">
    <div class="card-header unique-color-dark">

        {{--
        <div class="row d-flex justify-content-center"> --}}
            <h3 class="h3-reponsive white-text text-uppercase">Danh sách truyện bạn đã đăng</h3>
            {{-- </div> --}}
    </div>
    <div class="card-body mx-4 mt-4">
        <div class="btn-group d-flex justify-content-end" role="group" aria-label="Các nút trang thể loại">
            <a href="{{route('user.story.create')}}" class="btn btn-indigo" role="button">
                <i class="fas fa-plus-square mr-1"></i>Tạo mới</a>
        </div>

        @if(count($stories) > 0)
        <table id="dtMaterialDesignExample" class="table table-striped table-responsive-md table-sm table-editable"
            cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="th-sm">Tên tiêu đề
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Mô tả
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Tác giả
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    {{--
                    <th class="th-sm">Ảnh bìa
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th> --}}
                    <th class="th-sm">Thời gian tạo
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Action
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stories as $story)
                <tr>
                    <td>{{$story->title}}</td>
                    <td>{{str_limit($story->description, 20)}}</td>
                    <td>{{$story->author}}</td>
                    <td>{{$story->created_at}}</td>
                    <td>

                        <a href="#" class="text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        <a href="{{route('user.story.edit',$story->getRouteKeyName())}}" class="text-info">
                            <i class="fas fa-edit"></i>
                        </a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <h1>Bạn chưa đăng truyện nào</h1>
        @endif
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