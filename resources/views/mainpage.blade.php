@extends('layouts.layout')

@section('title', \Lang::get('seo.title'))

@section('content')
    {{--@if (session('message_mail_sent'))--}}
        {{--<div class="info-box">{{ session('message_mail_sent') }}</div>--}}
    {{--@endif--}}
<!-- Header -->
<header id="header">
    <div class="intro">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 intro-text">
                        <div class="header-title">Laracode</div>
                        <div class="header-title">Space</div>
                        <p>@lang('main.header-par')</p>
                        <a href="{{ config('app.url') }}/create-new-project" class="btn btn-custom btn-lg page-scroll">@lang('main.header-btn')</a> </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Features Section -->
{{--<div id="features" class="text-center">--}}
    {{--<div class="container">--}}
        {{--<div class="col-md-10 col-md-offset-1 section-title">--}}
            {{--<h2>Features</h2>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<div class="col-xs-6 col-md-3"> <i class="fa fa-comments-o"></i>--}}
                {{--<h3>Lorem ipsum</h3>--}}
                {{--<p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>--}}
            {{--</div>--}}
            {{--<div class="col-xs-6 col-md-3"> <i class="fa fa-bullhorn"></i>--}}
                {{--<h3>Dolor sit amet</h3>--}}
                {{--<p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque.</p>--}}
            {{--</div>--}}
            {{--<div class="col-xs-6 col-md-3"> <i class="fa fa-group"></i>--}}
                {{--<h3>Tempus eleifend</h3>--}}
                {{--<p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>--}}
            {{--</div>--}}
            {{--<div class="col-xs-6 col-md-3"> <i class="fa fa-magic"></i>--}}
                {{--<h3>Pellentesque</h3>--}}
                {{--<p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- About Section -->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div style="background-image: url('{{ asset('img/working-office.jpg') }}'); width: 100%; height: 433px;" class="about-img"></div>
                    </li>
                    <li>
                        <div style="background-image: url('{{ asset('img/home-office.jpg') }}'); width: 100%; height: 433px;" class="about-img"></div>
                    </li>
                    <li>
                        <div style="background-image: url('{{ asset('img/programming.jpg') }}'); width: 100%; height: 433px;" class="about-img"></div>
                    </li>
                </ul>
            </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="about-text">
                    <h2>@lang('main.about-title')</h2>
                    <p>@lang('main.about-par')</p>
                    <h3>@lang('main.advantages-list-title')</h3>
                    <div class="list-style">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <ul>
                                <?php $list = \Lang::get('main.advantages-list') ?>
                                @foreach( $list as $key => $item)
                                        <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <ul>
                                <?php $list = \Lang::get('main.advantages-list-two') ?>
                                @foreach( $list as $key => $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Section -->
<div id="services" class="text-center">
    <div class="container">
        <div class="section-title">
            <h2>@lang('main.services-title')</h2>
            <p>@lang('main.services-par')</p>
        </div>
        <div class="row">
            <div class="col-md-4"> <i class="fa fa-laptop"></i>
                <div class="service-desc">
                    <h3>@lang('main.services-title-one')</h3>
                    <p>@lang('main.services-par-one')</p>
                </div>
            </div>
            <div class="col-md-4"> <i class="fa fa-anchor"></i>
                <div class="service-desc">
                    <h3>@lang('main.services-title-two')</h3>
                    <p>@lang('main.services-par-two')</p>
                </div>
            </div>
            <div class="col-md-4"> <i class="fa fa-info"></i>
                <div class="service-desc">
                    <h3>@lang('main.services-title-three')</h3>
                    <p>@lang('main.services-par-three')</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery Section -->
<div id="portfolio" class="text-center">
    <div class="container">
        <div class="section-title">
            <h2>@lang('main.gallery_nav')</h2>
            <p>@lang('main.gallery-par')</p>
        </div>
        <div class="row">
            <div class="portfolio-items">
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="https://dfleur.laracode.space/">
                                <div class="hover-text">
                                    <h4>@lang('main.gallery-project-title')</h4>
                                </div>
                                <div class="portfolio-img" style="background-image: url('{{ asset('img/portfolio/dfleur.png') }}'); width: 100%; height: 218px;"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="https://whitesound.laracode.space/">
                                <div class="hover-text">
                                    <h4>@lang('main.gallery-project-title')</h4>
                                </div>
                                <div class="portfolio-img" style="background-image: url('{{ asset('img/portfolio/ws.png') }}'); width: 100%; height: 218px;"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="https://karma.laracode.space/">
                                <div class="hover-text">
                                    <h4>@lang('main.gallery-project-title')</h4>
                                </div>
                                <div class="portfolio-img" style="background-image: url('{{ asset('img/portfolio/karma.png') }}'); width: 100%; height: 218px;"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="https://surf.laracode.space/">
                                <div class="hover-text">
                                    <h4>@lang('main.gallery-project-title')</h4>
                                </div>
                                <div class="portfolio-img" style="background-image: url('{{ asset('img/portfolio/surf.png') }}'); width: 100%; height: 218px;"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="portfolio-item">
{{--                        <div class="hover-bg"> <a href="{{ asset('img/portfolio/project-1.jpg') }}" title="" data-lightbox-gallery="gallery1">--}}
{{--                                <div class="hover-text">--}}
{{--                                    <h4>@lang('main.gallery-project-title')</h4>--}}
{{--                                </div>--}}
{{--                                <img src="{{ asset('img/portfolio/project-1.jpg') }}" class="img-responsive" alt="Project Title"> --}}
{{--                            --}}
{{--                            </a> </div>--}}

                        <div class="hover-bg">
                            <a href="https://catalyst.laracode.space/">
                                <div class="hover-text">
                                    <h4>@lang('main.gallery-project-title')</h4>
                                </div>
                                <div class="portfolio-img" style="background-image: url('{{ asset('img/portfolio/catalyst.png') }}'); width: 100%; height: 218px;"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="https://zipper.laracode.space/">
                                <div class="hover-text">
                                    <h4>@lang('main.gallery-project-title')</h4>
                                </div>
                                <div class="portfolio-img" style="background-image: url('{{ asset('img/portfolio/zipper.png') }}'); width: 100%; height: 218px;"></div>
                            </a>
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<!-- Testimonials Section -->
{{--<div id="testimonials">--}}
    {{--<div class="container">--}}
        {{--<div class="section-title text-center">--}}
            {{--<h2>What our clients say</h2>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4">--}}
                {{--<div class="testimonial">--}}
                    {{--<div class="testimonial-image"> <img src="img/testimonials/01.jpg" alt=""> </div>--}}
                    {{--<div class="testimonial-content">--}}
                        {{--<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>--}}
                        {{--<div class="testimonial-meta"> - John Doe </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--<div class="testimonial">--}}
                    {{--<div class="testimonial-image"> <img src="img/testimonials/02.jpg" alt=""> </div>--}}
                    {{--<div class="testimonial-content">--}}
                        {{--<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis."</p>--}}
                        {{--<div class="testimonial-meta"> - Johnathan Doe </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--<div class="testimonial">--}}
                    {{--<div class="testimonial-image"> <img src="img/testimonials/03.jpg" alt=""> </div>--}}
                    {{--<div class="testimonial-content">--}}
                        {{--<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>--}}
                        {{--<div class="testimonial-meta"> - John Doe </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row"> </div>--}}
            {{--<div class="col-md-4">--}}
                {{--<div class="testimonial">--}}
                    {{--<div class="testimonial-image"> <img src="img/testimonials/04.jpg" alt=""> </div>--}}
                    {{--<div class="testimonial-content">--}}
                        {{--<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>--}}
                        {{--<div class="testimonial-meta"> - Johnathan Doe </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--<div class="testimonial">--}}
                    {{--<div class="testimonial-image"> <img src="img/testimonials/05.jpg" alt=""> </div>--}}
                    {{--<div class="testimonial-content">--}}
                        {{--<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>--}}
                        {{--<div class="testimonial-meta"> - John Doe </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--<div class="testimonial">--}}
                    {{--<div class="testimonial-image"> <img src="img/testimonials/06.jpg" alt=""> </div>--}}
                    {{--<div class="testimonial-content">--}}
                        {{--<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis."</p>--}}
                        {{--<div class="testimonial-meta"> - Johnathan Doe </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- Team Section -->
{{--<div id="team" class="text-center">--}}
    {{--<div class="container">--}}
        {{--<div class="col-md-8 col-md-offset-2 section-title">--}}
            {{--<h2>Meet the Team</h2>--}}
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>--}}
        {{--</div>--}}
        {{--<div id="row">--}}
            {{--<div class="col-md-3 col-sm-6 team">--}}
                {{--<div class="thumbnail"> <img src="img/team/01.jpg" alt="..." class="team-img">--}}
                    {{--<div class="caption">--}}
                        {{--<h4>John Doe</h4>--}}
                        {{--<p>Director</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 col-sm-6 team">--}}
                {{--<div class="thumbnail"> <img src="img/team/02.jpg" alt="..." class="team-img">--}}
                    {{--<div class="caption">--}}
                        {{--<h4>Mike Doe</h4>--}}
                        {{--<p>Senior Designer</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 col-sm-6 team">--}}
                {{--<div class="thumbnail"> <img src="img/team/03.jpg" alt="..." class="team-img">--}}
                    {{--<div class="caption">--}}
                        {{--<h4>Jane Doe</h4>--}}
                        {{--<p>Senior Designer</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 col-sm-6 team">--}}
                {{--<div class="thumbnail"> <img src="img/team/04.jpg" alt="..." class="team-img">--}}
                    {{--<div class="caption">--}}
                        {{--<h4>Karen Doe</h4>--}}
                        {{--<p>Project Manager</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- Contact Section -->
<div id="contact">
    <div class="container">
        <div class="col-md-8">
            <div class="row">
                <div class="section-title">
                    <h2>@lang('main.contact-title')</h2>
                    <p>@lang('main.contact-par')</p>
                </div>
                <form method="POST" action="/contact-us" name="sentMessage" id="contactForm" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="name" name ="name" id="name" class="form-control" placeholder="@lang('main.name')" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name ="phone" id="phone" class="form-control" placeholder="@lang('main.phone')" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="@lang('main.message')" required></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-custom btn-lg">@lang('main.send-message')</button>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1 contact-info">
            <div class="contact-item">
                <h3>@lang('main.contact-info')</h3>
                <p><span><i class="fa fa-map-marker"></i>@lang('main.adress')</span>@lang('main.adress-par')</p>
            </div>
            <div class="contact-item">
                <p><span><i class="fa fa-phone"></i>@lang('main.phone')</span> +38 093 772 50 65</p>
            </div>
            <div class="contact-item">
                <p><span><i class="fa fa-envelope-o"></i>Email</span> morionstone@gmail.com</p>
            </div>
        </div>
{{--        <div class="col-md-12">--}}
{{--            <div class="row">--}}
{{--                <div class="social">--}}
{{--                    <ul>--}}
{{--                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
<!-- Footer Section -->
<div id="footer">
    <div class="container text-center">
        <p>&copy; 2019 Laracode </p>
    </div>
</div>

@endsection