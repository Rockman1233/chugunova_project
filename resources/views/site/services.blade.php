@extends('layout')
@section('content')


    <!-- top bar -->
    <div class="top-bar">
        <h1>Сервисы</h1>
        <p><a href="#">Простые</a> / Пространства</p>
    </div>
    <!-- end top bar -->

    <div class="container main-container">
        <div class="clearfix">
            @foreach($services as $service)
                <!-- service-box -->
                <div class="col-md-4 service-box text-center">
                    <i class="fa fa-4x {{$service->icon}}"></i>
                    <h3>{{$service->title}}</h3>
                    <div class="h-10"></div>
                    <p>{{$service->body}}</p>
                </div>
                <!-- end service-box -->
            @endforeach
        </div>
    </div>
@endsection