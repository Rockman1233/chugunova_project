<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Дизайн бюро - Простые пространства</title>
    <link rel="icon" href="{{ asset('img/fav.png') }}" type="image/x-icon">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- main css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/_variables.scss') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- modernizr -->
    <script src="{{ asset('js/modernizr.js') }}"></script>

    <script src="{{ asset('js/animated-headline.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">

        <!-- box header -->
        @include('site.elements.header')
        @yield('header')
        <!-- end box header -->

        <!-- nav -->
        {!! menu('main', 'site.elements.menu') !!}
        <!-- end nav -->

    </div>

    @yield('content')

    <!-- nav -->
    @include('site.elements.footer')
    @yield('footer')
    <!-- end nav -->

</body>

</html>