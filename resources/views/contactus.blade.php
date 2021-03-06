@extends('layouts.app')

@section('content')

    <section class="section paralbackground page-banner hidden-xs"
             style="background-image:url('upload/page_banner_01.jpg');" data-img-width="2000" data-img-height="400"
             data-diff="100">
    </section><!-- end section -->

    <div class="page-title lb">
        <div class="container clearfix">
            <div class="title-area pull-left">
                <h2>
                    @lang('contacts.contact_us')
                    <small>Get in touch, ask your questions to us!</small>
                </h2>
            </div><!-- /.pull-right -->
            <div class="pull-right hidden-xs">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">
                                @lang('header.home')
                            </a>
                        </li>
                        <li class="active"> @lang('header.contact')</li>
                    </ol>
                </div><!-- end bread -->
            </div><!-- /.pull-right -->
        </div>
    </div><!-- end page-title -->

    <section class="section">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195168.32764022387!2d44.348481592772025!3d40.15330599674781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406aa2dab8fc8b5b%3A0x3d1479ae87da526a!2z0JXRgNC10LLQsNC9LCDQkNGA0LzQtdC90LjRjw!5e0!3m2!1sru!2sru!4v1498301433512"
                                width="100%" height="420" frameborder="0" style="border:0"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div><!-- end googlemap -->

            <hr class="invis">

            <div class="row">
                <div class="col-md-5">
                    <div class="widget">
                        <p>If you need help before, during or after your purchase, this is the place to be. Please use
                            below contact details for all your pre-sale questions, contact questions.</p>
                        <hr class="invis">
                        <ul class="contact-details">
                            <li><i class="fa fa-link"></i> <a href="#">www.yoursite.com</a></li>
                            <li><i class="fa fa-envelope-o"></i> <a href="">info@yoursite
                                    .com</a></li>
                            <li><i class="fa fa-phone"></i> +90 123 45 67</li>
                            <li><i class="fa fa-fax"></i> +90 123 45 67</li>
                            <li><i class="fa fa-home"></i> Address</li>
                        </ul>
                        <hr class="invis">
                        <div class="social-icons">
                            <ul class="list-inline">

                                @foreach($social_icons as $icons)
                                    @if($icons->link)
                                        <li class="facebook">
                                            @if($icons->icon_code == "fa fa-skype")
                                                <a href="skype:{{$icons->link}}?chat"> <i
                                                            class="{{$icons->icon_code}}"></i></a>
                                            @else
                                                <a target="_blank"
                                                   href="{{$icons->link}}">
                                                    <i class="{{$icons->icon_code}}"></i>
                                                </a>
                                            @endif
                                        </li>

                                    @endif
                                @endforeach

                            </ul>
                        </div><!-- end social icons -->
                    </div><!-- end widget -->
                </div>


                <div class="col-md-7">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="{{route('send_email')}}" name="contactform"
                              method="post">
                            <div class="col-md-12">
                                <input type="text" name="name" id="name" class="form-control" placeholder="@lang('contacts.name')">
                                <input type="email" name="email" id="email" class="form-control" placeholder="@lang('contacts.email')"
                                       required>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="@lang('contacts.phone')">
                                <input type="text" name="subject" id="subject" class="form-control"
                                       placeholder="@lang('contacts.subject')">
                                <textarea class="form-control" name="text" id="comments" rows="6"
                                          placeholder="@lang('contacts.message')" required></textarea>
                                {{csrf_field()}}
                                <button type="submit" value="SEND" id="submit" class="btn btn-primary"> @lang('contacts.send')
                                </button>
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->


            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

@endsection