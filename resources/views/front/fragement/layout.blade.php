<!doctype html>
<html class="no-js" lang="">


<head>

    @include('front.fragement.style')

</head>
<body>

{{--<div id="preloader"></div>--}}
<!-- Preloader End Here -->
<div id="wrapper">
    <!-- Header Area Start Here -->
        <header>
            <div id="header-layout2" class="header-style5">
                <div class="header-top-bar">
                    <div class="top-bar-top bg-primarytextcolor box-layout">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9 col-md-12">
                                    <ul class="news-info-list text-center--md">
                                        <li>

                                        <li id="currentDate">
                                            <i class="fa fa-calendar" aria-hidden="true"></i><span id="current_date"></span></li>
                                        {{--<li>--}}
                                            {{--<i class="fa fa-clock-o" aria-hidden="true"></i>Last Update 11.30 am</li>--}}
                                        <li>
                                            @foreach($sys1 as $sys1)
                                            <i class="fa fa-cloud" aria-hidden="true"></i>{{$sys1->value_en}}&#8451; រាជធានីភ្នំពេញ, ប្រទេសកម្ពុជា</li>
                                            @endforeach
                                    </ul>
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <ul class="header-social">
                                        <li>
                                            <a href="https://www.facebook.com/ENN-Asia-Channel-448905582610301/" title="facebook"  target="_blank">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="twitter">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="google-plus">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="linkedin">
                                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="pinterest">
                                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="bg-body box-layout">
                            <div class="top-bar-bottom pt-20 pb-20 d-none d-lg-block">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-4">
                                        <div class="logo-area">
                                            <a href="{!! url('/') !!}" class="footer-logo img-fluid">
                                                <img src="/img/favicon2.png" alt="logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="ne-banner-layout1 pull-right">
                                            <a href="#">
                                                @foreach($sys3 as $sys3)
                                                <img src="{{$sys3->photo?$sys3->photo->file:'https://via.placeholder.com/1140x130'}}" alt="ad" class="img-fluid">
                                                @endforeach
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu-area" id="sticker">
                    <div class="container">
                        <div class="bg-body box-layout">
                            <div class="bg-primarytextcolor pl-15 pr-15">
                                <div class="row no-gutters d-flex align-items-center">
                                    <div class="col-lg-10 col-md-10 d-none d-lg-block position-static min-height-none">
                                        <div class="ne-main-menu">
                                            <nav id="dropdown">
                                                <ul>
                                                    <li class="active">
                                                        <a href="{!! url('/') !!}" class="menu_title">ទំព័រដើម</a>
                                                    </li>
                                                    <li>
                                                        <a href="{!! url('category/1') !!}" class="menu_title">សង្គម</a>
                                                    </li>
                                                    <li>
                                                        <a href="{!! url('category/2') !!}" class="menu_title">សេដ្ឋកិច្ច</a>
                                                    </li>
                                                    <li>
                                                        <a href="{!! url('category/3') !!}" class="menu_title">បច្ចេកវិទ្យា</a>
                                                    </li>
                                                    <li>
                                                        <a href="{!! url('category/4') !!}" class="menu_title">សុខភាព</a>
                                                    </li>
                                                    <li>
                                                        <a href="{!! url('category/5') !!}" class="menu_title">កីឡា</a>
                                                    </li>
                                                    <li>
                                                        <a href="{!! url('category/6') !!}" class="menu_title">នយោបាយ</a>
                                                    </li>

                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 text-right position-static min-height-none">
                                        <div class="header-action-item on-mobile-fixed">
                                            <ul>
                                                {{--<li>--}}
                                                    {{--<form id="top-search-form" class="header-search-light">--}}
                                                        {{--<input type="text" class="search-input" placeholder="Search...." required="" style="display: none;">--}}
                                                        {{--<button class="search-button">--}}
                                                            {{--<i class="fa fa-search" aria-hidden="true"></i>--}}
                                                        {{--</button>--}}
                                                    {{--</form>--}}
                                                {{--</li>--}}
                                                {{--<li class="d-none d-sm-block d-md-block d-lg-none">--}}
                                                    {{--<button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">--}}
                                                        {{--<i class="fa fa-user" aria-hidden="true"></i>Sign in--}}
                                                    {{--</button>--}}
                                                {{--</li>--}}
                                                {{--<li>--}}
                                                    {{--<div id="side-menu-trigger" class="offcanvas-menu-btn offcanvas-btn-repoint">--}}
                                                        {{--<a href="#" class="menu-bar">--}}
                                                            {{--<span></span>--}}
                                                            {{--<span></span>--}}
                                                            {{--<span></span>--}}
                                                        {{--</a>--}}
                                                        {{--<a href="#" class="menu-times close">--}}
                                                            {{--<span></span>--}}
                                                            {{--<span></span>--}}
                                                        {{--</a>--}}
                                                    {{--</div>--}}
                                                {{--</li>--}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


    @yield('content1')

    <!-- Footer Area Start Here -->
    <footer>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="{!! url('/') !!}" class="footer-logo img-fluid">
                            <img src="/img/logo.png" alt="logo" class="img-fluid">
                        </a>
                        @foreach($sys2 as $sys2)
                        <p>ទំនាក់ទំនងផ្សាយពាណិជកម្ម៖ {{$sys2->value_en}}</p>
                        @endforeach
                        <p>Copyright © 2019 ENN ASIA, All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
    <!-- ./Footer -->


@include('front.fragement.footerjs')
</body>
</html>