@section('footer')
    <!-- footer -->
    <footer id="footer">
        <div class="container-fluid">
            <p class="copyright"><a href="https://www.facebook.com/sergey.andreykin.1"><i class="fa fa-facebook"></i></a>Andreykin prod. 2019</p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- back to top -->
    <a href="#0" class="cd-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
    <!-- end back to top -->

    <!--  plugins -->
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/animated-headline.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>


    <!--  custom script -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- google analytics  -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-76796224-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script>
        $(document).ready(function() {

            var docHeight = $(window).height();
            var footerHeight = $('#footer').height();
            var footerTop = $('#footer').position().top + footerHeight;

            if (footerTop < docHeight)
                $('#footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
        });
    </script>
@endsection