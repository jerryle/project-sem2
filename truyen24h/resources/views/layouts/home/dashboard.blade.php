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

        <section class="magazine-section my-5 d-none d-lg-block">
            <h4 class="h4-responsive font-weight-bold text-left text-uppercase badge aqua-gradient">Truyện hot <i
                    class="fab fa-gripfire"></i></h4>
            <hr class="between-sections mt-0">
            
            <div class="row row-eq-height mh-100" style="height:400px;">
                <div class="col-md-4">
                
                        <div class="card card-image mb-3" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                            <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                                <h5 class="h5-reponsive"> Marketing</h5>
                              </div>
            
                        </div>
                    
                </div>
                <div class="col-md-8">
                    <div class="row row-eq-height mh-100" style="height:200px;">
                        <div class="col-md-3">
                            <div class="card card-image mb-3 pb-auto" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                                <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                                    <h5 class="h5-reponsive"> Marketing</h5>
                                  </div>
                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-image mb-3" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                                <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                                    <h5 class="h5-reponsive"> Marketing</h5>
                                  </div>
                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-image mb-3" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                                <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                                    <h5 class="h5-reponsive"> Marketing</h5>
                                  </div>
                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-image mb-3" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                                <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                                    <h5 class="h5-reponsive"> Marketing</h5>
                                  </div>
                
                            </div>
                        </div>
                    </div>
                    <div class="row row-eq-height mh-100" style="height:200px;">
                        <div class="col-md-3">
                            <div class="card card-image mb-3" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                                <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                                    <h5 class="h5-reponsive"> Marketing</h5>
                                  </div>
                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-image mb-3" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                                <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                                    <h5 class="h5-reponsive"> Marketing</h5>
                                  </div>
                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-image mb-3" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                                <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                                    <h5 class="h5-reponsive"> Marketing</h5>
                                  </div>
                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-image mb-3" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                                <div class="text-white text-center rgba-black-strong pt-3 mt-auto">
                                    <h5 class="h5-reponsive"> Marketing</h5>
                                  </div>
                
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>

        </section>
        <section class="story_update my-5">
            <div class="row">
                <div class="col-lg-8">
                    <h4 class="h4-responsive font-weight-bold text-left text-uppercase badge aqua-gradient">Truyện Mới
                        Cập Nhật <i class="fab fa-gripfire"></i></h4>
                    <hr class="between-sections mt-0">
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
                <div class="col-lg-4 d-none d-lg-block">
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
            <h4 class="h4-responsive font-weight-bold text-left text-uppercase badge aqua-gradient">Truyện Đã
                Hoàn Thành <i
                    class="fab fa-gripfire"></i></h4>
            <hr class="between-sections mt-0">
            <div class="row justify-content-center">
                <div class="col-sm">
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
                <div class="col-sm">
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
                <div class="col-sm">
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
                <div class="col-sm">
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
                
                <div class="col-sm">
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
                <div class="col-sm">
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
            {{-- <div class="row justify-content-center">
                <div class="col-2">
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
                <div class="col-2">
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
                <div class="col-2">
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
                <div class="col-2">
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
                
                <div class="col-2">
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
                <div class="col-2">
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
    
            </div> --}}
        </section>
    </div>
@endsection
