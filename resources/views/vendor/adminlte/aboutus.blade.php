@extends('layouts.app')

@section('head')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.4.1/croppie.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{asset('css/admin/admin.css')}}">
@endsection
@section('content')


    <section class="section paralbackground page-banner hidden-xs" style="background-image:url('upload/page_banner_about.jpg');" data-img-width="2000" data-img-height="400" data-diff="100">
    </section>
    <!-- end section -->

    <div class="page-title">
        <div class="container clearfix">
            <div class="title-area pull-left">
                <h2>About us <small>Welcome to the HomeStyle shop!</small></h2>
            </div><!-- /.pull-right -->
            <div class="pull-right hidden-xs">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">About</li>
                    </ol>
                </div><!-- end bread -->
            </div><!-- /.pull-right -->

        </div>

    </div><!-- end page-title -->

    <div class="col-sm-offset-1">
        <button class="btn btn-info btn-edit iconUpdate" title="Edite Image end Text"
                data-status="home_image"
                data-toggle="modal"
                data-target="#modalUpdate">
            <i class="fa fa-edit"></i> Edit
        </button>
    </div>

    <section class="section lb">
        <div class="container">
            <!-- START REVOLUTION SLIDER 5.0 auto mode -->
            <div id="rev_slider" class="rev_slider"  data-version="5.0">
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="fade">
                        <!-- MAIN IMAGE -->
                        <img src="upload/about_slider_01.jpg"  alt=""  width="1250" height="600">
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-0"
                             id="slide-214-layer-3"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['55','55','55','40']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="y:[100%];s:1000;s:1000;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="550"
                             data-responsive_offset="on"
                             style="z-index: 7;"><img src="upload/sports_sublinebg.png" alt="" width="500" height="45" data-ww="['500px','500px','500px','420px']" data-hh="45px" data-no-retina>
                        </div>

                        <div class="tp-caption Sports-Subline   tp-resizeme rs-parallaxlevel-0"
                             id="slide-214-layer-4"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['71','71','51','41']"
                             data-fontsize="['30','30','30','25']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;"
                             data-transform_out="y:[100%];s:1000;s:1000;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="550"
                             data-splitin="chars"
                             data-splitout="none"
                             data-responsive_offset="on"
                             data-elementdelay="0.05"
                             style="z-index: 8; white-space: nowrap; font-size: 30px; line-height: 30px;">WELCOME TO HOMESTYLE
                        </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-transition="fade">
                        <!-- MAIN IMAGE -->
                        <img src="upload/about_slider_02.jpg"  alt=""  width="1250" height="600">
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-0"
                             id="slide-214-layer-31"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['55','55','55','40']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="y:[100%];s:1000;s:1000;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="550"
                             data-responsive_offset="on"
                             style="z-index: 7;"><img src="upload/sports_sublinebg.png" alt="" width="500" height="45" data-ww="['500px','500px','500px','420px']" data-hh="45px" data-no-retina>
                        </div>

                        <div class="tp-caption Sports-Subline   tp-resizeme rs-parallaxlevel-0"
                             id="slide-214-layer-43"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['71','71','51','41']"
                             data-fontsize="['30','30','30','25']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;"
                             data-transform_out="y:[100%];s:1000;s:1000;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="550"
                             data-splitin="chars"
                             data-splitout="none"
                             data-responsive_offset="on"
                             data-elementdelay="0.05"
                             style="z-index: 8; white-space: nowrap; font-size: 30px; line-height: 30px;">WE BUILD AWESOMENESS
                        </div>
                    </li>
                </ul>
            </div><!-- END REVOLUTION SLIDER -->
        </div><!-- end container -->
    </section><!-- end section -->


    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-left clearfix">
                        <h4>About Us</h4>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

