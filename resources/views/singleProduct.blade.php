@extends('layouts.app')

@section('content')

    <div class="page-title lb">
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
                        <li><a href="{{route('getCategory',['cat' => $product->parent->link])}}">
                                {{$product->parent->translate(session('locale'))->name}}
                            </a>
                        </li>
                        <li class="active">
                            {{$product->translate(session('locale'))->name}}
                        </li>
                    </ol>
                </div><!-- end bread -->
            </div><!-- /.pull-right -->
        </div>
    </div><!-- end page-title -->

    <section class="section single-white-shop">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-9 col-sm-12 single-blog">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="product-images">
                                <a data-rel="prettyPhoto" href="{{asset('images/products/'.$product
                                ->images->sortBy('id')
                                ->first()['image_name'])}}" title="">
                                    <img class="img-responsive" src="{{asset('images/products/'.$product
                                ->images->sortBy('id')
                                ->first()['image_name'])}}" alt=""/>
                                </a>
                                <ul class="thumbnail">
                                    @foreach($product->images as $image)
                                        <li>
                                            <a data-rel="prettyPhoto[gallery]"
                                               href="{{asset('images/products/'.$image->image_name)}}" title="">
                                                <img class="img-responsive"
                                                     src="{{asset('images/products/'.$image->image_name)}}" alt=""/>
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div><!-- end col -->
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="shop-desc bgw">
                                <h3>Custom Single Shop Item </h3>
                                <small>$441.00</small>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet
                                    orem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet
                                    nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet orem iam nonummy
                                    nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet..</p>

                                <a href="#" class="button button--aylen btn">Add to Cart</a>


                                <div class="shopmeta">
                                    <span><strong>Category:</strong> <a href="#">Furniture Supplies Foods</a></span>
                                    <span><strong>Tags:</strong> <a href="#">Furniture</a>, <a href="#">Art</a></span>
                                </div><!-- end shopmeta -->

                            </div><!-- end desc -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <hr class="invis">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab-style-1">
                                <div class="tabbed-widget">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab"
                                                              href="#home">@lang('product.description')</a></li>
                                        <li><a data-toggle="tab" href="#menu1">@lang('product.reviews')</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                            {!! $product->translate(session('locale'))->description !!}
                                        </div>
                                        <div id="menu1" class="tab-pane fade">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel">
                                                        <div class="panel-body comments">
                                                            <ul class="media-list">
                                                                <li class="media">
                                                                    <div class="comment">
                                                                        <a href="#" class="pull-left">
                                                                            <img src="upload/avatar_01.jpg" alt=""
                                                                                 class="img-circle">
                                                                        </a>
                                                                        <div class="media-body">
                                                                            <strong class="text-success">Jane
                                                                                Doe</strong>
                                                                            <span class="text-muted">
                                                                                        <small class="text-muted">6 days ago</small></span>
                                                                            <p>
                                                                                Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Lorem ipsum dolor sit
                                                                                amet, <a href="#">#some link </a>.
                                                                            </p>
                                                                            <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <ul class="media-list">
                                                                        <li class="media">
                                                                            <div class="comment">
                                                                                <a href="#" class="pull-left">
                                                                                    <img src="upload/avatar_02.png"
                                                                                         alt="" class="img-circle">
                                                                                </a>
                                                                                <div class="media-body">
                                                                                    <strong class="text-success">MrAwesome</strong>
                                                                                    <span class="text-muted">
                                                                                                <small class="text-muted">2 days ago</small></span>
                                                                                    <p>
                                                                                        Lorem ipsum dolor sit amet,
                                                                                        consectetur adipiscing elit.
                                                                                        Lorem ipsum dolor sit amet.
                                                                                    </p>
                                                                                    <a href="#"
                                                                                       class="btn btn-primary btn-sm">Reply</a>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="media">
                                                                            <div class="comment">
                                                                                <a href="#" class="pull-left">
                                                                                    <img src="upload/avatar_03.png"
                                                                                         alt="" class="img-circle">
                                                                                </a>
                                                                                <div class="media-body">
                                                                                    <strong class="text-success">Miss
                                                                                        Lucia</strong>
                                                                                    <span class="text-muted">
                                                                                                <small class="text-muted">15 minutes ago</small></span>
                                                                                    <p>
                                                                                        Lorem ipsum dolor sit amet,
                                                                                        consectetur adipiscing elit.
                                                                                        Lorem ipsum dolor sit amet.
                                                                                    </p>
                                                                                    <a href="#"
                                                                                       class="btn btn-primary btn-sm">Reply</a>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="media">
                                                                    <div class="comment">
                                                                        <a href="#" class="pull-left">
                                                                            <img src="upload/avatar_04.png" alt=""
                                                                                 class="img-circle">
                                                                        </a>
                                                                        <div class="media-body">
                                                                            <strong class="text-success">Jana
                                                                                Cova</strong>
                                                                            <span class="text-muted">
                                                                                        <small class="text-muted">12 days ago</small></span>
                                                                            <p>
                                                                                Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Lorem ipsum dolor sit
                                                                                amet.
                                                                            </p>
                                                                            <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="media">
                                                                    <div class="comment">
                                                                        <a href="#" class="pull-left">
                                                                            <img src="upload/avatar_04.png" alt=""
                                                                                 class="img-circle">
                                                                        </a>
                                                                        <div class="media-body">
                                                                            <strong class="text-success">Johnatan
                                                                                Smarty</strong>
                                                                            <span class="text-muted">
                                                                                        <small class="text-muted">1 month ago</small></span>
                                                                            <p>
                                                                                Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Lorem ipsum dolor sit
                                                                                amet. Lorem ipsum dolor sit amet.
                                                                            </p>
                                                                            <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div><!-- end postpager -->
                                                <div class="contact_form blog-desc">
                                                @if(!Auth::guest())

                                                        <div class="widget-title">
                                                            <h4>@lang('product.feedback')</h4>
                                                            <hr>
                                                        </div>

                                                        <div class="contact_form">
                                                            <form class="row">
                                                                {{csrf_field()}}
                                                                <div class="col-md-12 col-sm-12">
                                                                    <label>
                                                                        @lang('product.comment')
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <textarea class="form-control"
                                                                              placeholder=""></textarea>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12">
                                                                    <input type="submit" value="Send Comment"
                                                                           class="btn btn-primary"/>
                                                                </div>
                                                            </form>
                                                        </div><!-- end commentform -->

                                                @else
                                                        <div class="widget-title">
                                                            <h4>@lang('product.register_reviews')</h4>
                                                            <hr>
                                                        </div>
                                                @endif
                                                </div><!-- end postpager -->
                                            </div><!-- end content -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end tabbed-widget -->
                            </div>
                            <!-- end service-style-1 -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <div class="row related_product_of_single">
                        <div class="section-title text-center clearfix">
                            <h4>@lang('product.related')</h4>
                            <p>We showcase all our premium quality home decoration materials and furniture's!</p>
                            <hr>
                        </div><!-- end title -->

                        <div class="row">
                            @if(count($subCat->products) >3)
                                @foreach($subCat->products->where('id', '!=', $product->id)->random(3) as $product)
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="shop-item text-center">
                                            <div class="shop-thumbnail">
                                                <a href="{{route('getProduct',[
                                                'cat' => $subCat->link,
                                                'prod' => $product->link
                                                ])}}" class="link_img">
                                                    <img class="img-responsive"
                                                         src="{{asset('images/products/'.$product
                                                         ->images
                                                         ->sortBy('id')
                                                         ->first()['image_name'])}}"/>
                                                </a>

                                            </div>
                                            <div class="shop-desc">
                                                <h3>
                                                    <a href="{{route('getProduct',[
                                                'cat' => $subCat->link,
                                                'prod' => $product->link
                                                ])}}">
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
                                                        <a href="{{route('getProduct',[
                                                'cat' => $subCat->link,
                                                'prod' => $product->link
                                                ])}}" class='heart'>
                                                            <i class="fa fa-shopping-bag"></i>
                                                            @lang('product.add_cart')
                                                        </a>
                                                    </li>
                                                </ul><!-- end list -->
                                            </div><!-- end shop-meta -->
                                        </div><!-- end shop-item -->
                                    </div>
                                @endforeach
                            @else
                                @foreach($subCat->products as $product)
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="shop-item text-center">
                                            <div class="shop-thumbnail">
                                                <a href="{{route('getProduct',[
                                                'cat' => $subCat->link,
                                                'prod' => $product->link
                                                ])}}" class="link_img">
                                                    <img class="img-responsive"
                                                         src="{{asset('images/products/'.$product
                                                         ->images
                                                         ->sortBy('id')
                                                         ->first()['image_name'])}}"/>
                                                </a>

                                            </div>
                                            <div class="shop-desc">
                                                <h3>
                                                    <a href="{{route('getProduct',[
                                                'cat' => $subCat->link,
                                                'prod' => $product->link
                                                ])}}">
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
                                                        <a href="{{route('getProduct',[
                                                'cat' => $subCat->link,
                                                'prod' => $product->link
                                                ])}}" class='heart'>
                                                            <i class="fa fa-shopping-bag"></i>
                                                            @lang('product.add_cart')
                                                        </a>
                                                    </li>
                                                </ul><!-- end list -->
                                            </div><!-- end shop-meta -->
                                        </div><!-- end shop-item -->
                                    </div>
                                @endforeach
                            @endif


                        </div><!-- end row -->
                    </div><!-- end row -->
                </div><!-- end content -->

                <div id="sidebar" class="col-md-3 col-sm-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h4>
                                {{$subCat->category->translate(session('locale'))->name}}
                            </h4>
                            <hr>
                        </div>
                        <div class="menu-widget">
                            <ul class="check">
                                @foreach($subCat->category->subCategories as $subs)

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
                        <div class="widget-title">
                            <h4>@lang('product.other_prod')</h4>
                            <hr>
                        </div>
                        <div class="menu-widget menu-widget-new">
                            <ul class="related">

                                <!-- Releted products-->
                                @foreach($other_products as $product)
                                    <li>
                                        <div>
                                            <a href="{{route('getProduct',[
                                                'cat' => $product->parent->link,
                                                'prod' => $product->link
                                                ])}}" class="link_img">
                                                <img src="{{asset(
                                                         "images/products/".$product->images->sortBy('id')->first()['image_name'])}}"
                                                     alt="">
                                            </a>
                                            <a href="{{route('getProduct',[
                                                'cat' => $product->parent->link,
                                                'prod' => $product->link
                                                ])}}" class="link_img link_text ">
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
