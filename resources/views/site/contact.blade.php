@extends('layout')
@section('content')


    <!-- top bar -->
    <div class="top-bar">
        <h1>контакт</h1>
        <p><a href="#">Home</a> / контакт</p>
    </div>
    <!-- end top bar -->

    <!-- main-container -->
    <div class="container main-container">
        <div class="col-md-6">
            <form action="/get-message" method="post" id="contact-form">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" required name="name">
                            <span>Как к вам обращаться</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" required name="email">
                            <span>E-mail</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-contact">
                            <input type="text" name="phone">
                            <span>Телефон</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="textarea-contact">
                            <textarea required name="text"></textarea>
                            <span>Сообщение</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-box">Отправить</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-6">
            <h3 class="text-uppercase">{{ $page->title }}</h3>
            <h5>{{ $page->excerpt }}</h5>
            <div class="h-30"></div>
            {!! $page->body !!}
            <div class="contact-info">
                <p><i class="fa fa-phone"></i> 0100 787 3456</p>
                <p><i class="fa fa-mail-forward"></i> box@info.com</p>
            </div>
        </div>


    </div>
    <!-- end main-container -->

@endsection