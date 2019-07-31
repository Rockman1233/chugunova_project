@extends('layout')
@section('content')


    <!-- box-intro -->
    <section class="box-intro">
        <div class="table-cell">
            <h1 class="box-headline letters rotate-2">
                        <span class="box-words-wrapper">
                            <b class="is-visible">Дизайн.</b>
                            <b>&nbsp;Работа.</b>
                            <b>Котики.</b>
                        </span>
            </h1>
            <h5>Студия дизайна Анны Чугуновой</h5>
        </div>

        <div class="mouse">
            <div class="scroll"></div>
        </div>
    </section>
    <!-- end box-intro -->
    <!-- portfolio div -->
    <div class="portfolio-div">
        <div class="portfolio">
            <div class="no-padding portfolio_container">
                @foreach($posts as $ndx => $post)
                    <div class="no-padding @if($loop->iteration % 3 == 0)col-md-6 col-sm-12 photography @else col-md-3 col-sm-6 fashion logo @endif">
                        <a href="single-project/{{ $post->slug }}" class="portfolio_item">
                            <img src="{{ Voyager::image( $post->image ) }}" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>{!! $post->title !!}</span>
                                        <em>{!! $post->title !!}</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            <!-- end portfolio_container -->
        </div>
        <!-- portfolio -->
    </div>
    <!-- end portfolio div -->


@endsection