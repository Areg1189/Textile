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
                        <li class="{{Request::url() == route('home') ?'active':''}}">
                            <a href="{{route('home')}}"> @lang('header.home') </a>
                        </li>
                        <li><a href="{{route('about')}}">@lang('header.about')</a></li>
                        <li class="dropdown yamm-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false"> @lang('header.shop') <span
                                        class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content container">
                                        <div class="row">
                                            @foreach($categories->sortByDesc('id') as $category)
                                                <div class="col-md-3">
                                                    <div class="widget">
                                                        <div class="widget-title">
                                                            <h4>{{$category->translate(session('locale'))->name}}</h4>
                                                            <hr>
                                                        </div><!-- end widget-title -->

                                                        <ul class="dropdown-mega">
                                                            @foreach($category->subCategories->sortByDesc('id') as $subCategory)
                                                                <li>
                                                                    <a href="{{route('getCategory', [
                                                                    'cat' => $subCategory->link])}}">
                                                                        {{$subCategory->translate(session('locale'))->name}}
                                                                        <span> ({{count($subCategory->products)}}
                                                                            )</span>
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach

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
                        {{--<li><a href="blog.html">Blog</a></li>--}}
                        <li><a href="{{route('contactus')}}">@lang('header.contact')</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right searchandbag">
                        <li class="dropdown hasmenu shopcartmenu">
                            <a href="#" class="dropdown-toggle cart" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                <i class="fa fa-chain-broken"></i>
                            </a>
                            <ul class="dropdown-menu start-right" role="menu">
                                @foreach($social_icons as $icons)
                                    @if($icons->link)
                                        <li class="facebook pad_3 pull-left">
                                            <a target="_blank" href="{{$icons->link}}">
                                                <i class="{{$icons->icon_code}}"></i>
                                            </a>
                                        </li>

                                    @endif
                                @endforeach
                            </ul>
                        </li>

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

                                    <form action="{{route('search')}}" method="post">

                                        <div id="custom-search-input">
                                            <div class="input-group col-md-12">
                                                <input
                                                        id="searchArea"
                                                        type="text"
                                                        name="word"
                                                        class="form-control input-lg"
                                                        placeholder="@lang('header.search')"
                                                        value="{{isset($word) ? $word : ''}}"
                                                        required
                                                />
                                                <span class="input-group-btn">
                                                        {{csrf_field()}}
                                                    <button
                                                            class="button button--aylen btn btn-lg"
                                                            id="searchButton"
                                                            type="submit"
                                                            data-result_page="{{route('search')}}"
                                                    >
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                            </div>
                                        </div>
                                    </form>

                                </li>
                            </ul>
                        </li>

                        @if (Auth::guest())
                            <li class="hidden-sm hidden-xs">
                                <a data-tooltip="tooltip" data-placement="bottom" title="@lang('auth.login')"
                                   id="modal_trigger"
                                   href="#modal">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </a>
                            </li>
                        @else
                            <li class="dropdown hasmenu shopcartmenu {{request::segment(1) == 'user' ? 'active' : ''}}">
                                <a href="{{Auth::user()->rol == 1 ? route('admin') : '#0'}}"
                                   class="{{Auth::user()->rol == 1 ? '' : 'dropdown-toggle'}}"
                                   data-toggle="{{Auth::user()->rol == 1 ? '' : 'dropdown'}}"
                                   role="{{Auth::user()->rol == 1 ? '' : 'button'}}">
                                    {{ Auth::user()->name }}
                                </a>
                                @if(!Auth::user()->rol == 1)
                                    <ul class="dropdown-menu show-right">
                                        <li>
                                            <a href="{{route('user', ['id' => Auth::user()->href])}}">
                                                @lang('user.profile')
                                            </a>
                                            <a href="{{route('userPurchases', ['id' => Auth::user()->href])}}">
                                                @lang('user.purchases')
                                            </a>
                                            <a href="{{route('userSettings', ['id' => Auth::user()->href])}}">
                                                @lang('user.settings')
                                            </a>
                                            <a href="{{ route('logout') }}" data-tooltip="tooltip"
                                               data-placement="bottom" title="Logout"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                @lang('user.logout') <i class="fa fa-sign-out" aria-hidden="true"></i>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                @endif
                            </li>
                        @endif
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
    </div><!-- end container -->
</header>
