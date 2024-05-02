<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Honest &mdash; Free Website Template, Free HTML5 Template by GetTemplates.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by GetTemplates.co"/>
    <meta name="keywords"
          content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive"/>
    <meta name="author" content="GetTemplates.co"/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>

<div class="gtco-loader"></div>

<div id="page">


    <div class="page-inner">

        <div id="head-top" style="position: absolute; width: 100%; top: 0; ">
            <div class="gtco-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <div id="gtco-logo"><a href="{{ route('index') }}">SMM <em>.</em></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="gtco-nav sticky-banner" role="navigation">
                <div class="gtco-container">

                    <div class="row">
                        <div class="col-xs-12 text-center menu-1">
                            <ul>
                                <li class="@if(request()->routeIs('index')) active @endif"><a href="#">Home</a></li>
                                <li class="@if(request()->routeIs('service')) active @endif"><a href="#services">Services</a></li>
                                <li class="@if(request()->routeIs('portfolio')) active @endif"><a href="#gtco-counter">Networks</a></li>
                                <li class="@if(request()->routeIs('contact')) active @endif"><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
        </div>

        @yield('content')

        <footer id="gtco-footer" role="contentinfo" style="padding: 10px;">
            <div class="gtco-container">
                <div class="row copyright">
                    <div class="col-md-12">
                        <p class="pull-left">
                            <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
                            <small class="block">Designed by <a href="http://GetTemplates.co/" target="_blank">GetTemplates.co</a>
                                Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/sticky.js') }}"></script>
<!-- Carousel -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- countTo -->
<script src="{{ asset('js/jquery.countTo.js') }}"></script>

<!-- Stellar Parallax -->
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>

<!-- Magnific Popup -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/magnific-popup-options.js') }}"></script>

<!-- Main -->
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>

