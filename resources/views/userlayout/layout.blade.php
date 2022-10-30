<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <title>Desa Kalimas</title>
    <meta name="author" content="luckynvic@gmail.com">
    <link href="{{ asset('assets/p/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('leaflet/leaflet.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <script src="{{ asset('leaflet/leaflet.js') }}"></script>
    @yield('add_css')
    <link href="{{ asset('assets/p/ext/customScroll/css/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/p/css/style.default.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href="{{ asset('temp/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('temp/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('temp/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('temp/fonts/antonio-exotic/stylesheet.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('temp/css/lightbox.min.css') }}">
    <link href="{{ asset('temp/css/responsive.css') }}" rel="stylesheet">
    <script src="{{ asset('temp/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('temp/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('temp/js/lightbox-plus-jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('temp/js/instafeed.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('temp/js/custom.js') }}" type="text/javascript"></script>
</head>

<body>

    @include('userlayout.navbar')

    @yield('content')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 width-set-50">
                    <div class="footer-details">
                        <h4>Informasi Desa</h4>
                        <ul class="list-unstyled footer-contact-list">
                            <li>
                                <i class="fa fa-map-marker fa-lg"></i>
                                <p><a href="https://goo.gl/maps/fY76GKKkXKkncnRh9">Jalan Raya Kalimas No.26, Kalimas,
                                        Kec. Sungai Kakap, Kabupaten
                                        Kubu Raya, Kalimantan
                                        Barat 78381</a></p>
                            </li>
                            <li>
                                <i class="fa fa-phone fa-lg"></i>
                                <p><a href="tel:+1-202-555-0100"> +62</a></p>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o fa-lg"></i>
                                <p><a href="mailto:demo@info.com"> desakalimas@gmail.com</a></p>
                            </li>
                        </ul>
                        <div class="footer-social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 width-50 width-set-50">
                    <div class="footer-details">
                        <h4>explore</h4>
                        <ul class="list-unstyled footer-links">
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="/profiledesa">Profile Desa</a></li>
                            <li><a href="/pemerintahan">Pemerintahan</a></li>
                            <li><a href="/peta">Peta Desa</a></li>
                            <li><a href="/about">Tentang Desa</a></li>
                            <li> <a href="/contactus">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="footer-details">
                        <h4>Iklan Desa</h4>
                        <div class="row">
                            <div class="instagram-images">
                                <div id="instafeed"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright">
                &copy; 2022 All right reserved. Website Resmi <a href="/" target="_blank">Desa
                    Kalimas</a>
            </div>
        </div>
    </footer>
    <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
        <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
        <span>Top</span>
    </a>

    <script src="{{ asset('assets/p/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('assets/p/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/p/ext/customScroll/js/jquery.mCustomScrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/p/ext/customScroll/js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('assets/p/js/application.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
    @yield('add_js')
    @yield('add_css')
</body>

</html>
