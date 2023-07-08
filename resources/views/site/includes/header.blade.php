<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta name="theme-color" content="#3ed2a7">

    <title>@yield('title')</title>
    <meta name="description" content="{{$settings['site_name'] ?? ''}}">
    <meta name="keywords" content="{{$settings['site_name'] ?? ''}}">
    <meta name="distribution" content="global">
    <meta name="author" content="{{$settings['site_name'] ?? ''}}">

    <!-- Open Graph protocol -->
    <meta property="og:title" content="{{$settings['site_name'] ?? ''}}"/>
    <meta property="og:type" content="Media Website"/>
    <meta property="og:image" content="uploads/favicon/favicon.png"/>
    <meta property="og:site_name" content="{{$settings['site_name'] ?? ''}}"/>
    <meta property="og:description" content="{{$settings['about'] ?? ''}}"/>


    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700&amp;subset=arabic" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('site/assets/css/style.css')}}" />

    <script async src="{{asset('site/assets/vendors/modernizr.min.js')}}"></script>
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">

    <script type="text/javascript" src="{{ asset('admin/assets/js/core/libraries/jquery.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('admin/assets/js/core/libraries/bootstrap.min.js') }}"></script>

    <script src="{{asset('admin/assets/js/plugins/jquery-confirm/jquery.confirm.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>

</head>
<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="left" data-mobile-nav-style="minimal" data-mobile-nav-shceme="gray" data-mobile-nav-breakpoint="1199">

<div id="wrap" >

    <header class="main-header main-header-overlay " data-sticky-header="true">
        <div class="mainbar-wrap">
            <div class="container mainbar-container">
                <div class="row mainbar-row align-items-lg-stretch px-4" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"350", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":-60, "opacity":0}, "animations":{"translateY":0, "opacity":1} }'>

                    <div class="col">
                        <div class="BrandCol">
                            <a class="MainBrand" href="{{route('site.index')}}" rel="home">
                                <img style="width: 300px; height: 100px;" src="{{URL::to('assets/uploads/images/settings/'.$settings['logo_header'])}}" alt="{{$settings['site_name'] ?? ''}}">
                            </a>
                        </div>
                    </div><!-- /.col -->

                    <div class="col">
                        <ul id="primary-nav" class="main-nav nav align-items-lg-stretch justify-content-lg-center"  data-localscroll="true">
                            <li  class="is-active"><a href="{{route('site.index')}}"> <span>الرئيسة</span></a></li>
                            @if( Request::is('/'))
                            <li><a href="#recent-news"><span>جديد الشركة</span></a></li>
                            <li><a href="#services"><span>خدامتنا </span></a></li>
                            <li><a href="#contact-us"><span>تواصل معنا</span></a></li>
                            @endif
                        </ul>
                    </div><!-- /.col -->

                    <div class="col text-right">

                        <div class=" d-flex align-items-center">
                            <ul class="social-icon branded-text round social-icon-sm font-size-20 mr-3 ml-3">
                                <li><a href=" {{$settings['facebook'] ?? ''}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{$settings['instagram'] ?? ''}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="{{$settings['youtube'] ?? ''}}" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                            <a href="https://api.whatsapp.com/send?phone={{$settings['whatsapp'] ?? ''}}" class="btn btn-solid btn-sm round bg-whatsapp font-weight-medium">
                                <span><span class="btn-icon"><i class="fa fa-whatsapp font-size-20"></i></span></span>
                            </a>
                        </div><!-- /.header-module -->


                    </div><!-- /.col -->

                </div><!-- /.mainbar-row -->
            </div><!-- /.mainbar-container -->
        </div><!-- /.mainbar-container -->
    </header><!-- /.main-header -->

    <header id="MobHeader" class="searchActive3">

        <div class="HeaderTop" >
            <div class="d-flex" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"350", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":-60, "opacity":0}, "animations":{"translateY":0, "opacity":1} }'>
                <div class="MobHeader-LSide d-flex">
                    <div class="MobHeader-ico">
                        <a class="MobHeader-link" data-toggle="modal" data-target="#MobMenu"><i class="fa fa-bars headerIcosizeFix"></i></a>
                    </div>
                </div>

                <div class="MobHeader-RSide d-flex">
                    <div class="MobHeader-ico">
                        <a href="https://api.whatsapp.com/send?phone={{$settings['phone'] ?? ''}}" class="mainMenuTrigger toggle MobHeader-link dropdown-toggle">
                            <i class="fa fa-whatsapp headerIcosizeFix text-whatsapp"></i>
                        </a>
                    </div>
                    <div class="MobHeader-ico">
                        <a href="tel:+971502794830" class="mainMenuTrigger toggle MobHeader-link dropdown-toggle">
                            <i class="fa fa-phone headerIcosizeFix text-primary"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </header>
