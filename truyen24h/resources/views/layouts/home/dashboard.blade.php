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
                <div class="col-md-4">
                    <!--Jumbotron-->

                    <div class="card card-image"
                         style="background-image: url(https://mdbootstrap.com/img/Photos/Others/forest2.jpg);">
                        <div class="text-white text-center rgba-stylish-strong py-6 px-4">
                            <div class="py-6">

                                <!--Content-->
                                {{--<h6 class="orange-text font-bold"><i class="fa fa-camera-retro"></i> Photography</h6>--}}
                                <h2 class="card-title pt-3 mb-5 font-bold">Jumbotron with image overlay</h2>
                                {{--<p class="px-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat--}}
                                {{--fugiat, laboriosam, voluptatem, optio vero odio nam sit officia--}}
                                {{--accusamus minus error nisi architecto nulla ipsum dignissimos.--}}
                                {{--Odit sed qui, dolorum!</p>--}}
                                {{--<a class="btn peach-gradient"><i class="fa fa-clone left"></i> View project</a>--}}
                                {{--<!--Content-->--}}

                            </div>
                        </div>
                    </div>

                    <!--Jumbotron-->
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card card-image"
                                 style="background-image: url(https://mdbootstrap.com/img/Photos/Others/forest2.jpg);">
                                <div class="text-white text-center rgba-stylish-strong py-1 px-1">
                                    <div class="py-0">

                                        <!--Content-->
                                        {{--<h6 class="orange-text font-bold"><i class="fa fa-camera-retro"></i> Photography</h6>--}}
                                        <h2 class="card-title pt-3 mb-5 font-bold">Jumbotron with image overlay</h2>
                                        {{--<p class="px-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat--}}
                                        {{--fugiat, laboriosam, voluptatem, optio vero odio nam sit officia--}}
                                        {{--accusamus minus error nisi architecto nulla ipsum dignissimos.--}}
                                        {{--Odit sed qui, dolorum!</p>--}}
                                        {{--<a class="btn peach-gradient"><i class="fa fa-clone left"></i> View project</a>--}}
                                        {{--<!--Content-->--}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-image"
                                 style="background-image: url(https://mdbootstrap.com/img/Photos/Others/forest2.jpg);">
                                <div class="text-white text-center rgba-stylish-strong py-1 px-1">
                                    <div class="py-0">

                                        <!--Content-->
                                        {{--<h6 class="orange-text font-bold"><i class="fa fa-camera-retro"></i> Photography</h6>--}}
                                        <h2 class="card-title pt-3 mb-5 font-bold">Jumbotron with image overlay</h2>
                                        {{--<p class="px-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat--}}
                                        {{--fugiat, laboriosam, voluptatem, optio vero odio nam sit officia--}}
                                        {{--accusamus minus error nisi architecto nulla ipsum dignissimos.--}}
                                        {{--Odit sed qui, dolorum!</p>--}}
                                        {{--<a class="btn peach-gradient"><i class="fa fa-clone left"></i> View project</a>--}}
                                        {{--<!--Content-->--}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-image"
                                 style="background-image: url(https://mdbootstrap.com/img/Photos/Others/forest2.jpg);">
                                <div class="text-white text-center rgba-stylish-strong py-1 px-1">
                                    <div class="py-0">

                                        <!--Content-->
                                        {{--<h6 class="orange-text font-bold"><i class="fa fa-camera-retro"></i> Photography</h6>--}}
                                        <h2 class="card-title pt-3 mb-5 font-bold">Jumbotron with image overlay</h2>
                                        {{--<p class="px-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat--}}
                                        {{--fugiat, laboriosam, voluptatem, optio vero odio nam sit officia--}}
                                        {{--accusamus minus error nisi architecto nulla ipsum dignissimos.--}}
                                        {{--Odit sed qui, dolorum!</p>--}}
                                        {{--<a class="btn peach-gradient"><i class="fa fa-clone left"></i> View project</a>--}}
                                        {{--<!--Content-->--}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-image"
                                 style="background-image: url(https://mdbootstrap.com/img/Photos/Others/forest2.jpg);">
                                <div class="text-white text-center rgba-stylish-strong py-1 px-1">
                                    <div class="py-0">

                                        <!--Content-->
                                        {{--<h6 class="orange-text font-bold"><i class="fa fa-camera-retro"></i> Photography</h6>--}}
                                        <h2 class="card-title pt-3 mb-5 font-bold">Jumbotron with image overlay</h2>
                                        {{--<p class="px-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat--}}
                                        {{--fugiat, laboriosam, voluptatem, optio vero odio nam sit officia--}}
                                        {{--accusamus minus error nisi architecto nulla ipsum dignissimos.--}}
                                        {{--Odit sed qui, dolorum!</p>--}}
                                        {{--<a class="btn peach-gradient"><i class="fa fa-clone left"></i> View project</a>--}}
                                        {{--<!--Content-->--}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-image"
                                 style="background-image: url(https://mdbootstrap.com/img/Photos/Others/forest2.jpg);">
                                <div class="text-white text-center rgba-stylish-strong py-1 px-1">
                                    <div class="py-0">

                                        <!--Content-->
                                        {{--<h6 class="orange-text font-bold"><i class="fa fa-camera-retro"></i> Photography</h6>--}}
                                        <h2 class="card-title pt-3 mb-5 font-bold">Jumbotron with image overlay</h2>
                                        {{--<p class="px-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat--}}
                                        {{--fugiat, laboriosam, voluptatem, optio vero odio nam sit officia--}}
                                        {{--accusamus minus error nisi architecto nulla ipsum dignissimos.--}}
                                        {{--Odit sed qui, dolorum!</p>--}}
                                        {{--<a class="btn peach-gradient"><i class="fa fa-clone left"></i> View project</a>--}}
                                        {{--<!--Content-->--}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-image"
                                 style="background-image: url(https://mdbootstrap.com/img/Photos/Others/forest2.jpg);">
                                <div class="text-white text-center rgba-stylish-strong py-1 px-1">
                                    <div class="py-0">

                                        <!--Content-->
                                        {{--<h6 class="orange-text font-bold"><i class="fa fa-camera-retro"></i> Photography</h6>--}}
                                        <h2 class="card-title pt-3 mb-5 font-bold">Jumbotron with image overlay</h2>
                                        {{--<p class="px-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat--}}
                                        {{--fugiat, laboriosam, voluptatem, optio vero odio nam sit officia--}}
                                        {{--accusamus minus error nisi architecto nulla ipsum dignissimos.--}}
                                        {{--Odit sed qui, dolorum!</p>--}}
                                        {{--<a class="btn peach-gradient"><i class="fa fa-clone left"></i> View project</a>--}}
                                        {{--<!--Content-->--}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-image"
                                 style="background-image: url(https://mdbootstrap.com/img/Photos/Others/forest2.jpg);">
                                <div class="text-white text-center rgba-stylish-strong py-1 px-1">
                                    <div class="py-0">

                                        <!--Content-->
                                        {{--<h6 class="orange-text font-bold"><i class="fa fa-camera-retro"></i> Photography</h6>--}}
                                        <h2 class="card-title pt-3 mb-5 font-bold">Jumbotron with image overlay</h2>
                                        {{--<p class="px-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat--}}
                                        {{--fugiat, laboriosam, voluptatem, optio vero odio nam sit officia--}}
                                        {{--accusamus minus error nisi architecto nulla ipsum dignissimos.--}}
                                        {{--Odit sed qui, dolorum!</p>--}}
                                        {{--<a class="btn peach-gradient"><i class="fa fa-clone left"></i> View project</a>--}}
                                        {{--<!--Content-->--}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-image"
                                 style="background-image: url(https://mdbootstrap.com/img/Photos/Others/forest2.jpg);">
                                <div class="text-white text-center rgba-stylish-strong py-1 px-1">
                                    <div class="py-0">

                                        <!--Content-->
                                        {{--<h6 class="orange-text font-bold"><i class="fa fa-camera-retro"></i> Photography</h6>--}}
                                        <h2 class="card-title pt-3 mb-5 font-bold">Jumbotron with image overlay</h2>
                                        {{--<p class="px-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat--}}
                                        {{--fugiat, laboriosam, voluptatem, optio vero odio nam sit officia--}}
                                        {{--accusamus minus error nisi architecto nulla ipsum dignissimos.--}}
                                        {{--Odit sed qui, dolorum!</p>--}}
                                        {{--<a class="btn peach-gradient"><i class="fa fa-clone left"></i> View project</a>--}}
                                        {{--<!--Content-->--}}

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
        <section class="story_update my-5">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="h4-responsive font-weight-bold text-left text-uppercase badge aqua-gradient">Truyện Mới
                        Cập Nhật <i class="fab fa-gripfire"></i></h4>
                    <hr class="between-sections mt-0">
                    <div class="row justify-content-left">
                        <div class="col-md-12">
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
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="h4-responsive font-weight-bold text-left text-uppercase badge aqua-gradient">Truyện
                        Đang Đọc <i class="fab fa-gripfire"></i></h4>
                    <hr class="between-sections mt-0">
                    <div class="row justify-content-center">
                        <div class="col-md-12 table-responsive">
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
                        </div>
                    </div>

                    <h4 class="h4-responsive font-weight-bold text-left text-uppercase badge aqua-gradient">
                        Thể Loại <i class="fab fa-gripfire"></i></h4>
                    <hr class="between-sections mt-0">
                    <div class="row justify-content-center">
                        <div class="col-md-12 table-responsive">
                            <div class="d-flex flex-wrap">
                                <div class="m-2 badge badge-pill blue-gradient">The loai 1</div>
                                <div class="m-2 badge badge-pill blue-gradient">The loai 1</div>
                                <div class="m-2 badge badge-pill blue-gradient">The loai 1</div>
                                <div class="m-2 badge badge-pill blue-gradient">The loai 1</div>
                                <div class="m-2 badge badge-pill blue-gradient">The loai 1</div>
                                <div class="m-2 badge badge-pill blue-gradient">The loai 1</div>
                                <div class="m-2 badge badge-pill blue-gradient">The loai 1</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="story_full my-5">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="h4-responsive font-weight-bold text-left text-uppercase badge aqua-gradient">Truyện Đã
                        Hoàn Thành <i
                            class="fab fa-gripfire"></i></h4>
                    <hr class="between-sections mt-0">
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <!-- Image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg"
                                     alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Title -->
                            <div class="d-flex justify-content-between">
                                <div class="col-11 text-truncate pl-0 mb-3">
                                    <a class="font-weight-bold">This is title</a>
                                </div>
                            </div>
                            <!-- Featured news -->
                            <!-- Small news -->
                            <div class="single-news mb-3">
                                <!-- Title -->
                                <div class="d-flex justify-content-between">
                                    <div class="col-11 text-truncate pl-0 mb-3">
                                        <a>Continue</a>
                                    </div>
                                    <a><i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                            <!-- Small news -->
                        </div>
                        <div class="col-md-3">
                            <!-- Image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg"
                                     alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Title -->
                            <div class="d-flex justify-content-between">
                                <div class="col-11 text-truncate pl-0 mb-3">
                                    <a class="font-weight-bold">This is title</a>
                                </div>
                            </div>
                            <!-- Featured news -->
                            <!-- Small news -->
                            <div class="single-news mb-3">
                                <!-- Title -->
                                <div class="d-flex justify-content-between">
                                    <div class="col-11 text-truncate pl-0 mb-3">
                                        <a>Continue</a>
                                    </div>
                                    <a><i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                            <!-- Small news -->
                        </div>
                        <div class="col-md-3">
                            <!-- Image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg"
                                     alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Title -->
                            <div class="d-flex justify-content-between">
                                <div class="col-11 text-truncate pl-0 mb-3">
                                    <a class="font-weight-bold">This is title</a>
                                </div>
                            </div>
                            <!-- Featured news -->
                            <!-- Small news -->
                            <div class="single-news mb-3">
                                <!-- Title -->
                                <div class="d-flex justify-content-between">
                                    <div class="col-11 text-truncate pl-0 mb-3">
                                        <a>Continue</a>
                                    </div>
                                    <a><i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                            <!-- Small news -->
                        </div>
                        <div class="col-md-3">
                            <!-- Image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg"
                                     alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Title -->
                            <div class="d-flex justify-content-between">
                                <div class="col-11 text-truncate pl-0 mb-3">
                                    <a class="font-weight-bold">This is title</a>
                                </div>
                            </div>
                            <!-- Featured news -->
                            <!-- Small news -->
                            <div class="single-news mb-3">
                                <!-- Title -->
                                <div class="d-flex justify-content-between">
                                    <div class="col-11 text-truncate pl-0 mb-3">
                                        <a>Continue</a>
                                    </div>
                                    <a><i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                            <!-- Small news -->
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <!-- Image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg"
                                     alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Title -->
                            <div class="d-flex justify-content-between">
                                <div class="col-11 text-truncate pl-0 mb-3">
                                    <a class="font-weight-bold">This is title</a>
                                </div>
                            </div>
                            <!-- Featured news -->
                            <!-- Small news -->
                            <div class="single-news mb-3">
                                <!-- Title -->
                                <div class="d-flex justify-content-between">
                                    <div class="col-11 text-truncate pl-0 mb-3">
                                        <a>Continue</a>
                                    </div>
                                    <a><i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                            <!-- Small news -->
                        </div>
                        <div class="col-md-3">
                            <!-- Image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg"
                                     alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Title -->
                            <div class="d-flex justify-content-between">
                                <div class="col-11 text-truncate pl-0 mb-3">
                                    <a class="font-weight-bold">This is title</a>
                                </div>
                            </div>
                            <!-- Featured news -->
                            <!-- Small news -->
                            <div class="single-news mb-3">
                                <!-- Title -->
                                <div class="d-flex justify-content-between">
                                    <div class="col-11 text-truncate pl-0 mb-3">
                                        <a>Continue</a>
                                    </div>
                                    <a><i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                            <!-- Small news -->
                        </div>
                        <div class="col-md-3">
                            <!-- Image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg"
                                     alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Title -->
                            <div class="d-flex justify-content-between">
                                <div class="col-11 text-truncate pl-0 mb-3">
                                    <a class="font-weight-bold">This is title</a>
                                </div>
                            </div>
                            <!-- Featured news -->
                            <!-- Small news -->
                            <div class="single-news mb-3">
                                <!-- Title -->
                                <div class="d-flex justify-content-between">
                                    <div class="col-11 text-truncate pl-0 mb-3">
                                        <a>Continue</a>
                                    </div>
                                    <a><i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                            <!-- Small news -->
                        </div>
                        <div class="col-md-3">
                            <!-- Image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg"
                                     alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Title -->
                            <div class="d-flex justify-content-between">
                                <div class="col-11 text-truncate pl-0 mb-3">
                                    <a class="font-weight-bold">This is title</a>
                                </div>
                            </div>
                            <!-- Featured news -->
                            <!-- Small news -->
                            <div class="single-news mb-3">
                                <!-- Title -->
                                <div class="d-flex justify-content-between">
                                    <div class="col-11 text-truncate pl-0 mb-3">
                                        <a>Continue</a>
                                    </div>
                                    <a><i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                            <!-- Small news -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
