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
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>Cambodia</li>
                                        <li>
                                            <i class="fa fa-calendar" aria-hidden="true"></i><span id="current_date"></span></li>
                                        <li>
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>Last Update 11.30 am</li>
                                        <li>
                                            <i class="fa fa-cloud" aria-hidden="true"></i>29&#8451; Sydney, Australia</li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 d-none d-lg-block">
                                    <ul class="header-social">
                                        <li>
                                            <a href="#" title="facebook">
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
                                            <a href="index.html" class="img-fluid">
                                                <img src="img/favicon2.png" alt="logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="ne-banner-layout1 pull-right">
                                            <a href="#">
                                                <img src="img/banner/banner2.jpg" alt="ad" class="img-fluid">
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
                                                        <a href="#" class="menu_title">ទំព័រដើម</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="menu_title">សេដ្ឋកិច្ច</a>

                                                    </li>
                                                    <li>
                                                        <a href="#"​ class="menu_title">សង្គម</a>

                                                    </li>
                                                    <li>
                                                        <a href="#" class="menu_title">បច្ចេកវិទ្យា</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="menu_title">នយោបាយ</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="menu_title">កីឡា</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="menu_title">សុខភាព</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 text-right position-static min-height-none">
                                        <div class="header-action-item on-mobile-fixed">
                                            <ul>
                                                <li>
                                                    <form id="top-search-form" class="header-search-light">
                                                        <input type="text" class="search-input" placeholder="Search...." required="" style="display: none;">
                                                        <button class="search-button">
                                                            <i class="fa fa-search" aria-hidden="true"></i>
                                                        </button>
                                                    </form>
                                                </li>
                                                <li class="d-none d-sm-block d-md-block d-lg-none">
                                                    <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
                                                        <i class="fa fa-user" aria-hidden="true"></i>Sign in
                                                    </button>
                                                </li>
                                                <li>
                                                    <div id="side-menu-trigger" class="offcanvas-menu-btn offcanvas-btn-repoint">
                                                        <a href="#" class="menu-bar">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </a>
                                                        <a href="#" class="menu-times close">
                                                            <span></span>
                                                            <span></span>
                                                        </a>
                                                    </div>
                                                </li>
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
                        <a href="index.html" class="footer-logo img-fluid">
                            <img src="img/favicon2.png" alt="logo" class="img-fluid">
                        </a>
                        {{--<ul class="footer-social">--}}
                            {{--<li>--}}
                                {{--<a href="#" title="facebook">--}}
                                    {{--<i class="fa fa-facebook" aria-hidden="true"></i>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#" title="twitter">--}}
                                    {{--<i class="fa fa-twitter" aria-hidden="true"></i>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#" title="google-plus">--}}
                                    {{--<i class="fa fa-google-plus" aria-hidden="true"></i>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#" title="linkedin">--}}
                                    {{--<i class="fa fa-linkedin" aria-hidden="true"></i>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#" title="pinterest">--}}
                                    {{--<i class="fa fa-pinterest" aria-hidden="true"></i>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#" title="rss">--}}
                                    {{--<i class="fa fa-rss" aria-hidden="true"></i>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#" title="vimeo">--}}
                                    {{--<i class="fa fa-vimeo" aria-hidden="true"></i>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        <p>© 2019 ENNASIA Developed by Anachak Technology. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End Here -->
    <!-- Modal Start-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="title-login-form">Login</div>
                </div>
                <div class="modal-body">
                    <div class="login-form">
                        <form>
                            <label>Username or email address *</label>
                            <input type="text" placeholder="Name or E-mail" />
                            <label>Password *</label>
                            <input type="password" placeholder="Password" />
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox" type="checkbox" checked>
                                <label for="checkbox">Remember Me</label>
                            </div>
                            <button type="submit" value="Login">Login</button>
                            <button class="form-cancel" type="submit" value="">Cancel</button>
                            <label class="lost-password">
                                <a href="#">Lost your password?</a>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End-->
    <!-- Offcanvas Menu Start -->
    <div id="offcanvas-body-wrapper" class="offcanvas-body-wrapper">
        <div id="offcanvas-nav-close" class="offcanvas-nav-close offcanvas-menu-btn">
            <a href="#" class="menu-times re-point">
                <span></span>
                <span></span>
            </a>
        </div>
        <div class="offcanvas-main-body">
            <ul id="accordion" class="offcanvas-nav panel-group">
                <li class="panel panel-default">
                    <div class="panel-heading">
                        <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <i class="fa fa-home" aria-hidden="true"></i>Home Pages</a>
                    </div>
                    <div aria-expanded="false" id="collapseOne" role="tabpanel" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="offcanvas-sub-nav">
                                <li>
                                    <a href="index.html">Home 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Home 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Home 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Home 4</a>
                                </li>
                                <li>
                                    <a href="index5.html">Home 5</a>
                                </li>
                                <li>
                                    <a href="index6.html">Home 6</a>
                                </li>
                                <li>
                                    <a href="index7.html">Home 7</a>
                                </li>
                                <li>
                                    <a href="index8.html">Home 8</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="author-post.html">
                        <i class="fa fa-user" aria-hidden="true"></i>Author Post Page</a>
                </li>
                <li class="panel panel-default">
                    <div class="panel-heading">
                        <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            <i class="fa fa-file-text" aria-hidden="true"></i>Post Pages</a>
                    </div>
                    <div aria-expanded="false" id="collapseTwo" role="tabpanel" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="offcanvas-sub-nav">
                                <li>
                                    <a href="post-style-1.html">Post Style 1</a>
                                </li>
                                <li>
                                    <a href="post-style-2.html">Post Style 2</a>
                                </li>
                                <li>
                                    <a href="post-style-3.html">Post Style 3</a>
                                </li>
                                <li>
                                    <a href="post-style-4.html">Post Style 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default">
                    <div class="panel-heading">
                        <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>News Details Pages</a>
                    </div>
                    <div aria-expanded="false" id="collapseThree" role="tabpanel" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="offcanvas-sub-nav">
                                <li>
                                    <a href="single-news-1.html">News Details 1</a>
                                </li>
                                <li>
                                    <a href="single-news-2.html">News Details 2</a>
                                </li>
                                <li>
                                    <a href="single-news-3.html">News Details 3</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="archive.html">
                        <i class="fa fa-archive" aria-hidden="true"></i>Archive Page</a>
                </li>
                <li class="panel panel-default">
                    <div class="panel-heading">
                        <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>Gallery Pages</a>
                    </div>
                    <div aria-expanded="false" id="collapseFour" role="tabpanel" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="offcanvas-sub-nav">
                                <li>
                                    <a href="gallery-style-1.html">Gallery Style 1</a>
                                </li>
                                <li>
                                    <a href="gallery-style-2.html">Gallery Style 2</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="404.html">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>404 Error Page</a>
                </li>
                <li>
                    <a href="contact.html">
                        <i class="fa fa-phone" aria-hidden="true"></i>Contact Page</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->
</div>
    <!-- ./Footer -->


@include('front.fragement.footerjs')
</body>
</html>