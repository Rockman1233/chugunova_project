@extends('layout')
@section('content')


    <!-- top-bar -->
    <div class="top-bar">
        <h1>{{ $project->title }}</h1>
        <p><a href="#">Home</a> / <a href="#">portfolio</a> / {{ $project->title }}</p>
    </div>
    <!-- end top-bar -->
    
    <!-- main-container -->
    <div class="container main-container">
        <div class="col-md-12">
            <img src="{{ Voyager::image( $project->image ) }}" alt="" class="img-responsive" />
            <div class="h-30"></div>
        </div>

        <div class="col-md-12">
            <h3 class="text-uppercase">{{ $project->title }}</h3>
            <h5>{{ $project->excerpt }}</h5>
            <div class="h-30"></div>
        </div>

        <div class="col-md-9">
            {{ $project->body }}
        </div>

        <div class="col-md-3">
            <ul class="cat-ul">
                <li><i class="ion-ios-circle-filled"></i> Design</li>
                <li><i class="ion-ios-circle-filled"></i> consectetur adipiscing</li>
                <li><i class="ion-ios-circle-filled"></i> et gubernationis</li>
                <li><i class="ion-ios-circle-filled"></i> Aliter enim nosmet</li>
            </ul>
            <div class="h-10"></div>
            <h4>Share</h4>
            <ul class="social-ul">
                <li class="box-social"><a href="#0"><i class="fa fa-facebook"></i></a></li>
                <li class="box-social"><a href="#0"><i class="fa fa-instagram"></i></a></li>
                <li class="box-social"><a href="#0"><i class="fa fa-twitter"></i></a></li>
                <li class="box-social"><a href="#0"><i class="fa fa-vk"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- end main-container -->

@endsection