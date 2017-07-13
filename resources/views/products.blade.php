@extends('layouts.app')

@section('content')


    <section class="section paralbackground page-banner hidden-xs"
             style="background-image:url({{asset('images/subCategory/'.$subCategory->general_image)}});"
             data-img-width="2000" data-img-height="400"
             data-diff="100">
    </section>
    <!-- end section -->

    <div class="page-title">
        <div class="container clearfix">
            <div class="title-area pull-left">
                <h2>Shopping
                    <small>Beautiful Home Decoration Materials!</small>
                </h2>
            </div><!-- /.pull-right -->
            <div class="pull-right hidden-xs">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">@lang('header.home')</a></li>
                        <li class="active">{{$subCategory->translate(session('locale'))->name}}</li>
                    </ol>
                </div><!-- end bread -->
            </div><!-- /.pull-right -->
        </div>
    </div><!-- end page-title -->

    <section class="section lb">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-9 col-sm-12 single-blog">
                    <div class=" shop-list">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="shop-item text-center">
                                        <div class="shop-thumbnail">

                                            <img class="img-responsive"
                                                 src="{{asset('images/products/'.$product
                                                         ->images
                                                         ->sortBy('id')
                                                         ->first()['image_name'])}}"/>
                                        </div>
                                        <div class="shop-desc">
                                            <h3>
                                                <a href="#0">
                                                    {{$product->translate(session('locale'))->name}}
                                                </a>
                                            </h3>
                                            <div>
                                                @include('includes.pricing',['prod' => $product])
                                            </div>

                                        </div>

                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li>
                                                    <a href="shop-single.html" class='heart'>
                                                        <i class="fa fa-shopping-bag"></i>
                                                        @lang('product.add_cart')
                                                    </a>
                                                </li>
                                            </ul><!-- end list -->
                                        </div><!-- end shop-meta -->
                                    </div><!-- end shop-item -->
                                </div>
                            @endforeach
                        </div>


                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-md-12">
                            <nav class="text-center">
                                {{$products->links()}}
                            </nav>
                        </div>
                    </div>

                </div><!-- end content -->

                <div id="sidebar" class="col-md-3 col-sm-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h4>
                                {{$category->translate(session('locale'))->name}}
                            </h4>
                            <hr>
                        </div>
                        <div class="menu-widget">
                            <ul class="check">
                                @foreach($category->subCategories as $subs)

                                    <li>
                                        <a href="{{route('getCategory', [
                                            'cat' => $subs->link,
                                            ])}}">
                                            {{$subs->translate(session('locale'))->name}}
                                        </a>
                                    </li>

                                @endforeach


                            </ul>
                        </div>
                        <!-- end menu-widget -->
                    </div>
                    <!-- end widget -->

                    <div class="widget clearfix">
                        <div class="about-widget">
                            <a href="shop-single.html" class='heart'>
                                <div class="post-media">
                                    <img src="upload/shop_01.jpg" alt="" class="img-responsive">
                                </div>


                                <div class="about-desc">
                                    <h4>
                                        {{--{{$product->translate(session('locale'))->name}}--}}
                                    </h4>
                                    <del>100 000 AMD</del>
                                    <small>80 000 AMD</small>
                                </div>
                            </a>

                        </div>
                        <!-- end about-widget -->
                    </div>
                    <!-- end widget -->


                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h4>Related products</h4>
                            <hr>
                        </div>
                        <div class="menu-widget menu-widget-new">
                            <ul class="related">

                                <!-- Releted products-->
                                @foreach($releated_products as $product)
                                    <li>
                                        <div>
                                            <a href="#" class="link_img">
                                                <img src="{{asset(
                                                         "images/products/".$product->images->sortBy('id')->first()['image_name'])}}"
                                                     alt="">
                                            </a>
                                            <a href="#" class="link_img link_text ">
                                                {{--@if($product)--}}
                                                <div class="related_name">
                                                        <span>
                                                            {{$product->translate(session('locale'))->name}}
                                                        </span>
                                                </div>
                                                <div class="related_price">
                                                    @include('includes.pricing',['prod' => $product])
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- end menu-widget -->
                    </div>
                    <!-- end widget -->
                </div><!-- end sidebar -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

@endsection
