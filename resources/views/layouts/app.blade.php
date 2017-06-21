<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- SITE META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
    @section('head')
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/apple-touch-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/apple-touch-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/apple-touch-icon-152x152.png')}}">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('revolution/css/settings.css')}}">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('revolution/css/layers.css')}}">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('revolution/css/navigation.css')}}">

    <!-- BOOTSTRAP STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    <!-- RESPONSIVE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Styles -->
@show

</head>
<body>

<div id="wrapper">

    @section('header')
        @include('includes.header')
    @show
    <div id="loader">
        <div class="loader-container">
            <img src="{{asset('images/load.gif')}}" alt="" class="loader-site spinner">
        </div>
    </div>
    {{--=========================  SECTION WITH =========================--}}
    @if(session('success'))
        <div class="info_modal alert">
            <div class="alert-success alert_fixed  alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {!! session('success') !!}!
            </div>
        </div>

    @endif

    @if(session('error'))
        <div class="info_modal alert">
            <div class="alert-danger alert-dismissable fade in  alert_fixed">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {!! session('error') !!}!
            </div>
        </div>
    @endif
    @if(isset($errors) && !empty($errors->first()))
        <div class="info_modal alert">
            <div class="alert-danger alert-dismissable fade in alert_fixed">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    @if(session('info'))
        <div class="info_modal alert">
            <div class="alert-info alert-dismissable fade in alert_fixed">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {!! session('info') !!}
            </div>
        </div>
    @endif
    @if (session('status'))
        <div class="info_modal alert">
            <div class="alert-success alert_fixed alert-dismissable fade in ">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('status') }}
            </div>
        </div>
    @endif




    @yield('content')

    @section('login')
        @include('includes.modalLogin')
    @show
    @section('footer')
        @include('includes.footer')
    @show


</div>

<!-- Scripts -->

@section('script')
    <!-- Main Scripts-->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/hover.js')}}"></script>
    <script src="{{asset('js/banner-grid.js')}}"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script type="text/javascript"
            src="{{asset('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('js/jquery.leanModal.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('js/main.js')}}"></script>

    <script type="text/javascript">
        (function ($) {
            "use strict";
            var tpj = jQuery;
            var revapi56;
            tpj(document).ready(function () {
                if (tpj("#rev_slider_56_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_56_1");
                } else {
                    revapi56 = tpj("#rev_slider_56_1").show().revolution({
                        sliderType: "hero",
                        jsFileLocation: "revolution/js/",
                        sliderLayout: "fullwidth",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {},
                        responsiveLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [720, 640, 640, 640],
                        lazyType: "none",
                        parallax: {
                            type: "scroll",
                            origo: "enterpoint",
                            speed: 400,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                        },
                        shadow: 0,
                        spinner: "off",
                        autoHeight: "off",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            disableFocusListener: false,
                        }
                    });
                }
            });
            /*ready*/
        })(jQuery);
    </script>
@show
</body>
</html>
