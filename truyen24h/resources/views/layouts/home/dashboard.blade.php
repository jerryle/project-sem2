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

                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a
                                href="javascript:void(0)" class="close" data-dismiss="alert"
                                aria-label="close">&times;</a></p>
                        {{Session::forget('alert-' . $msg)}}
                    @endif
                @endforeach
            </div>
            {{-- End Status / Alert --}}


        </div>

        <section class="magazine-section my-5">
            <h4 class="h4-responsive font-weight-bold text-left text-uppercase badge aqua-gradient">Truyện hot <i
                    class="fab fa-gripfire"></i></h4>
            <hr class="between-sections mt-0">

            <div class="row">
                <div class="col-md-5 p-1">
                    <div class="mdb-lightbox no-margin">

                        <figure class="col">
                            <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(121).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(121).jpg" class="img-fluid">
                                <h3 class="text-center my-3">Photo title</h3>
                            </a>
                        </figure>

                    </div>
                </div>
                <div class="col-md-7 p-1">

                    {{--<div id="mdb-lightbox-ui"></div>--}}

                    <div class="mdb-lightbox no-margin">

                        <figure class="col-md-3">
                            <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(121).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(121).jpg" class="img-fluid">
                                <h3 class="text-center my-3">Photo title</h3>
                            </a>
                        </figure>

                        <figure class="col-md-3">
                            <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(96).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(96).jpg" class="img-fluid" />
                                <h3 class="text-center my-3">Photo title</h3>
                            </a>
                        </figure>

                        <figure class="col-md-3">
                            <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(104).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(104).jpg" class="img-fluid" />
                                <h3 class="text-center my-3">Photo title</h3>
                            </a>
                        </figure>

                        <figure class="col-md-3">
                            <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(45).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(45).jpg" class="img-fluid" />
                                <h3 class="text-center my-3">Photo title</h3>
                            </a>
                        </figure>

                        <figure class="col-md-3">
                            <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(122).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(122).jpg" class="img-fluid" />
                                <h3 class="text-center my-3">Photo title</h3>
                            </a>
                        </figure>

                        <figure class="col-md-3">
                            <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(115).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(115).jpg" class="img-fluid" />
                                <h3 class="text-center my-3">Photo title</h3>
                            </a>
                        </figure>

                        <figure class="col-md-3">
                            <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(125).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(125).jpg" class="img-fluid" />
                                <h3 class="text-center my-3">Photo title</h3>
                            </a>
                        </figure>

                        <figure class="col-md-3">
                            <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(115).jpg" data-size="1600x1067">
                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(115).jpg" class="img-fluid" />
                                <h3 class="text-center my-3">Photo title</h3>
                            </a>
                        </figure>


                    </div>

                </div>
            </div>

        </section>
        <section class="story_update my-5">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="h4-responsive font-weight-bold text-left text-uppercase badge aqua-gradient">Truyện Mới
                        Cập Nhật <i
                            class="fab fa-gripfire"></i></h4>
                    {{--<hr class="between-sections mt-0">--}}
                </div>
                <div class="col-md-4">
                    <h4 class="h4-responsive font-weight-bold text-left text-uppercase badge aqua-gradient">Truyện Đang
                        Đọc <i
                            class="fab fa-gripfire"></i></h4>
                </div>
            </div>
            <div class="row justify-content-left">
                <div class="col-md-8">
                    <div class="table-responsive">

                        <!--Table-->
                        <table class="table table-hover table-fixed">

                            <!--Table head-->
                            <thead>
                            <tr>
                                <th class="th-lg">Tên Truyện</th>
                                <th class="th-sm">Thể Loại</th>
                                <th class="th-sm">Chương</th>
                                <th class="th-sm">Thời Gian</th>
                            </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                                <tr>
                                    <td>Trò chơi luân hồi</td>
                                    <td>
                                        <div class="d-flex flex-wrap">
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">Chương 1</a>
                                    </td>
                                    <td>1 phút trước</td>
                                </tr>
                                <tr>
                                    <td>Trò chơi luân hồi</td>
                                    <td>
                                        <div class="d-flex flex-wrap">
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">Chương 1</a>
                                    </td>
                                    <td>1 phút trước</td>
                                </tr>
                                <tr>
                                    <td>Trò chơi luân hồi</td>
                                    <td>
                                        <div class="d-flex flex-wrap">
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">Chương 1</a>
                                    </td>
                                    <td>1 phút trước</td>
                                </tr>
                                <tr>
                                    <td>Trò chơi luân hồi</td>
                                    <td>
                                        <div class="d-flex flex-wrap">
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">Chương 1</a>
                                    </td>
                                    <td>1 phút trước</td>
                                </tr>
                                <tr>
                                    <td>Trò chơi luân hồi</td>
                                    <td>
                                        <div class="d-flex flex-wrap">
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">Chương 1</a>
                                    </td>
                                    <td>1 phút trước</td>
                                </tr>
                                <tr>
                                    <td>Trò chơi luân hồi</td>
                                    <td>
                                        <div class="d-flex flex-wrap">
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">Chương 1</a>
                                    </td>
                                    <td>1 phút trước</td>
                                </tr>
                                <tr>
                                    <td>Trò chơi luân hồi</td>
                                    <td>
                                        <div class="d-flex flex-wrap">
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">Chương 1</a>
                                    </td>
                                    <td>1 phút trước</td>
                                </tr>
                                <tr>
                                    <td>Trò chơi luân hồi</td>
                                    <td>
                                        <div class="d-flex flex-wrap">
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">Chương 1</a>
                                    </td>
                                    <td>1 phút trước</td>
                                </tr>
                                <tr>
                                    <td>Trò chơi luân hồi</td>
                                    <td>
                                        <div class="d-flex flex-wrap">
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">Chương 1</a>
                                    </td>
                                    <td>1 phút trước</td>
                                </tr>
                                <tr>
                                    <td>Trò chơi luân hồi</td>
                                    <td>
                                        <div class="d-flex flex-wrap">
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">Chương 1</a>
                                    </td>
                                    <td>1 phút trước</td>
                                </tr>
                                <tr>
                                    <td>Trò chơi luân hồi</td>
                                    <td>
                                        <div class="d-flex flex-wrap">
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">Chương 1</a>
                                    </td>
                                    <td>1 phút trước</td>
                                </tr>
                                <tr>
                                    <td>Trò chơi luân hồi</td>
                                    <td>
                                        <div class="d-flex flex-wrap">
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">Chương 1</a>
                                    </td>
                                    <td>1 phút trước</td>
                                </tr>
                            </tbody>
                            <!--Table body-->

                        </table>
                        <!--Table-->

                    </div>
                </div>

                <div class="col-md-4 mt-0">

                    <div class="table-responsive">

                        <!--Table-->
                        <table class="table">

                            <!--Table head-->
                            <thead>
                            <tr>

                                <th class="th-lg">Lorem ipsum dolor</th>
                                <th class="th-lg">1</th>
                            </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                            <tr>
                                <td>Lorem ipsum dolor</td>
                                <th scope="row">1</th>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor</td>
                                <th scope="row">1</th>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor</td>
                                <th scope="row">1</th>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor</td>
                                <th scope="row">1</th>
                            </tr>
                            </tbody>
                            <!--Table body-->

                        </table>
                        <!--Table-->
                        <h4 class="h4-responsive font-weight-bold text-left text-uppercase badge aqua-gradient">Thể Loại <i
                                class="fab fa-gripfire"></i></h4>
                        <div class="d-flex flex-wrap">
                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                            <div class="m-1 badge badge-pill blue-gradient">The loai 1</div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
