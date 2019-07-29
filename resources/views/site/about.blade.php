@extends('layout')
@section('content')


    <!-- Top bar -->
    <div class="top-bar">
        <h1>About Me</h1>
        <p><a href="#">Home</a> / About me</p>
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
            <p>{{ $page->body }}</p>
            <div class="h-10"></div>
            <ul class="social-ul">
                <li class="box-social"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-dribbble"></i></a></li>
            </ul>


        </div>
    </div>
    <!-- end Main container -->

@endsection