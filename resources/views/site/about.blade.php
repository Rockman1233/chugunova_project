@extends('layout')
@section('content')


    <!-- Top bar -->
    <div class="top-bar">
        <h1>About Me</h1>
        <p><a href="#">Home</a> / Обо мне</p>
    </div>
    <!-- end Top bar -->

    <!-- Main container -->
    <div class="container main-container clearfix">
        <div class="col-md-6">
            <img src="{{ Voyager::image( $page->image ) }}" class="img-responsive" alt="" />
        </div>
        <div class="col-md-6">
            <h3 class="uppercase">{{ $page->title }}</h3>
            <h5>{{ $page->excerpt }}</h5>
            <div class="h-30"></div>
            {!! $page->body !!}
            <div class="h-10"></div>
            <ul class="social-ul">
                @foreach($social as $net)
                    <li class="box-social"><a href="//{{$net->link}}"><i class="fa {{$net->icon}}"></i></a></li>
                @endforeach
            </ul>

        </div>
    </div>
    <!-- end Main container -->

@endsection