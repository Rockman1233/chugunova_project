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
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ Voyager::image( $project->image ) }}" alt="Slide 1">
                    </div>
                    <div class="item">
                        <img src="{{ Voyager::image( $project->image ) }}" alt="Slide 2">
                    </div>
                    <div class="item">
                        <img src="{{ Voyager::image( $project->image ) }}" alt="Slide 3">
                    </div>
                </div>
                <a href="#carousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a href="#carousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <div class="col-md-12">
            <h3 class="text-uppercase">{{ $project->title }}</h3>
            <h5>{{ $project->excerpt }}</h5>
            <div class="h-30"></div>
        </div>

        <div class="col-md-9">
            {!! $project->body !!}
        </div>

        <div class="col-md-3">
            <ul class="cat-ul">
                <li><i class="fa fa-star"></i> {{ $project->getCategory()->slug }}</li>
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