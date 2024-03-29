<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <meta http-equiv="content-language" content="en">
    <meta name="author" content="David Misiko Kololi">
    <meta name="developer" content="David Misiko Kololi">
    <meta name="developer:email" content="kololimdavid@gmail.com">
    <meta name="designer" content="BootstrapMade">
    <meta name="designer:email" content="kololimdavid@gmail.com">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="fb:app_id" content="{{ config('services.facebook.client_id') }}">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta property="og:site_name" content="{{config('app.name')}}">
    <!-- Google Verification code -->
    <meta name="google-site-verification" content="NvWTQHvlzHG8sT_chvNNX27aSHOdaA5jp77_ig_EIBQ" />
    <!-- Yandex Verification code -->
    <meta name="yandex-verification" content="f203a3de5b436efa" />
    <!-- Meta Tags -->
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <!-- rss feed -->
    @include('feed::links')
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('static/favicon.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    {{ Html::style('css/custom.css') }}
    {{ Html::style('fontawesome/css/all.min.css') }}
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- =======================================================
    * Template Name: FlexStart - v1.9.0
    * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <!-- TinyMCE Editor -->
    <link rel="stylesheet" href="{{asset('prism/css/prism.css')}}">
    <style>
        .hljs{
                display: inline-block !important;
                min-width: 100%;
        }

        app-name{
            font-family: Elephant;
            text-transform: uppercase;
            font-size: 20px;
        }

        @media only screen and (max-width: 767px) {
            app-name{
                font-size: 20px;
                text-transform: uppercase;
                font-family: Elephant;
            }
            header img{
                width: 24px;
                height: 24px;
            }
        }

        @media only screen and (min-width: 767px){
            #auth-card{
                margin-left: 300px;margin-right: 300px;
            }
            #auth-padding{
                padding-left: 20px;padding-right: 20px;
            }
        }

    </style>
</head>