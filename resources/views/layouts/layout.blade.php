<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140412765-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-140412765-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="keywords" content= "@lang('seo.keywords')" />
    <meta name="description" content="@lang('seo.description')">
    <meta name="author" content="Laracode">

    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href= {{ asset('img/favicon.ico') }}  type="image/x-icon">
    <link rel="apple-touch-icon" href= {{ asset('img/apple-touch-icon.png') }} >
    <link rel="apple-touch-icon" sizes="72x72" href= {{ asset('img/apple-touch-icon-72x72.png') }} >
    <link rel="apple-touch-icon" sizes="114x114" href= {{ asset('img/apple-touch-icon-114x114.png') }} >

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href= {{ asset('css/bootstrap.css') }} >
    <link rel="stylesheet" type="text/css" href= {{ asset('fonts/font-awesome/css/font-awesome.css') }}>

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css" href= {{ asset('css/style.css') }}>
    <link rel="stylesheet" type="text/css" href= {{ asset('css/nivo-lightbox/nivo-lightbox.css') }} >
    <link rel="stylesheet" type="text/css" href= {{ asset('css/nivo-lightbox/default.css') }} >
    <link rel="stylesheet" type="text/css" href= {{ asset('css/flexslider.css') }} >
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand page-scroll" href="#page-top">LARACODE</a> </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                {{--<li><a href="#features" class="page-scroll">Features</a></li>--}}
                <li><a href="#about" class="page-scroll">@lang('main.about_nav')</a></li>
                <li><a href="#services" class="page-scroll">@lang('main.services_nav')</a></li>
                <li><a href="#portfolio" class="page-scroll">@lang('main.gallery_nav')</a></li>
                {{--<li><a href="#testimonials" class="page-scroll">Testimonials</a></li>--}}
                {{--<li><a href="#team" class="page-scroll">@lang('main.team_nav')</a></li>--}}
                <li><a href="#contact" class="page-scroll">@lang('main.contact_nav')</a></li>
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/home') }}">@lang('main.home')</a></li>
                    @else
                        <li><a href="{{ route('login') }}">@lang('main.login')</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">@lang('main.register')</a></li>
                        @endif
                    @endauth
                @endif
                <li><div class="lang-switcher"><a href="locale/en">EN <img style="width: 30px;" src="{{ asset('img/lang-icons/en.png') }}" alt=""></a>
                <a href="locale/ua">UA <img style="height: 30px;" src="{{ asset('img/lang-icons/ua.svg') }}" alt=""></a></div></li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>

@yield('content')


<script type="text/javascript" src= {{ asset('js/jquery.1.11.1.js') }} ></script>
<script type="text/javascript" src= {{ asset('js/bootstrap.js') }} ></script>
<script type="text/javascript" src= {{ asset('js/SmoothScroll.js') }} ></script>
<script type="text/javascript" src= {{ asset('js/nivo-lightbox.js') }} ></script>
<script type="text/javascript" src= {{ asset('js/jqBootstrapValidation.js') }} ></script>
{{--<script type="text/javascript" src= {{ asset('js/contact_me.js') }} ></script>--}}

<script type="text/javascript" src= {{ asset('js/jquery.flexslider-min.js') }} ></script>
<script type="text/javascript" src= {{ asset('js/main.js') }} ></script>
</body>
</html>