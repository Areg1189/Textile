@extends('adminlte::layouts.app')

{{--@section('htmlheader_title')--}}
{{--{{ trans('adminlte_lang::message.home') }}--}}
{{--@endsection--}}
@section('link')
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
@endsection

@section('main-content')
    <div class="container">
        <div class="first-slider">
            <div id="rev_slider_56_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                 data-alias="sports-hero54"
                 style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <div id="rev_slider_56_1" class="rev_slider fullwidthabanner" style="display:none;"
                     data-version="5.0.7">
                    <ul>
                        <li data-index="rs-214" data-transition="fade" data-slotamount="7" data-easein="default"
                            data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off"
                            data-title="Slide" data-description="">
                            <img src="{{asset('upload/slider_01.jpg')}}" alt="" data-bgposition="center center"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                            <div class="tp-caption Sports-Display   tp-resizeme rs-parallaxlevel-0"
                                 id="slide-214-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']"
                                 data-voffset="['-180','-170','-190','-140']"
                                 data-fontsize="['120','120','120','100']"
                                 data-lineheight="['130','130','130','100']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;s:1000;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="750"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 5; white-space: nowrap;">HOME
                            </div>

                            <div class="tp-caption Sports-DisplayFat   tp-resizeme rs-parallaxlevel-0"
                                 id="slide-214-layer-2"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-48','-48','-68','-48']"
                                 data-fontsize="['133','133','133','100']"
                                 data-lineheight="['130','130','130','100']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;s:1000;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 6; white-space: nowrap;">STYLE
                            </div>

                            <div class="tp-caption Sports-Subline   tp-resizeme rs-parallaxlevel-0"
                                 id="slide-214-layer-4"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['71','71','51','41']"
                                 data-fontsize="['30','30','30','25']"
                                 data-lineheight="['10','30','30','25']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;"
                                 data-transform_out="y:[100%];s:1000;s:1000;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1500"
                                 data-splitin="chars"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 data-elementdelay="0.05"
                                 style="z-index: 8; white-space: nowrap; background-color: #ffffff; margin:0; padding:20px 0 0 0; text-align:center; font-size: 30px;">
                                STYLISH FURNITURE TEMPLATE
                            </div>


                        </li>
                    </ul>
                    <div class="tp-static-layers"></div>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div><!-- END REVOLUTION SLIDER -->
        </div>
    </div>

@endsection
@section('script')
    @parent


    <!-- REVOLUTION JS FILES -->
    {{--<script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>--}}
    {{--<script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>--}}

    {{--<script type="text/javascript">--}}
    {{--(function ($) {--}}
    {{--"use strict";--}}
    {{--var tpj = jQuery;--}}
    {{--var revapi56;--}}
    {{--tpj(document).ready(function () {--}}
    {{--if (tpj("#rev_slider_56_1").revolution == undefined) {--}}
    {{--revslider_showDoubleJqueryError("#rev_slider_56_1");--}}
    {{--} else {--}}
    {{--revapi56 = tpj("#rev_slider_56_1").show().revolution({--}}
    {{--sliderType: "hero",--}}
    {{--jsFileLocation: "revolution/js/",--}}
    {{--sliderLayout: "fullwidth",--}}
    {{--dottedOverlay: "none",--}}
    {{--delay: 9000,--}}
    {{--navigation: {},--}}
    {{--responsiveLevels: [1240, 1024, 778, 480],--}}
    {{--gridwidth: [1240, 1024, 778, 480],--}}
    {{--gridheight: [720, 640, 640, 640],--}}
    {{--lazyType: "none",--}}
    {{--parallax: {--}}
    {{--type: "scroll",--}}
    {{--origo: "enterpoint",--}}
    {{--speed: 400,--}}
    {{--levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],--}}
    {{--},--}}
    {{--shadow: 0,--}}
    {{--spinner: "off",--}}
    {{--autoHeight: "off",--}}
    {{--disableProgressBar: "on",--}}
    {{--hideThumbsOnMobile: "off",--}}
    {{--hideSliderAtLimit: 0,--}}
    {{--hideCaptionAtLimit: 0,--}}
    {{--hideAllCaptionAtLilmit: 0,--}}
    {{--debugMode: false,--}}
    {{--fallbacks: {--}}
    {{--simplifyAll: "off",--}}
    {{--disableFocusListener: false,--}}
    {{--}--}}
    {{--});--}}
    {{--}--}}
    {{--});--}}
    {{--/*ready*/--}}
    {{--})(jQuery);--}}
    {{--</script>--}}



    {{--<script src="{{asset('js/jquery.js')}}"></script>--}}
    {{--<script src="{{asset('js/bootstrap.min.js')}}"></script>--}}
    {{--<script src="{{asset('js/plugins.js')}}"></script>--}}
    {{--<script src="{{asset('js/hover.js')}}"></script>--}}
    {{--<script src="{{asset('js/banner-grid.js')}}"></script>--}}


    <script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->


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
@endsection
