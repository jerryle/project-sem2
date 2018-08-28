@extends('layouts.admin.master', [
'current_menu' => 'quan-ly',
'sub_current_menu' => 'story'
])
@section('header')
<!-- MDBootstrap Datatables  -->
<link href="{{asset('mdb/css/addons/datatables.min.css')}}" rel="stylesheet">
<!-- MDBootstrap Datatables  -->
<script src="{{asset('mdb/js/addons/datatables.min.js')}}" defer></script>

<script src="{{ asset('js/table.js') }}" defer></script>
@endsection

@section('button')
    <li class="nav-item">
    <a class="nav-link" href="{{route('admin.story.index')}}">
                <i class="fas fa-list-alt mr-1"></i>
            <span class="clearfix d-none d-sm-inline-block">Danh sách thể loại</span>
        </a>
    </li>
@endsection

@section('content')
{{-- <a href="{{route('admin.genre.create')}}" class="btn btn-primary justify-content-end">Tạo mới</a> --}}
<div class="card">
        <div class="card-header unique-color-dark">

            {{-- <div class="row d-flex justify-content-center"> --}}
                <h3 class="h3-reponsive white-text text-uppercase">Danh sách truyện</h3>
            {{-- </div> --}}
        </div>
        <div class="card-body mx-4 mt-4">
                <div class="btn-group d-flex justify-content-end" role="group" aria-label="Các nút trang thể loại">
                        <a href="{{route('admin.story.create')}}" class="btn btn-indigo" role="button"><i class="fas fa-plus-square mr-1"></i>Tạo mới</a>
                    </div>

    @if(count($stories) > 0)
    <table id="dtMaterialDesignExample" class="table table-striped table-responsive-md table-sm table-editable" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">Tên tiêu đề
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                {{-- <th class="th-sm">Mô tả
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th> --}}
                <th class="th-sm">Người đăng
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Tác giả
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                {{-- <th class="th-sm">Ảnh bìa
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
                        {{-- <td>{{$story->details}}</td> --}}
                        <td>{{\Truyen24h\User::findorFail($story->user_id)->username}}</td>
                        <td>{{$story->author}}</td>
                        {{-- <td>{{\Cloudder::show($story->image, ["width" => 100, "height" => 100])}}</td> --}}
                        <td>{{$story->created_at}}</td>
                        <td>

                                <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                                <a href="{{route('admin.story.edit',$story->id)}}" class="text-info"><i class="fas fa-edit"></i></a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
            {{-- <tfoot>
            <tr>
                <th>Name
                </th>
                <th>Position
                </th>
                <th>Office
                </th>
                <th>Age
                </th>
                <th>Start date
                </th>
                <th>Salary
                </th>
            </tr>
            </tfoot> --}}
        </table>
    @else  
        <h1>Chưa có thể loại nào</h1>
    @endif
        </div>
</div>
@endsection
