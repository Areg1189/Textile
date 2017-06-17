<header class="header">
    <div class="container-full">
        <nav class="navbar navbar-inverse yamm">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt=""></a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown hasmenu {{!Request::segment(1) ?'active':''}}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Home </a>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li class="dropdown yamm-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Shop <span
                                        class="fa fa-angle-down"></span></a>
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
                                                        <li><a href="shop-sidebar.html">Home Decoration
                                                                <span>(21)</span></a></li>
                                                        <li><a href="shop-sidebar.html">Home Furniture <span>(12)</span></a>
                                                        </li>
                                                        <li><a href="shop-sidebar.html">Home
                                                                Supplies<span>(55)</span></a></li>
                                                        <li><a href="shop-sidebar.html">Editor Collections
                                                                <span>(32)</span></a></li>
                                                        <li><a href="shop-sidebar.html">Find Professionals
                                                                <span>(22)</span></a></li>
                                                        <li><a href="shop-sidebar.html">Living <span>(124)</span></a>
                                                        </li>
                                                        <li><a href="shop-sidebar.html">Out Door<span>(66)</span></a>
                                                        </li>
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
                                                        <div id="myCarousel" class="carousel slide"
                                                             data-ride="carousel">
                                                            <div class="carousel-inner" role="listbox">
                                                                <div class="item active">
                                                                    <img src="{{asset('upload/widget_01.jpg')}}" alt=""
                                                                         class="img-responsive">
                                                                </div>
                                                                <div class="item">
                                                                    <img src="{{asset('upload/widget_02.jpg')}}" alt=""
                                                                         class="img-responsive">
                                                                </div>
                                                            </div>

                                                            <a class="left carousel-control" href="#myCarousel"
                                                               role="button" data-slide="prev">
                                                                <span class="fa fa-angle-left"
                                                                      aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="right carousel-control" href="#myCarousel"
                                                               role="button" data-slide="next">
                                                                <span class="fa fa-angle-right"
                                                                      aria-hidden="true"></span>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Features <span
                                        class="fa fa-angle-down"></span></a>
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
                        <li class="hidden-sm hidden-xs">
                            <a href="shop-.html" data-tooltip="tooltip" data-placement="bottom" title="">
                                <i class="fa fa-heart-o"></i>
                            </a>
                        </li>
                        <li class="hidden-sm hidden-xs"><a href="shop-.html" data-tooltip="tooltip"
                                                           data-placement="bottom" title="FOLLOW"><i
                                        class="fa fa-instagram"></i></a></li>
                        <li class="dropdown hasmenu shopcartmenu">
                            <a href="#" class="dropdown-toggle cart" data-toggle="dropdown" role="button"
                               aria-expanded="false"><span class="countbadge hidden-xs">2</span> <i
                                        class="fa fa-shopping-bag"></i></a>
                            <ul class="dropdown-menu start-right" role="menu">
                                <li class="shopcart">
                                    <table class="table">
                                        <tbody>
                                        <tr class="row">
                                            <td class="col-md-3"><img src="{{asset('upload/widget_01.jpg')}}" alt="">
                                            </td>
                                            <td class="col-md-7">
                                                <h4><a href="single-shop.html">Unique Edition</a></h4>
                                                <small> Price : $ 1000</small>
                                                <small> Quanity : 1</small>
                                            </td>
                                            <td class="col-md-2"><a href="#" class="closeme"><i class="fa fa-close"></i></a>
                                            </td>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a>
                            <ul class="dropdown-menu show-right">
                                <li>
                                    <div id="custom-search-input">
                                        <div class="input-group col-md-12">
                                            <input type="text" class="form-control input-lg"
                                                   placeholder="Search here..."/>
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

                            @if (Auth::guest())
                            <li class="hidden-sm hidden-xs">
                                <a data-tooltip="tooltip" data-placement="bottom" title="@lang('auth.login')" id="modal_trigger"
                                   href="#modal">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </a>
                            </li>
                            @else
                            <li class="dropdown hasmenu shopcartmenu {{request::segment(1) == 'user' ? 'active' : ''}}">
                                <a href="#0" class="dropdown-toggle " data-toggle="dropdown" role="button"
                                   aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu show-right">
                                    <li >
                                        <a href="{{route('user', ['id' => Auth::user()->href])}}">
                                            @lang('user.profile')
                                        </a>
                                        <a href="{{route('userPurchases', ['id' => Auth::user()->href])}}">
                                            @lang('user.purchases')
                                        </a>
                                        <a href="{{route('userSettings', ['id' => Auth::user()->href])}}">
                                            @lang('user.settings')
                                        </a>
                                            <a href="{{ route('logout') }}" data-tooltip="tooltip" data-placement="bottom" title="Logout"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                @lang('user.logout')  <i class="fa fa-sign-out" aria-hidden="true"></i>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
    </div><!-- end container -->
</header>