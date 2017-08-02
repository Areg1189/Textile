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
                            <li><a href="{{route('home')}}">@lang('header.home')</a></li>
                            <li><a href="{{route('about')}}">@lang('header.about')</a></li>
                            <li><a href="{{route('contactus')}}">@lang('header.contact')</a></li>
                            <li><a href="{{route('terms')}}">@lang('terms.terms')</a></li>
                            <li><a href="{{route('delivery')}}">@lang('delivery.delivery')</a></li>
                            <li><a href="{{route('refund')}}">@lang('refund.refund')</a></li>
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
                        <h4>@lang('index.all_categories')</h4>
                        <hr>
                    </div>

                    <div class="link-widget">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                @foreach($subCats->chunk(11) as $chunk)
                                    <ul class="check">
                                        @foreach($chunk as $subCat)
                                        <li><a href="{{route('getCategory', ['cat' => $subCat->link])}}">{{$subCat->translate(session('locale'))->name}}</a></li>
                                        @endforeach
                                    </ul>
                                @endforeach
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end link -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-md-3 col-sm-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h4>@lang('index.email_newsletter')</h4>
                        <hr>
                    </div>

                    <div class="newsletter-widget">
                        <p>Subscribe our newsletter for discount and coupon codes.</p>
                        <form method="post" action="{{route('subscribe')}}">
                            {{csrf_field()}}
                            <input type="text" name="name" class="form-control input-lg"
                                   placeholder="@lang('contacts.name')" required/>
                            <input type="email" name="email" class="form-control input-lg"
                                   placeholder="@lang('contacts.email')" required/>
                            <button type="submit" class="button button--aylen btn">@lang('header.subscribe')</button>
                        </form>
                    </div><!-- end newsletter -->

                </div><!-- end widget -->

                <div class="widget clearfix">
                    <div class="row stat-wrapper">
                        <div class="stats col-md-6">
                            <h5>Products</h5>
                            <p>{{$product_count}}</p>
                        </div><!-- end stats -->
                        <div class="stats col-md-6">
                            <h5>Customers</h5>
                            <p>{{$users_count->count()}}</p>
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
                <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo.png')}}" alt=""></a>
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
</div>