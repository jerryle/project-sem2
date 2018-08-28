@extends('layouts.master')

@section('header')
{{-- <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
    CKEDITOR.replace( 'editor1' );
</script> --}}
@endsection
@section('content')
    <div class="container">
        <div class="media mt-4 mb-2 px-1">
            <img class="card-img-100 d-flex z-depth-1 mr-3" src="https://mdbootstrap.com/img/Photos/Others/img%20(34).jpg" alt="Generic placeholder image">
            <div class="media-body">
                <a class="text blue-text h2-responsive" href="#">{{\Truyen24h\Story::findOrFail($chapter->story_id)->title}} </a>
                <p>(Đang cập nhật)</p>
                <!--Facebook-->
                <a class="fb-ic mr-3"><i class="fab fa-facebook-square"></i></a>
                <!--Twitter-->
                <a class="tw-ic mr-3"><i class="fab fa-twitter-square"> </i></a>
                <!--Google +-->
                <a class="gplus-ic mr-3"><i class="fab fa-google-plus-square"></i></a>
            </div>
        </div>
        <div class="detail mb-4 text-center">
        <i class="font-weight-bold">Chương {{$chapter->number}}: {{$chapter->name}}</i>
            <hr class="between-sections mt-0">
            <p class="text-left">
                @if($chapter->name !== 'None')
                    {!!$chapter->content!!}
                @else
                    Nội dung chương chưa được cập nhật
                @endif
            </p>
            <!--Pagination dark-->
            <nav>
                <ul class="pagination pg-dark">
                    <!--Arrow left-->
                    <li class="page-item">
                        <a class="page-link" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>

                    <!--Numbers-->
                    <li class="page-item active"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item"><a class="page-link">4</a></li>
                    <li class="page-item"><a class="page-link">5</a></li>

                    <!--Arrow right-->
                    <li class="page-item">
                        <a class="page-link" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!--/Pagination dark-->
        </div>
    </div>
@endsection
