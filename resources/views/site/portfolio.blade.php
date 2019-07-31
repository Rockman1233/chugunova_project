@extends('layout')
@section('content')


    <!-- top bar -->
    <div class="top-bar">
        <h1>portfolio</h1>
        <p><a href="#">Home</a> / Portfolio</p>
    </div>
    <!-- end top bar -->

    <!-- main container -->
    <div class="main-container portfolio-inner clearfix">
        <!-- portfolio div -->
        <div class="portfolio-div">
            <div class="portfolio">
                <!-- portfolio_filter -->
                <div class="categories-grid wow fadeInLeft">
                    <nav class="categories text-center">
                        <ul class="portfolio_filter">
                            <li><a href="" class="active" data-filter="*">Всё</a></li>
                            @foreach($categories as $category)
                                <li><a href="" data-filter=".{{$category->slug}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <!-- portfolio_filter -->

                <!-- portfolio_container -->
                <div class="no-padding portfolio_container clearfix">

                    @foreach($projects as $project)
                        <!-- single work -->
                            <div class="col-md-4 col-sm-6  {{$project->getCategory()->slug}} logo">
                                <a href="single-project/{{ $project->slug }}" class="portfolio_item">
                                    <img src="{{ Voyager::image( $project->image ) }}" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info">
                                                <span>{{$project->title }}</span>
                                                <em>Fashion / Logo</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                    @endforeach

                    <!--
                    Если хочешь две категории просто добавь в класс 2 штуки: <div class="col-md-4 col-sm-6 graphics ads">
                    -->

                </div>
                <!-- end portfolio_container -->
            </div>
            <!-- portfolio -->
        </div>
        <!-- end portfolio div -->
    </div>
    <!-- end main container -->

@endsection