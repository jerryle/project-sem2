@extends('layouts.master2', ['search' => isset($s) ? $s : ''])
@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="py-4 text-left text-lg-left">
                <h5 class="h5-responsive black-text text-uppercase font-weight-bold mb-4">Truyện {{$genre->name}}</h5>
                <hr class="between-sections mt-0">
                <!--Grid row-->
                <div class="list-stories">
                    <ul>
                        @foreach($genre->stories as $story)
                            <li>
                                <div class="row justify-content-center">
                                    <!--Grid column-->
                                    <div class="col-md-3 table-responsive-sm">
                                        <!--Featured image-->
                                        <div class="view zoom float-left">
                                            <img src="{{$story->image}}" class="img-fluid" alt="{{$story->title}}">
                                        </div>
                                    </div>

                                    <!--Grid column-->
                                    <div class="story-info-box col-md-9 table-responsive-sm">
                                    <p><a class="green-text h4-responsive" href="{{route('view_story',$story->getRouteKeyName())}}">{{$story->title}}</a>
                                            
                                        </p>
                                        <p>Tác giả: {{$story->author}} <em>|</em> <i class="fas fa-pen mr-1"></i> {{$story->user->username}} <em>|</em> <i
                                                class="far fa-clock mr-1"></i>{{$story->updated_at}}</p>

                                        <ul class="nav lighten-4 py-0">
                                            <li class="nav-item">
                                                <p class="item">Xem: {{$story->getViews()}}</p>
                                            </li>
                                            <li class="nav-item">
                                                <p class="mr-2 ml-2"> | </p>
                                            </li>
                                            <li class="nav-item">
                                                <p class="item">Số Chương: {{count($story->chapters)}}</p>
                                            </li>
                                            <li class="nav-item">
                                                <p class="mr-2 ml-2"> | </p>
                                            </li>
                                            <li class="nav-item">
                                                <p class="item">Lượt Theo Dõi: 0</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--Grid column-->
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="detail col-md-3 d-none d-lg-block">
            <p class="mt-3">
            <h5><strong>Thể loại {{$genre->name}}</strong></h5>
            {!! $genre->description !!}
            </p>
        </div>
    </div>
@endsection
