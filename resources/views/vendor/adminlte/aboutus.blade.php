@extends('layouts.app')

@section('head')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.4.1/croppie.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{asset('css/admin/admin.css')}}">
@endsection
@section('content')


    <section class="section paralbackground page-banner hidden-xs"
             style="background-image:url('upload/page_banner_about.jpg');" data-img-width="2000" data-img-height="400"
             data-diff="100">
    </section>
    <!-- end section -->

    <div class="page-title">
        <div class="container clearfix">
            <div class="title-area pull-left">
                <h2>About us
                    <small>Welcome to the HomeStyle shop!</small>
                </h2>
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
        {{--<button class="btn btn-info btn-edit iconUpdate" title="Edite Image end Text"--}}
        {{--data-status="home_image"--}}
        {{--data-toggle="modal"--}}
        {{--data-target="#modalUpdate">--}}
        {{--<i class="fa fa-edit"></i> Edit--}}
        {{--</button>--}}
    </div>

    <section class="section lb">
        <div class="container">
            <!-- START REVOLUTION SLIDER 5.0 auto mode -->
            <div id="rev_slider" class="rev_slider" data-version="5.0">
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="fade">
                        <!-- MAIN IMAGE -->
                        <img src="upload/about_slider_01.jpg" alt="" width="1250" height="600">
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
                             style="z-index: 7;"><img src="upload/sports_sublinebg.png" alt="" width="500" height="45"
                                                      data-ww="['500px','500px','500px','420px']" data-hh="45px"
                                                      data-no-retina>
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
                             style="z-index: 8; white-space: nowrap; font-size: 30px; line-height: 30px;">WELCOME TO
                            HOMESTYLE
                        </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-transition="fade">
                        <!-- MAIN IMAGE -->
                        <img src="upload/about_slider_02.jpg" alt="" width="1250" height="600">
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
                             style="z-index: 7;"><img src="upload/sports_sublinebg.png" alt="" width="500" height="45"
                                                      data-ww="['500px','500px','500px','420px']" data-hh="45px"
                                                      data-no-retina>
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
                             style="z-index: 8; white-space: nowrap; font-size: 30px; line-height: 30px;">WE BUILD
                            AWESOMENESS
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
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will
                            uncover many web sites still in their infancy. Various versions have evolved over the years,
                            sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                                <a class="accordion-toggle" data-toggle="collapse"
                                                   data-parent="#accordion3" href="#collapseFour">
                                                    Why HomeStyle ? <i class="indicator fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                    lorem quam, adipiscing condimentum tristique vel, eleifend sed
                                                    turpis. Pellentesque cursus arcu id magna euismod in elementum purus
                                                    molestie. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                    nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse"
                                                   data-parent="#accordion3" href="#collapseFive">
                                                    What IS HomeStyle ? <i class="indicator fa fa-minus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                    lorem quam, adipiscing condimentum tristique vel, eleifend sed
                                                    turpis. Pellentesque cursus arcu id magna euismod in elementum purus
                                                    molestie. ctetur adipisicing elit, sed do eiusmod tempor incididunt
                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse"
                                                   data-parent="#accordion3" href="#collapseSix">
                                                    What is HomeStyle Features ? <i class="indicator fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseSix" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                    lorem quam, adipiscing condimentum tristique vel, eleifend sed
                                                    turpis. Pellentesque cursus arcu id magna euismod in elementum purus
                                                    molestie. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                    nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- accordion -->
                        </div><!-- end accordion-widget -->
                    </div><!-- end content-widget -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->


    <section class="section">
        <div class="container">
            <div class="section-title text-center clearfix">
                <h4>Meet the Team</h4>
                <p>Donec vitae sapien ut libero venenatis faucibus.</p>
                <hr>
            </div><!-- end title -->

            <div class="row">
                <button class="btn btn-info   pull-right" title="Add a Employee"
                        data-toggle="modal" data-target="#modalAddEmployee">
                    <i class="fa fa-edit"></i> Add
                </button>

            </div>
            <div class="row module-wrapper text-center">

                @php($i = 0)
                @foreach($employees as $employee)

                    <div class="col-md-3 col-sm-3 team-member"
                    data-prod="{{$employee->id}}"
                    data-href_update="{{route('editEmployee', ['id' => $employee->id])}}"
                    data-target="prod_{{$i}}">
                        <div class="row">


                            <button class="btn btn-info pull-right iconUpdate"
                                    title="Edite Employee"
                                    data-toggle="modal"
                                    data-target="#modalUpdate"
                                    data-status="prod_{{$i}}">
                                <i class="fa fa-edit"></i> Edit
                            </button>


                        </div>
                        <div class="about-widget">
                            <div class="post-media">
                                <img src="{{asset('images/employee/'.$employee->image)}}" alt="" class="img-responsive">
                            </div>
                            <div class="social-icons">
                                <ul class="list-inline">

                                    @if($employee->employee_social->facebook != "")
                                        <li class="facebook"><a data-tooltip="tooltip" data-placement="top"
                                                                title="Facebook" target="_blank"
                                                                href="{{$employee->link}}"><i
                                                        class="fa fa-facebook"></i></a></li>
                                    @endif

                                    @if($employee->employee_social->google != "")
                                        <li class="google"><a data-tooltip="tooltip" data-placement="top"
                                                              target="_blank"
                                                              title="Google Plus" href="{{$employee->link}}"><i
                                                        class="fa fa-google-plus"></i></a>
                                        </li>
                                    @endif


                                    @if($employee->employee_social->twitter != "")
                                        <li class="twitter"><a data-tooltip="tooltip" data-placement="top"
                                                               target="_blank"
                                                               title="Twitter"
                                                               href="{{$employee->link}}"><i class="fa fa-twitter"></i></a>
                                        </li>
                                    @endif

                                    @if($employee->employee_social->linkedin != "")
                                        <li class="linkedin"><a data-tooltip="tooltip" data-placement="top"
                                                                target="_blank"
                                                                title="Linkedin"
                                                                href="{{$employee->link}}"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                    @endif

                                    @if($employee->employee_social->pinterest != "")
                                        <li class="pinterest"><a data-tooltip="tooltip" data-placement="top"
                                                                 target="_blank"
                                                                 title="Pinterest" href="{{$employee->link}}"><i
                                                        class="fa fa-pinterest"></i></a>
                                        </li>
                                    @endif

                                    @if($employee->employee_social->skype != "")
                                        <li class="skype"><a data-tooltip="tooltip" data-placement="top" target="_blank"
                                                             title="Skype"
                                                             href="{{$employee->link}}"><i class="fa fa-skype"></i></a>
                                        </li>
                                    @endif

                                    @if($employee->employee_social->vimeo != "")
                                        <li class="vimeo"><a data-tooltip="tooltip" data-placement="top" target="_blank"
                                                             title="vimeo"
                                                             href="{{$employee->link}}"><i class="fa fa-vimeo"></i></a>
                                        </li>
                                    @endif

                                    @if($employee->employee_social->youtube != "")
                                        <li class="youtube"><a data-tooltip="tooltip" data-placement="top"
                                                               target="_blank" title="youtube"
                                                               href="{{$employee->link}}"><i class="fa fa-youtube"></i></a>
                                        </li>
                                    @endif

                                    @if($employee->employee_social->instagram != "")
                                        <li class="instagram"><a data-tooltip="tooltip" data-placement="top"
                                                                 target="_blank" title="instagram"
                                                                 href="{{$employee->link}}"><i
                                                        class="fa fa-instagram"></i></a></li>
                                    @endif

                                </ul>
                            </div><!-- end social icons -->

                            <div class="about-desc">
                                <h4>{{$employee->name}}</h4>
                                <small>{{$employee->position}}</small>
                                <p>{{$employee->text}}</p>
                            </div>
                        </div>
                    </div>
                    @php($i++)
                @endforeach


            </div><!-- row -->

        </div><!-- end container -->
    </section><!-- end section -->


    @include('vendor.adminlte.modal.modalUpdate')
    @include('vendor.adminlte.modal.modalAddEmployee')
@endsection



@section('script')
    @parent
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/croppie.min.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    <script>
        $uploadCrop = $(".upload-demo2").croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200
            },
            boundary: {
                width: 300,
                height: 301
            }
        });

        w = 500;
        h = 500;
    </script>
    <script type="text/javascript" src="{{asset('js/admin/site.js')}}"></script>

    <script>

    </script>

@endsection