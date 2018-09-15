@extends('layouts.master3', [
'current_menu' => 'list',
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

@endsection
@section('scripts')
<script>
    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });
</script>
@endsection