s
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-left clearfix">
                        <h4>WHY HomeStyles?</h4>
                        <p>Donec vitae sapien ut libero venenatis faucibus.</p>
                        <hr>
                    </div><!-- end title -->

                    <div class="content-widget">
                        <div class="accordion-widget">
                            <div class="accordion-toggle-2">
                                <div class="panel-group" id="accordion3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseFour">
                                                    Why HomeStyle ? <i class="indicator fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseFive">
                                                    What IS HomeStyle ? <i class="indicator fa fa-minus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie. ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseSix">
                                                    What is HomeStyle Features ? <i class="indicator fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseSix" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- accordion -->
                        </div><!-- end accordion-widget -->
                    </div><!-- end content-widget -->
                </div><!-- end col -->

                {{--<div class="col-md-6 col-sm-12">--}}
                    {{--<div class="section-title text-left clearfix">--}}
                        {{--<h4>In The Press</h4>--}}
                        {{--<p>Donec vitae sapien ut libero venenatis faucibus.</p>--}}
                        {{--<hr>--}}
                    {{--</div><!-- end title -->--}}

                    {{--<div class="related-posts">--}}
                        {{--<div class="entry">--}}
                            {{--<p><a href="single.html" title=""> Best Furniture Company in India</a></p>--}}
                            {{--<small>Forbess</small>--}}
                        {{--</div><!-- end entry -->--}}

                        {{--<div class="entry">--}}
                            {{--<p><a href="single.html" title="">Who Did $100.000 per Months from Handcratfs</a></p>--}}
                            {{--<small>Smashing Magazine</small>--}}
                        {{--</div><!-- end entry -->--}}

                        {{--<div class="entry">--}}
                            {{--<p><a href="single.html" title="">HomeStyle Make Awesome Materials for Decorations</a></p>--}}
                            {{--<small>Furniture News</small>--}}
                        {{--</div><!-- end entry -->--}}

                        {{--<div class="entry">--}}
                            {{--<p><a href="single.html" title="">Thanks HomeStyle Making Awesomeness!.</a></p>--}}
                            {{--<small>Braking News</small>--}}
                        {{--</div><!-- end entry -->--}}

                        {{--<div class="entry">--}}
                            {{--<p><a href="single.html" title="">Looking For Best Furnitures? Check HomeStyle INC.</a></p>--}}
                            {{--<small>NY Times</small>--}}
                        {{--</div><!-- end entry -->--}}
                    {{--</div><!-- end related -->--}}
                {{--</div><!-- end col -->--}}
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    {{--<section class="section paralbackground parallax content-light" style="background-image:url('upload/parallax_01.jpg');" data-img-width="2000" data-img-height="2000" data-diff="10">--}}
        {{--<div class="container">--}}
            {{--<div class="section-title text-center clearfix">--}}
                {{--<h4>Company Statics</h4>--}}
                {{--<p>Donec vitae sapien ut libero venenatis faucibus.</p>--}}
                {{--<hr>--}}
            {{--</div><!-- end title -->--}}

            {{--<div class="row services-list text-center">--}}
                {{--<div class="col-md-3 col-sm-6 GrayScale">--}}
                    {{--<div class="box">--}}
                        {{--<img src="upload/icon_01.png" alt="" class="img-responsive">--}}
                        {{--<h3>Furniture Sets</h3>--}}
                        {{--<p class="stat-count">34551</p>--}}
                    {{--</div><!-- end box -->--}}
                {{--</div>--}}

                {{--<div class="col-md-3 col-sm-6 GrayScale">--}}
                    {{--<div class="box">--}}
                        {{--<img src="upload/icon_02.png" alt="" class="img-responsive">--}}
                        {{--<h3>Chair Varieties</h3>--}}
                        {{--<p class="stat-count">12560</p>--}}
                    {{--</div><!-- end box -->--}}
                {{--</div>--}}

                {{--<div class="col-md-3 col-sm-6 GrayScale">--}}
                    {{--<div class="box">--}}
                        {{--<img src="upload/icon_03.png" alt="" class="img-responsive">--}}
                        {{--<h3>Gardolap Varieties</h3>--}}
                        {{--<p class="stat-count">2214</p>--}}
                    {{--</div><!-- end box -->--}}
                {{--</div>--}}

                {{--<div class="col-md-3 col-sm-6 GrayScale">--}}
                    {{--<div class="box">--}}
                        {{--<img src="upload/icon_04.png" alt="" class="img-responsive">--}}
                        {{--<h3>Bureaux</h3>--}}
                        {{--<p class="stat-count">16000</p>--}}
                    {{--</div><!-- end box -->--}}
                {{--</div><!-- end col -->--}}
            {{--</div>--}}
        {{--</div><!-- end container -->--}}
    {{--</section><!-- end section -->--}}

    <section class="section">
        <div class="container">
            <div class="section-title text-center clearfix">
                <h4>Meet the Team</h4>
                <p>Donec vitae sapien ut libero venenatis faucibus.</p>
                <hr>
            </div><!-- end title -->

            <div class="row module-wrapper text-center">
                <div class="col-md-3 col-sm-3 team-member">
                    <div class="about-widget">
                        <div class="post-media">
                            <img src="upload/team_01.png" alt="" class="img-responsive">
                        </div>
                        <div class="social-icons">
                            <ul class="list-inline">
                                <li class="facebook"><a data-tooltip="tooltip" data-placement="top" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="google"><a data-tooltip="tooltip" data-placement="top" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="twitter"><a data-tooltip="tooltip" data-placement="top" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="linkedin"><a data-tooltip="tooltip" data-placement="top" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="pinterest"><a data-tooltip="tooltip" data-placement="top" title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="skype"><a data-tooltip="tooltip" data-placement="top" title="Skype" href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div><!-- end social icons -->

                        <div class="about-desc">
                            <h4>John MARTIN</h4>
                            <small>CEO / Founder</small>
                            <p>My name is John. I create handcraft web design and graphic sources for beginners like me.</p>
                        </div>
                    </div>
                </div><!-- end team_member -->

                <div class="col-md-3 col-sm-3 team-member">
                    <div class="about-widget">
                        <div class="post-media">
                            <img src="upload/team_02.png" alt="" class="img-responsive">
                        </div>
                        <div class="social-icons">
                            <ul class="list-inline">
                                <li class="facebook"><a data-tooltip="tooltip" data-placement="top" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="google"><a data-tooltip="tooltip" data-placement="top" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="twitter"><a data-tooltip="tooltip" data-placement="top" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="linkedin"><a data-tooltip="tooltip" data-placement="top" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="pinterest"><a data-tooltip="tooltip" data-placement="top" title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="skype"><a data-tooltip="tooltip" data-placement="top" title="Skype" href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div><!-- end social icons -->

                        <div class="about-desc">
                            <h4>Amanda BOBSON</h4>
                            <small>Senior Designer</small>
                            <p>My name is Amanda. I create handcraft web design and graphic sources for beginners like me.</p>
                        </div>
                    </div>
                </div><!-- end team_member -->

                <div class="col-md-3 col-sm-3 team-member">
                    <div class="about-widget">
                        <div class="post-media">
                            <img src="upload/team_03.png" alt="" class="img-responsive">
                        </div>
                        <div class="social-icons">
                            <ul class="list-inline">
                                <li class="facebook"><a data-tooltip="tooltip" data-placement="top" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="google"><a data-tooltip="tooltip" data-placement="top" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="twitter"><a data-tooltip="tooltip" data-placement="top" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="linkedin"><a data-tooltip="tooltip" data-placement="top" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="pinterest"><a data-tooltip="tooltip" data-placement="top" title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="skype"><a data-tooltip="tooltip" data-placement="top" title="Skype" href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div><!-- end social icons -->

                        <div class="about-desc">
                            <h4>Adam DOE</h4>
                            <small>Junior Designer</small>
                            <p>My name is Adam. I create handcraft web design and graphic sources for beginners like me.</p>
                        </div>
                    </div>
                </div><!-- end team_member -->

                <div class="col-md-3 col-sm-3 team-member">
                    <div class="about-widget">
                        <div class="post-media">
                            <img src="upload/team_04.png" alt="" class="img-responsive">
                        </div>
                        <div class="social-icons">
                            <ul class="list-inline">
                                <li class="facebook"><a data-tooltip="tooltip" data-placement="top" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="google"><a data-tooltip="tooltip" data-placement="top" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="twitter"><a data-tooltip="tooltip" data-placement="top" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="linkedin"><a data-tooltip="tooltip" data-placement="top" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="pinterest"><a data-tooltip="tooltip" data-placement="top" title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="skype"><a data-tooltip="tooltip" data-placement="top" title="Skype" href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div><!-- end social icons -->

                        <div class="about-desc">
                            <h4>John BRITTO</h4>
                            <small>Junior Designer</small>
                            <p>My name is John. I create handcraft web design and graphic sources for beginners like me.</p>
                        </div>
                    </div>
                </div><!-- end team_member -->
            </div><!-- row -->

        </div><!-- end container -->
    </section><!-- end section -->


    @include('vendor.adminlte.modal.modalUpdate')
@endsection



@section('script')
    @parent
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/croppie.min.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="{{asset('js/admin/site.js')}}"></script>

    <script>

    </script>

@endsection