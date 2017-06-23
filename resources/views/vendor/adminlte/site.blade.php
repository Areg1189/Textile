@extends('layouts.app')

@section('head')
    @parent
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">
@endsection
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Image Upluad</div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-4 text-center">
                        <div id="upload-demo" style="width:350px"></div>
                    </div>
                    <div class="col-md-4" style="padding-top:30px;">
                        <strong>Select Image:</strong>
                        <br/>
                        <input type="file" id="upload">
                        <br/>
                        <button class="btn btn-success upload-result">Upload Image</button>
                    </div>
                    <div class="col-md-4" style="">
                        <div id="upload-demo-i" style="background:#e1e1e1;width:300px;padding:30px;height:300px;margin-top:30px"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">
        $uploadCrop = $('#upload-demo').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200,

            },
            boundary: {
                width: 300,
                height: 300
            }
        });

        $('#upload').on('change', function () {
            var reader = new FileReader();
            reader.onload = function (e) {
                $uploadCrop.croppie('bind', {
                    url: e.target.result
                }).then(function(){
                });

            }
            reader.readAsDataURL(this.files[0]);
        });

        $('.upload-result').on('click', function (ev) {
            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (resp) {

                $.ajax({
                    url: "{{route('updateHomeImage')}}",
                    type: "POST",
                    data: {"image":resp , _token:$('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        html = '<img src="' + resp + '" />';
                        $("#upload-demo-i").html(html);
                    }
                });
            });
        });

    </script>
    <div class="first-slider">

        <div id="rev_slider_56_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
             data-alias="sports-hero54"
             style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <div class="col-sm-offset-1">
                <button class="btn btn-info btn-edit iconUpdate" title="Edite Image end Text"
                        data-status="home_image"
                        data-toggle="modal"
                        data-target="#modalUpdate">
                    <i class="fa fa-edit"></i> Edit
                </button>
            </div>
            <div id="rev_slider_56_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                <ul data-target="home_image"
                    data-prod="{{$homeImage->code}}"
                    data-href_update="{{route('updateHomeImage')}}">

                    <li data-index="rs-214" data-transition="fade" data-slotamount="7" data-easein="default"
                        data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off"
                        data-title="Slide" data-description="">

                        <img src="{{asset('upload/'.$homeImage->image_name)}}" alt="" data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>


                        <div class="tp-caption Sports-Display   tp-resizeme rs-parallaxlevel-0"
                             id="slide-214-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-180','-170','-190','-140']"
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
                             style="z-index: 5; white-space: nowrap;">{{$homeImage->translate(session('locale'))->text_1}}
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
                             style="z-index: 6; white-space: nowrap;">{{$homeImage->translate(session('locale'))->text_2}}
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
                            {{$homeImage->translate(session('locale'))->text_3}}
                        </div>

                    </li>
                </ul>
                <div class="tp-static-layers"></div>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </div><!-- end first slider -->

    <section class="section">
        <div class="container">
            <div class="section-title text-center clearfix">
                <h4>Top Categories</h4>
                <p>Listed below our top categories, campaings, promotions and offers for you!</p>
                <hr>
            </div><!-- end title -->

            <div class="banner-masonry row">
                <div class="banner-item item-w1 item-h1">
                    <a href="#"><img src="{{asset('upload/banner_01.png')}}" alt="" class="img-responsive"></a>
                    <div class="banner-button">
                        <a href="#" class="button button--aylen btn">GARDEN SUPPLIES</a>
                    </div>
                </div><!-- end banner-item -->
                <div class="banner-item item-w1 item-h1">
                    <a href="#"><img src="{{asset('upload/banner_02.png')}}" alt="" class="img-responsive"></a>
                    <div class="banner-button button-left">
                        <a href="#" class="button button--aylen btn">BEDROOM EDITION</a>
                    </div>
                </div><!-- end banner-item -->
                <div class="banner-item item-w1 item-h2">
                    <a href="#"><img src="{{asset('upload/banner_03.png')}}" alt="" class="img-responsive"></a>
                    <div class="banner-button button-left">
                        <a href="#" class="button button--aylen btn">SINGLE SET</a>
                    </div>
                </div><!-- end banner-item -->
                <div class="banner-item item-w1 item-h1">
                    <a href="#"><img src="{{asset('upload/banner_04.png')}}" alt="" class="img-responsive"></a>
                    <div class="banner-button button-left">
                        <a href="#" class="button button--aylen btn">SEATING GROUPS</a>
                    </div>
                </div><!-- end banner-item -->
                <div class="banner-item item-w1 item-h1">
                    <a href="#"><img src="{{asset('upload/banner_05.png')}}" alt="" class="img-responsive"></a>
                    <div class="banner-button button-left">
                        <a href="#" class="button button--aylen btn">HANDMADE STAND</a>
                    </div>
                </div><!-- end banner-item -->
            </div><!-- end banner -->


        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section lb nopadbot">
        <div class="container-fluid">
            <div class="section-title text-center clearfix">
                <h4>Our Products</h4>
                <p>Listed below our awesome products with a stylish portfolio section!</p>
                <hr>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <nav class="portfolio-filter text-center">
                        <ul class="list-inline">
                            <li><a class="button button--aylen btn" href="#" data-filter="*">All</a></li>
                            <li><a class="button button--aylen btn" href="#" data-filter=".cat1">Furniture Sets</a></li>
                            <li><a class="button button--aylen btn" href="#" data-filter=".cat2">Pillows</a></li>
                            <li><a class="button button--aylen btn" href="#" data-filter=".cat3">Combinations</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div id="da-thumbs" class="da-thumbs">
                <div class="pentry item-w1 item-h1 cat3">
                    <a href="single-project.html" title="">
                        <img src="{{asset('upload/project_01.jpg')}}" alt="" class="img-responsive">
                        <div><span>green sofa set</span></div>
                    </a>
                </div>

                <div class="pentry item-w1 item-h1 cat1 cat2">
                    <a href="'single-project.html" title="">
                        <img src="{{asset('upload/project_02.jpg')}}" alt="" class="img-responsive">
                        <div><span>four pillow set</span></div>
                    </a>
                </div>

                <div class="pentry item-w1 item-h1 cat3">
                    <a href="single-project.html" title="">
                        <img src="{{asset('upload/project_03.jpg')}}" alt="" class="img-responsive">
                        <div><span>combination of sofa sets</span></div>
                    </a>
                </div>

                <div class="pentry item-w1 item-h1 cat1 cat2">
                    <a href="single-project.html" title="">
                        <img src="{{asset('upload/project_04.jpg')}}" alt="" class="img-responsive">
                        <div><span>corner seat</span></div>
                    </a>
                </div>

                <div class="pentry item-w1 item-h1 cat1">
                    <a href="single-project.html" title="">
                        <img src="{{asset('upload/project_05.jpg')}}" alt="" class="img-responsive">
                        <div><span>sofa and coffee table lamp</span></div>
                    </a>
                </div>

                <div class="pentry item-w1 item-h1 cat2">
                    <a href="single-project.htm" title="">
                        <img src="{{asset('upload/project_06.jpg')}}" alt="" class="img-responsive">
                        <div><span>desk lamp</span></div>
                    </a>
                </div>

                <div class="pentry item-w1 item-h1 cat3">
                    <a href="single-project.html" title="">
                        <img src="{{asset('upload/project_07.jpg')}}" alt="" class="img-responsive">
                        <div><span>yellow sofa set</span></div>
                    </a>
                </div>

                <div class="pentry item-w1 item-h1 cat3">
                    <a href="single-project.html" title="">
                        <img src="{{asset('upload/project_08.jpg')}}" alt="" class="img-responsive">
                        <div><span>bed and armchair</span></div>
                    </a>
                </div>
            </div><!-- end div -->
        </div><!-- end container-fluid -->
    </section><!-- end section -->

    <section class="section">
        <div class="container">
            <div class="section-title text-center clearfix">
                <h4>Shopping</h4>
                <p>We showcase all our premium quality home decoration materials and furniture's!</p>
                <hr>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="shop-item ">
                        <div class="shop-thumbnail">
                            <img src="{{asset('upload/shop_01.jpg')}}" alt="" class="img-responsive">
                        </div><!-- end shop-thumbnail -->
                        <div class="shop-desc">
                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                            <div>
                                <del class="regular">100 000 AMD</del>
                                <small class="regular">98 000 AMD</small>

                            </div>

                        </div><!-- end shop-desc -->

                        <div class="shop-meta clearfix">
                            <ul class="">
                                <li>
                                    <a href="shop-single.html"><i class="fa fa-shopping-bag" aria-hidden="true"> </i>
                                        add to cart
                                    </a>
                                </li>
                                <li><a href="shop-.html" class="wish"><i class="fa fa-heart-o"></i> </a></li>

                            </ul><!-- end list -->
                        </div><!-- end shop-meta -->
                    </div><!-- end shop-item -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="shop-item ">
                        <div class="shop-thumbnail">
                            <img src="{{asset('upload/shop_02.jpg')}}" alt="" class="img-responsive">
                        </div><!-- end shop-thumbnail -->
                        <div class="shop-desc">
                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                            <div>
                                <del class="regular">100 000 AMD</del>
                                <small class="regular">98 000 AMD</small>

                            </div>

                        </div><!-- end shop-desc -->

                        <div class="shop-meta clearfix">
                            <ul class="">
                                <li><a href="shop-single.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i> ADD
                                        TO CART</a></li>
                                <li><a href="shop-.html"><i class="fa fa-heart-o"></i> </a></li>

                            </ul><!-- end list -->
                        </div><!-- end shop-meta -->
                    </div><!-- end shop-item -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="shop-item ">
                        <div class="shop-thumbnail">
                            <img src="{{asset('upload/shop_03.jpg')}}" alt="" class="img-responsive">
                        </div><!-- end shop-thumbnail -->
                        <div class="shop-desc">
                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                            <div>
                                <del class="regular">100 000 AMD</del>
                                <small class="regular">98 000 AMD</small>

                            </div>

                        </div><!-- end shop-desc -->

                        <div class="shop-meta clearfix">
                            <ul class="">
                                <li><a href="shop-single.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i> ADD
                                        TO CART</a></li>
                                <li><a href="shop-.html"><i class="fa fa-heart-o"></i> </a></li>

                            </ul><!-- end list -->
                        </div><!-- end shop-meta -->
                    </div><!-- end shop-item -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="shop-item ">
                        <div class="shop-thumbnail">
                            <img src="{{asset('upload/shop_04.jpg')}}" alt="" class="img-responsive">
                        </div><!-- end shop-thumbnail -->
                        <div class="shop-desc">
                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                            <div>
                                <del class="regular">100 000 AMD</del>
                                <small class="regular">98 000 AMD</small>

                            </div>

                        </div><!-- end shop-desc -->

                        <div class="shop-meta clearfix">
                            <ul class="">
                                <li><a href="shop-single.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i> ADD
                                        TO CART</a></li>
                                <li><a href="shop-.html"><i class="fa fa-heart-o"></i> </a></li>

                            </ul><!-- end list -->
                        </div><!-- end shop-meta -->
                    </div><!-- end shop-item -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->


    <section class="section">
        <div class="container">
            <div class="section-title text-center clearfix">
                <h4>Newstellers</h4>
                <p>Donec vitae sapien ut libero venenatis faucibus.</p>
                <hr>
            </div><!-- end title -->

            <div class="row module-wrapper text-center">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span class="new_styker">new</span>
                    <div class="shop-item ">


                        <div class="shop-thumbnail">
                            <img src="{{asset('upload/shop_04.jpg')}}" alt="" class="img-responsive">
                        </div><!-- end shop-thumbnail -->
                        <div class="shop-desc">
                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                            <div>
                                <del class="regular">100 000 AMD</del>
                                <small class="regular">98 000 AMD</small>

                            </div>

                        </div><!-- end shop-desc -->

                        <div class="shop-meta clearfix">
                            <ul class="">
                                <li><a href="shop-single.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i> ADD
                                        TO CART</a></li>
                                <li><a href="shop-.html"><i class="fa fa-heart-o"></i> </a></li>

                            </ul><!-- end list -->
                        </div><!-- end shop-meta -->
                    </div><!-- end shop-item -->
                </div><!-- end col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span class="new_styker">new</span>
                    <div class="shop-item ">


                        <div class="shop-thumbnail">
                            <img src="{{asset('upload/shop_04.jpg')}}" alt="" class="img-responsive">
                        </div><!-- end shop-thumbnail -->
                        <div class="shop-desc">
                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                            <div>
                                <del class="regular">100 000 AMD</del>
                                <small class="regular">98 000 AMD</small>

                            </div>

                        </div><!-- end shop-desc -->

                        <div class="shop-meta clearfix">
                            <ul class="">
                                <li><a href="shop-single.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i> ADD
                                        TO CART</a></li>
                                <li><a href="shop-.html"><i class="fa fa-heart-o"></i> </a></li>

                            </ul><!-- end list -->
                        </div><!-- end shop-meta -->
                    </div><!-- end shop-item -->
                </div><!-- end col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span class="new_styker">new</span>
                    <div class="shop-item ">


                        <div class="shop-thumbnail">
                            <img src="{{asset('upload/shop_04.jpg')}}" alt="" class="img-responsive">
                        </div><!-- end shop-thumbnail -->
                        <div class="shop-desc">
                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                            <div>
                                <del class="regular">100 000 AMD</del>
                                <small class="regular">98 000 AMD</small>

                            </div>

                        </div><!-- end shop-desc -->

                        <div class="shop-meta clearfix">
                            <ul class="">
                                <li><a href="shop-single.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i> ADD
                                        TO CART</a></li>
                                <li><a href="shop-.html"><i class="fa fa-heart-o"></i> </a></li>

                            </ul><!-- end list -->
                        </div><!-- end shop-meta -->
                    </div><!-- end shop-item -->
                </div><!-- end col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span class="new_styker">new</span>
                    <div class="shop-item ">

                        <div class="shop-thumbnail">
                            <img src="{{asset('upload/shop_04.jpg')}}" alt="" class="img-responsive">
                        </div><!-- end shop-thumbnail -->
                        <div class="shop-desc">
                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                            <div>
                                <del class="regular">100 000 AMD</del>
                                <small class="regular">98 000 AMD</small>

                            </div>

                        </div><!-- end shop-desc -->

                        <div class="shop-meta clearfix">
                            <ul class="">
                                <li><a href="shop-single.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i> ADD
                                        TO CART</a></li>
                                <li><a href="shop-.html"><i class="fa fa-heart-o"></i> </a></li>

                            </ul><!-- end list -->
                        </div><!-- end shop-meta -->
                    </div><!-- end shop-item -->
                </div><!-- end col -->
            </div><!-- row -->

        </div><!-- end container -->
    </section><!-- end section -->
    <section class="section">
        <div class="container">
            <div class="section-title text-center clearfix">
                <h4>We love our suppliers</h4>
                <p>Special thanks for all our suppliers to build awesome community!</p>
                <hr>
            </div><!-- end title -->

            <div id="owl-client" class="clients">
                <div class="client-logo GrayScale">
                    <a href="#"><img src="{{asset('upload/client_01.png')}}" alt="" class="img-responsive"></a>
                </div><!-- end logo -->

                <div class="client-logo GrayScale">
                    <a href="#"><img src="{{asset('upload/client_02.png')}}" alt="" class="img-responsive"></a>
                </div><!-- end logo -->

                <div class="client-logo GrayScale">
                    <a href="#"><img src="{{asset('upload/client_03.png')}}" alt="" class="img-responsive"></a>
                </div><!-- end logo -->

                <div class="client-logo GrayScale">
                    <a href="#"><img src="{{asset('upload/client_04.png')}}" alt="" class="img-responsive"></a>
                </div><!-- end logo -->

                <div class="client-logo GrayScale">
                    <a href="#"><img src="{{asset('upload/client_05.png')}}" alt="" class="img-responsive"></a>
                </div><!-- end logo -->
            </div><!-- end row -->

        </div><!-- end container -->
    </section><!-- end section -->
    @include('vendor.adminlte.modal.modalUpdate')
@endsection



@section('script')
    @parent
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>


    <script type="text/javascript"
            src="{{asset('js/admin/admin.js')}}"></script>
@endsection