@extends('layouts.app')

@section('content')
    <body>

    <!-- PRELOADER -->
    <div id="loader">
        <div class="loader-container">
            <img src="images/load.gif" alt="" class="loader-site spinner">
        </div>
    </div>
    <!-- END PRELOADER -->

    <div id="wrapper">
        <header class="header">
            <div class="container-full">
                <nav class="navbar navbar-inverse yamm">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
                        </div>

                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown hasmenu active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home </a>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li class="dropdown yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content container">
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Project Pages</h4>
                                                                <hr>
                                                            </div><!-- end widget-title -->
                                                            <ul class="dropdown-mega">
                                                                <li><a href="shop-sidebar.html">Project Masonry Style</a></li>
                                                                <li><a href="shop-sidebar.html">Project Grid 3 Col</a></li>
                                                                <li><a href="shop-sidebar.html">Project Grid 4 Col</a></li>
                                                                <li><a href="shop-sidebar.html">Project Grid 5 Col</a></li>
                                                                <li><a href="shop-sidebar.html">Project Desc 3 Col</a></li>
                                                                <li><a href="shop-sidebar.html">Project Desc 4 Col</a></li>
                                                                <li><a href="shop-sidebar.html">Project Single</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Custom Pages</h4>
                                                                <hr>
                                                            </div><!-- end widget-title -->
                                                            <ul class="dropdown-mega">
                                                                <li><a href="shop-sidebar.html">Page Sidebar</a></li>
                                                                <li><a href="shop-sidebar.html">Page Fullwidth</a></li>
                                                                <li><a href="shop-sidebar.html">404 Not Found</a></li>
                                                                <li><a href="shop-sidebar.html">Blog Fullwidth</a></li>
                                                                <li><a href="shop-sidebar.html">Blog Standard</a></li>
                                                                <li><a href="shop-sidebar.html">Blog Single</a></li>
                                                                <li><a href="shop-sidebar.html">Single Fullwidth</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Categories</h4>
                                                                <hr>
                                                            </div><!-- end widget-title -->
                                                            <ul class="dropdown-mega">
                                                                <li><a href="shop-sidebar.html">Home Decoration <span>(21)</span></a></li>
                                                                <li><a href="shop-sidebar.html">Home Furniture <span>(12)</span></a></li>
                                                                <li><a href="shop-sidebar.html">Home Supplies<span>(55)</span></a></li>
                                                                <li><a href="shop-sidebar.html">Editor Collections <span>(32)</span></a></li>
                                                                <li><a href="shop-sidebar.html">Find Professionals <span>(22)</span></a></li>
                                                                <li><a href="shop-sidebar.html">Living <span>(124)</span></a></li>
                                                                <li><a href="shop-sidebar.html">Out Door<span>(66)</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>From the Gallery</h4>
                                                                <hr>
                                                            </div><!-- end widget-title -->
                                                            <div class="carousel-widget">
                                                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                                    <div class="carousel-inner" role="listbox">
                                                                        <div class="item active">
                                                                            <img src="upload/widget_01.jpg" alt="" class="img-responsive">
                                                                        </div>
                                                                        <div class="item">
                                                                            <img src="upload/widget_02.jpg" alt="" class="img-responsive">
                                                                        </div>
                                                                    </div>

                                                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </div>
                                                            </div><!-- end blog-image -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end ttmenu-content -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown  hasmenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop.html">Shop Catalog</a></li>
                                        <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                        <li><a href="shop-single.html">Shop Single</a></li>
                                        <li><a href="shop-cart.html">Shopping Cart</a></li>
                                        <li><a href="shop-checkout.html">Shop Checkout</a></li>
                                        <li><a href="shop-compare.html">Shop Compare</a></li>
                                        <li><a href="shop-.html">Shop </a></li>
                                    </ul>

                                </li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right searchandbag">
                                <li class="hidden-sm hidden-xs"><a href="shop-.html" data-tooltip="tooltip" data-placement="bottom" title=""><i class="fa fa-heart-o"></i></a></li>
                                <li class="hidden-sm hidden-xs"><a href="shop-.html" data-tooltip="tooltip" data-placement="bottom" title="FOLLOW"><i class="fa fa-instagram"></i></a></li>
                                <li class="dropdown hasmenu shopcartmenu">
                                    <a href="#" class="dropdown-toggle cart" data-toggle="dropdown" role="button" aria-expanded="false"><span class="countbadge hidden-xs">2</span> <i class="fa fa-shopping-bag"></i></a>
                                    <ul class="dropdown-menu start-right" role="menu">
                                        <li class="shopcart">
                                            <table class="table">
                                                <tbody>
                                                <tr class="row">
                                                    <td class="col-md-3"><img src="upload/widget_01.jpg" alt=""></td>
                                                    <td class="col-md-7">
                                                        <h4><a href="single-shop.html">Unique Edition</a></h4>
                                                        <small> Price : $ 1000</small>
                                                        <small> Quanity : 1</small>
                                                    </td>
                                                    <td class="col-md-2"><a href="#" class="closeme"><i class="fa fa-close"></i></a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="clearfix"></div>
                                            <div class="text-center">
                                                <h3>Cart Subtotal: $1000</h3>
                                                <a href="shop-checkout.html" class="btn btn-primary">Checkout</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown searchdropdown hasmenu hidden-sm">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a>
                                    <ul class="dropdown-menu show-right">
                                        <li>
                                            <div id="custom-search-input">
                                                <div class="input-group col-md-12">
                                                    <input type="text" class="form-control input-lg" placeholder="Search here..." />
                                                    <span class="input-group-btn">
                                                        <button class="button button--aylen btn btn-lg" type="button">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>
            </div><!-- end container -->
        </header><!-- end header -->

        <section class="section paralbackground page-banner hidden-xs" style="background-image:url('upload/page_banner_shop.jpg');" data-img-width="2000" data-img-height="400" data-diff="100">
        </section>
        <!-- end section -->

        <div class="page-title">
            <div class="container clearfix">
                <div class="title-area pull-left">
                    <h2>Shopping <small>Beautiful Home Decoration Materials!</small></h2>
                </div><!-- /.pull-right -->
                <div class="pull-right hidden-xs">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Shop</li>
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
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="shop-item text-center">
                                        <div class="shop-thumbnail">
                                            <img src="upload/shop_01.jpg" alt="" class="img-responsive">
                                        </div><!-- end shop-thumbnail -->
                                        <div class="shop-desc">
                                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                                            <div>
                                                <del class="regular">100 000 AMD</del>
                                                <small class="regular">98 000 AMD</small>

                                            </div>

                                        </div>

                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li><a href="shop-single.html" class='heart'><i class="fa fa-shopping-bag"></i> ADD TO CART</a></li>
                                                <li><a href="shop-.html" class='heart'><i class="fa fa-heart-o"></i> </a></li>
                                            </ul><!-- end list -->
                                        </div><!-- end shop-meta -->
                                    </div><!-- end shop-item -->
                                </div><!-- end col -->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="shop-item text-center">
                                        <div class="shop-thumbnail">
                                            <img src="upload/shop_02.jpg" alt="" class="img-responsive">
                                        </div><!-- end shop-thumbnail -->
                                        <div class="shop-desc">
                                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                                            <div>
                                                <del class="regular">100 000 AMD</del>
                                                <small class="regular">98 000 AMD</small>

                                            </div>

                                        </div>

                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li><a href="shop-single.html" class='heart'><i class="fa fa-shopping-bag"></i> ADD TO CART</a></li>
                                                <li><a href="shop-.html" class='heart'><i class="fa fa-heart-o"></i> </a></li>
                                            </ul><!-- end list -->
                                        </div><!-- end shop-meta -->
                                    </div><!-- end shop-item -->
                                </div><!-- end col -->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="shop-item text-center">
                                        <div class="shop-thumbnail">
                                            <img src="upload/shop_03.jpg" alt="" class="img-responsive">
                                        </div><!-- end shop-thumbnail -->
                                        <div class="shop-desc">
                                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                                            <div>
                                                <del class="regular">100 000 AMD</del>
                                                <small class="regular">98 000 AMD</small>

                                            </div>

                                        </div>

                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li><a href="shop-single.html" class='heart'><i class="fa fa-shopping-bag"></i> ADD TO CART</a></li>
                                                <li><a href="shop-.html" class='heart'><i class="fa fa-heart-o"></i> </a></li>
                                            </ul><!-- end list -->
                                        </div><!-- end shop-meta -->
                                    </div><!-- end shop-item -->
                                </div><!-- end col -->
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="shop-item text-center">
                                        <div class="shop-thumbnail">
                                            <img src="upload/shop_04.jpg" alt="" class="img-responsive">
                                        </div><!-- end shop-thumbnail -->
                                        <div class="shop-desc">
                                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                                            <div>
                                                <del class="regular">100 000 AMD</del>
                                                <small class="regular">98 000 AMD</small>

                                            </div>

                                        </div>

                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li><a href="shop-single.html" class='heart'><i class="fa fa-shopping-bag"></i> ADD TO CART</a></li>
                                                <li><a href="shop-.html" class='heart'><i class="fa fa-heart-o"></i> </a></li>
                                            </ul><!-- end list -->
                                        </div><!-- end shop-meta -->
                                    </div><!-- end shop-item -->
                                </div><!-- end col -->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="shop-item text-center">
                                        <div class="shop-thumbnail">
                                            <img src="upload/shop_05.jpg" alt="" class="img-responsive">
                                        </div><!-- end shop-thumbnail -->
                                        <div class="shop-desc">
                                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                                            <div>
                                                <del class="regular">100 000 AMD</del>
                                                <small class="regular">98 000 AMD</small>

                                            </div>

                                        </div>
                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li><a href="shop-single.html" class='heart'><i class="fa fa-shopping-bag"></i> ADD TO CART</a></li>
                                                <li><a href="shop-.html" class='heart'><i class="fa fa-heart-o"></i> </a></li>
                                            </ul><!-- end list -->
                                        </div><!-- end shop-meta -->
                                    </div><!-- end shop-item -->
                                </div><!-- end col -->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="shop-item text-center">
                                        <div class="shop-thumbnail">
                                            <img src="upload/shop_06.jpg" alt="" class="img-responsive">
                                        </div><!-- end shop-thumbnail -->
                                        <div class="shop-desc">
                                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                                            <div>
                                                <del class="regular">100 000 AMD</del>
                                                <small class="regular">98 000 AMD</small>

                                            </div>

                                        </div>

                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li><a href="shop-single.html" class='heart'><i class="fa fa-shopping-bag"></i> ADD TO CART</a></li>
                                                <li><a href="shop-.html" class='heart'><i class="fa fa-heart-o"></i> </a></li>
                                            </ul><!-- end list -->
                                        </div><!-- end shop-meta -->
                                    </div><!-- end shop-item -->
                                </div><!-- end col -->
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="shop-item text-center">
                                        <div class="shop-thumbnail">
                                            <img src="upload/shop_07.jpg" alt="" class="img-responsive">
                                        </div><!-- end shop-thumbnail -->
                                        <div class="shop-desc">
                                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                                            <div>
                                                <del class="regular">100 000 AMD</del>
                                                <small class="regular">98 000 AMD</small>

                                            </div>

                                        </div>

                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li><a href="shop-single.html" class='heart'><i class="fa fa-shopping-bag"></i> ADD TO CART</a></li>
                                                <li><a href="shop-.html" class='heart'><i class="fa fa-heart-o"></i> </a></li>
                                            </ul><!-- end list -->
                                        </div><!-- end shop-meta -->
                                    </div><!-- end shop-item -->
                                </div><!-- end col -->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="shop-item text-center">
                                        <div class="shop-thumbnail">
                                            <img src="upload/shop_08.jpg" alt="" class="img-responsive">
                                        </div><!-- end shop-thumbnail -->
                                        <div class="shop-desc">
                                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                                            <div>
                                                <del class="regular">100 000 AMD</del>
                                                <small class="regular">98 000 AMD</small>

                                            </div>

                                        </div>

                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li><a href="shop-single.html" class='heart'><i class="fa fa-shopping-bag"></i> ADD TO CART</a></li>
                                                <li><a href="shop-.html" class='heart'><i class="fa fa-heart-o"></i> </a></li>
                                            </ul><!-- end list -->
                                        </div><!-- end shop-meta -->
                                    </div><!-- end shop-item -->
                                </div><!-- end col -->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="shop-item text-center">
                                        <div class="shop-thumbnail">
                                            <img src="upload/shop_09.jpg" alt="" class="img-responsive">
                                        </div><!-- end shop-thumbnail -->
                                        <div class="shop-desc">
                                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                                            <div>
                                                <del class="regular">100 000 AMD</del>
                                                <small class="regular">98 000 AMD</small>

                                            </div>

                                        </div>

                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li><a href="shop-single.html" class='heart'><i class="fa fa-shopping-bag"></i> ADD TO CART</a></li>
                                                <li><a href="shop-.html" class='heart'><i class="fa fa-heart-o"></i> </a></li>
                                            </ul><!-- end list -->
                                        </div><!-- end shop-meta -->
                                    </div><!-- end shop-item -->
                                </div><!-- end col -->
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="shop-item text-center">
                                        <div class="shop-thumbnail">
                                            <img src="upload/shop_10.jpg" alt="" class="img-responsive">
                                        </div><!-- end shop-thumbnail -->
                                        <div class="shop-desc">
                                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                                            <div>
                                                <del class="regular">100 000 AMD</del>
                                                <small class="regular">98 000 AMD</small>

                                            </div>

                                        </div>

                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li><a href="shop-single.html" class='heart'><i class="fa fa-shopping-bag"></i> ADD TO CART</a></li>
                                                <li><a href="shop-.html" class='heart'><i class="fa fa-heart-o"></i> </a></li>
                                            </ul><!-- end list -->
                                        </div><!-- end shop-meta -->
                                    </div><!-- end shop-item -->
                                </div><!-- end col -->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="shop-item text-center">
                                        <div class="shop-thumbnail">
                                            <img src="upload/shop_11.jpg" alt="" class="img-responsive">
                                        </div><!-- end shop-thumbnail -->
                                        <div class="shop-desc">
                                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                                            <div>
                                                <del class="regular">100 000 AMD</del>
                                                <small class="regular">98 000 AMD</small>

                                            </div>

                                        </div>

                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li><a href="shop-single.html" class='heart'><i class="fa fa-shopping-bag"></i> ADD TO CART</a></li>
                                                <li><a href="shop-.html" class='heart'><i class="fa fa-heart-o"></i> </a></li>
                                            </ul><!-- end list -->
                                        </div><!-- end shop-meta -->
                                    </div><!-- end shop-item -->
                                </div><!-- end col -->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="shop-item text-center">
                                        <div class="shop-thumbnail">
                                            <img src="upload/shop_12.jpg" alt="" class="img-responsive">
                                        </div><!-- end shop-thumbnail -->
                                        <div class="shop-desc">
                                            <h3><a href="shop-single.html" title="">Oldschool Armchair</a></h3>
                                            <div>
                                                <del class="regular">100 000 AMD</del>
                                                <small class="regular">98 000 AMD</small>

                                            </div>

                                        </div>

                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li><a href="shop-single.html" class='heart'><i class="fa fa-shopping-bag"></i> ADD TO CART</a></li>
                                                <li><a href="shop-.html" class='heart'><i class="fa fa-heart-o"></i> </a></li>
                                            </ul><!-- end list -->
                                        </div><!-- end shop-meta -->
                                    </div><!-- end shop-item -->
                                </div><!-- end col -->
                            </div>

                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-md-12">
                                <nav class="text-center">
                                    <ul class="pagination">
                                        <li><a class="active" href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">...</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div><!-- end content -->

                    <div id="sidebar" class="col-md-3 col-sm-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h4>Product categories</h4>
                                <hr>
                            </div>
                            <div class="menu-widget">
                                <ul class="check">
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Product</a></li>
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
                                        <h4>OLDSCHOOL ARMCHAIR</h4>
                                        <del>100 000 AMD</del>
                                        <small>80 000 AMD</small>
                                        <!--<p>Welcome to my portfolio, my name is John. I create handcraft web design and graphic sources for beginners like me.</p>-->
                                        <!--<img src="upload/signature.png" alt="">-->
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
                                    <li>
                                        <div>
                                            <a href="#" class="link_img"> <img src="upload/shop_09.jpg" alt=""></a>
                                            <a href="#" class="link_img link_text ">
                                                <div class="related_name" >
                                                <span>
                                                    BERLINGO ARMCHAIR
                                                </span>
                                                </div>
                                                <div class="related_price" >
                                                    <div><small><del>200 000 AMD</del></small></div>
                                                    <small>170 000 AMD </small>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li>
                                                    <a href="shop-single.html" class='heart'><i class="fa fa-shopping-bag" aria-hidden="true"> </i>
                                                        add to cart
                                                    </a>
                                                </li>
                                                <li><a href="shop-.html" class='heart' class="wish"><i class="fa fa-heart-o"></i> </a></li>

                                            </ul><!-- end list -->
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="#" class="link_img"> <img src="upload/shop_05.jpg" alt=""></a>
                                            <a href="#" class="link_img link_text ">
                                                <div class="related_name" >
                                                <span>
                                                    BERLINGO ARMCHAIR
                                                </span>
                                                </div>
                                                <div class="related_price" >
                                                    <div><small><del>200 000 AMD</del></small></div>
                                                    <small>170 000 AMD </small>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li>
                                                    <a href="shop-single.html" class='heart'><i class="fa fa-shopping-bag" aria-hidden="true"> </i>
                                                        add to cart
                                                    </a>
                                                </li>
                                                <li><a href="shop-.html" class='heart' class="wish"><i class="fa fa-heart-o"></i> </a></li>

                                            </ul><!-- end list -->
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="#" class="link_img"> <img src="upload/shop_10.jpg" alt=""></a>
                                            <a href="#" class="link_img link_text ">
                                                <div class="related_name" >
                                                <span>
                                                    BERLINGO ARMCHAIR
                                                </span>
                                                </div>
                                                <div class="related_price" >
                                                    <div><small><del>200 000 AMD</del></small></div>
                                                    <small>170 000 AMD </small>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li>
                                                    <a href="shop-single.html" class='heart'><i class="fa fa-shopping-bag" aria-hidden="true"> </i>
                                                        add to cart
                                                    </a>
                                                </li>
                                                <li><a href="shop-.html" class='heart' class="wish"><i class="fa fa-heart-o"></i> </a></li>

                                            </ul><!-- end list -->
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="#" class="link_img"> <img src="upload/shop_12.jpg" alt=""></a>
                                            <a href="#" class="link_img link_text ">
                                                <div class="related_name" >
                                                <span>
                                                    BERLINGO ARMCHAIR
                                                </span>
                                                </div>
                                                <div class="related_price" >
                                                    <div><small><del>200 000 AMD</del></small></div>
                                                    <small>170 000 AMD </small>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="shop-meta clearfix">
                                            <ul class="">
                                                <li>
                                                    <a href="shop-single.html" class='heart'><i class="fa fa-shopping-bag" aria-hidden="true"> </i>
                                                        add to cart
                                                    </a>
                                                </li>
                                                <li><a href="shop-.html" class='heart' class="wish"><i class="fa fa-heart-o"></i> </a></li>

                                            </ul><!-- end list -->
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- end menu-widget -->
                        </div>
                        <!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <footer class="section footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h4>Business Links</h4>
                                <hr>
                            </div>

                            <div class="link-widget">
                                <ul class="check">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Get In Touch</a></li>
                                    <li><a href="#">Refund & Exchange</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div><!-- end link -->
                        </div><!-- end widget -->

                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h4>Copyrights</h4>
                                <hr>
                            </div>

                            <div class="link-widget">
                                <ul class="check">
                                    <li><a href="#">Terms of Usage</a></li>
                                    <li><a href="#">Trademarks</a></li>
                                    <li><a href="#">Make a Deposite</a></li>
                                </ul>
                            </div><!-- end link -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-6 col-sm-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h4>All Categories</h4>
                                <hr>
                            </div>

                            <div class="link-widget">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <ul class="check">
                                            <li><a href="#">Hand tools</a></li>
                                            <li><a href="#">Construction market</a></li>
                                            <li><a href="#">Chandelier</a></li>
                                            <li><a href="#">Garden Furniture</a></li>
                                            <li><a href="#">Coffee table</a></li>
                                            <li><a href="#">TV unit</a></li>
                                            <li><a href="#">Cloakroom</a></li>
                                            <li><a href="#">Single Seat</a></li>
                                            <li><a href="#">Office Chairs</a></li>
                                            <li><a href="#">Coffee Table</a></li>
                                            <li><a href="#">Bookshelf</a></li>
                                        </ul>
                                    </div><!-- end col -->

                                    <div class="col-md-4 col-sm-12">
                                        <ul class="check">
                                            <li><a href="#">Drill</a></li>
                                            <li><a href="#">Pique Sets</a></li>
                                            <li><a href="#">Sleep set</a></li>
                                            <li><a href="#">Hardware</a></li>
                                            <li><a href="#">Air conditioning</a></li>
                                            <li><a href="#">Jalousie</a></li>
                                            <li><a href="#">Sled</a></li>
                                            <li><a href="#">Anchor Machine</a></li>
                                            <li><a href="#">The Lawn Mower</a></li>
                                            <li><a href="#">Submersible Pump</a></li>
                                            <li><a href="#">Wall paper</a></li>
                                        </ul>
                                    </div><!-- end col -->

                                    <div class="col-md-4 col-sm-12">
                                        <ul class="check">
                                            <li><a href="#">Coat Stand</a></li>
                                            <li><a href="#">Shoe cabinet</a></li>
                                            <li><a href="#">Bathroom Cabinet</a></li>
                                            <li><a href="#">Study desk</a></li>
                                            <li><a href="#">Home textiles</a></li>
                                            <li><a href="#">Wardrobe</a></li>
                                            <li><a href="#">Young room</a></li>
                                            <li><a href="#">Canvas</a></li>
                                            <li><a href="#">Bed</a></li>
                                        </ul>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end link -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h4>Email Newsletter</h4>
                                <hr>
                            </div>

                            <div class="newsletter-widget">
                                <p>Subscribe our newsletter for discount and coupon codes.</p>
                                <form>
                                    <input type="text" class="form-control input-lg" placeholder="Your name" />
                                    <input type="email" class="form-control input-lg" placeholder="Email" />
                                    <button class="button button--aylen btn">Subscribe Now</button>
                                </form>
                            </div><!-- end newsletter -->

                        </div><!-- end widget -->

                        <div class="widget clearfix">
                            <div class="row stat-wrapper">
                                <div class="stats col-md-6">
                                    <h5>Products</h5>
                                    <p>122.500</p>
                                </div><!-- end stats -->
                                <div class="stats col-md-6">
                                    <h5>Customers</h5>
                                    <p>78.200</p>
                                </div><!-- end stats -->
                            </div><!-- end row -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                </div><!-- end row -->
            </div><!-- end container -->
        </footer>

        <div class="topfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-4 col-xs-12 text-center payments">
                        <a href="#"><i class="fa fa-paypal"></i></a>
                        <a href="#"><i class="fa fa-credit-card"></i></a>
                        <a href="#"><i class="fa fa-cc-amex"></i></a>
                        <a href="#"><i class="fa fa-cc-mastercard"></i></a>
                        <a href="#"><i class="fa fa-cc-visa"></i></a>
                        <a href="#"><i class="fa fa-cc-diners-club"></i></a>
                        <a href="#"><i class="fa fa-cc-discover"></i></a>
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                        <ul class="list-inline">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Terms of Usage</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a class="topbutton" href="#">Back <i class="fa fa-angle-up"></i></a></li>
                        </ul>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

    </div><!-- end wrapper -->

    <!-- Main Scripts-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>

    </body>
@endsection
