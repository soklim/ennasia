@extends('front.fragement.layout')

@section('content1')

    <!-- News Feed Area Start Here -->
    <section class="container">
        <div class="bg-body box-layout">
            <br>
            @foreach($sys4 as $sys4)
            <div class="row no-gutters d-flex align-items-center">
                <img src="{{$sys4->photo?$sys4->photo->file:'https://via.placeholder.com/1140x140'}}" alt="ad" class="img-fluid">
            </div>
                <br>
            @endforeach

        </div>
    </section>



    <!-- Main content -->
    <section class="container" >
        <div class="bg-body box-layout">
            <br>
            <div class="section-space-bottom-less4">
                <div class="row tab-space2">
                    <div class="col-lg-5 col-md-12">
                        <div class="img-overlay-70 img-scale-animate mb-4">
                            @foreach($topContent as $topContent)
                            <img src="{{$topContent->photo?$topContent->photo->file:'https://via.placeholder.com/800x787'}}" alt="news" class="img-fluid" id="topnews">
                            <div class="mask-content-lg">
                                <div class="topic-box-sm {{$topContent->category->color}} mb-20">{{$topContent->category->name}}</div>
                                <div class="post-date-light">
                                    <ul>
                                        {{--<li>--}}
                                            {{--<span>by</span>--}}
                                            {{--<a href="single-news-1.html">{{$topContent->user->name}}</a>--}}
                                        {{--</li>--}}
                                        <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>{{$topContent->created_at}}</li>
                                    </ul>
                                </div>
                                <h1 class="title-medium-light">
                                    <a href="{!! url('news-detail/'. $topContent->id) !!}">{{str_limit($topContent->title,70)}}</a>
                                </h1>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="row tab-space2">
                            @foreach($mainContent as $main)
                            <div class="col-sm-6 col-12">
                                <div class="img-overlay-70 img-scale-animate mb-4">
                                    <div class="mask-content-sm">
                                        <div class="topic-box-sm {{$main->category->color}} mb-10">{{$main->category->name}}</div>
                                        <h3 class="title-medium-light">
                                            <a href="{!! url('news-detail/'. $main->id) !!}">{{str_limit($main->title,70)}}</a>
                                        </h3>
                                    </div>
                                    <img src="{{$main->photo?$main->photo->file:'https://via.placeholder.com/560x391'}}" alt="news" class="img-fluid width-100 " style="height: 180px">
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Slider Area End Here -->
    <!-- Popular News Area Start Here -->
    <section class="container">
        <div class="bg-body box-layout">
            <div class="section-space-bottom-less30">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="mb-20-r ne-isotope">
                            <div class="topic-border color-social mb-30">
                                <div class="topic-box-lg color-social">សង្គម</div>
                            </div>
                            <div class="featuredContainer">
                                <div class="row football">

                                    <div class="col-md-6 col-sm-12">
                                        @foreach($topSocial as $topSocial)
                                        <div class="mb-30">
                                            <div class="img-scale-animate mb-20">
                                                <a href="{!! url('news-detail/'. $topSocial->id) !!}">
                                                    <img src="{{$topSocial->photo?$topSocial->photo->file:'https://via.placeholder.com/600x388'}}" alt="news" class="img-fluid" id="topSocail">
                                                </a>
                                                <div class="topic-box-top-sm">
                                                    <div class="topic-box-sm {{$topSocial->category->color}} mb-20">{{$topSocial->category->name}}</div>
                                                </div>
                                            </div>
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        អត្តបទ៖
                                                        {{$topSocial->user->name}}
                                                    </li>
                                                    <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>{{$topSocial->created_at}}</li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="{!! url('news-detail/'. $topSocial->id) !!}">{{str_limit($topSocial->title,80)}}</a>
                                            </h3>
                                        </div>
                                        @endforeach
                                        @foreach($SocialCol1 as $SocialCol1)
                                        <div class="media mb-30">
                                            <a class="img-opacity-hover" href="{!! url('news-detail/'. $SocialCol1->id) !!}">
                                                <img src="{{$SocialCol1->photo?$SocialCol1->photo->file:'https://via.placeholder.com/94x69'}}" alt="news" class="img-fluid" id="childSocial">
                                            </a>
                                            <div class="media-body">
                                                <div class="post-date-dark">
                                                    <ul>

                                                        <li>
                                                                    <span>
                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                    </span>{{$SocialCol1->created_at}}</li>
                                                    </ul>
                                                </div>
                                                <h3 class="title-medium-dark size-md mb-none">
                                                    <a href="{!! url('news-detail/'. $SocialCol1->id) !!}">{{str_limit($SocialCol1->title,50)}}</a>
                                                </h3>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        @foreach($SecondSocial as $SecondSocial)
                                        <div class="mb-30">
                                            <div class="img-scale-animate mb-20">
                                                <a href="{!! url('news-detail/'. $SecondSocial->id) !!}">
                                                    <img src="{{$SecondSocial->photo?$SecondSocial->photo->file:'https://via.placeholder.com/600x388'}}" alt="news" class="img-fluid" id="topSocail">
                                                </a>
                                                <div class="topic-box-top-sm">
                                                    <div class="topic-box-sm {{$SecondSocial->category->color}} mb-20">{{$SecondSocial->category->name}}</div>
                                                </div>
                                            </div>
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        អត្តបទ៖
                                                       {{$SecondSocial->user->name}}
                                                    </li>
                                                    <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>{{$SecondSocial->created_at}}</li>
                                                </ul>
                                            </div>
                                            <h3 class="title-semibold-dark size-lg mb-15">
                                                <a href="{!! url('news-detail/'. $SecondSocial->id) !!}">{{str_limit($SecondSocial->title,80)}}</a>
                                            </h3>
                                        </div>
                                        @endforeach
                                        @foreach($SocialCol2 as $SocialCol2)
                                            <div class="media mb-30">
                                                    <a class="img-opacity-hover" href="{!! url('news-detail/'. $SocialCol2->id) !!}">
                                                        <img src="{{$SocialCol2->photo?$SocialCol2->photo->file:'https://via.placeholder.com/94x69'}}" alt="news" class="img-fluid" id="childSocial">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="post-date-dark">
                                                            <ul>
                                                                <li>
                                                                    <span>
                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                    </span>{{$SocialCol2->created_at}}</li>
                                                            </ul>
                                                        </div>
                                                        <h3 class="title-medium-dark size-md mb-none">
                                                            <a href="{!! url('news-detail/'. $SocialCol2->id) !!}">{{str_limit($SocialCol2->title,50)}}</a>
                                                        </h3>
                                                    </div>
                                             </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="topic-border color-economic mb-30 width-100">
                                    <div class="topic-box-lg color-economic">សេដ្ឋកិច្ច</div>
                                </div>
                            </div>
                            @foreach($top4Eco as $top4Eco)
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="img-overlay-70 img-scale-animate mb-30">
                                    <div class="mask-content-xs">
                                        <div class="post-date-light d-none d-sm-block">
                                            <ul>
                                                <li>
                                                    អត្តបទ៖
                                                   {{$top4Eco->user->name}}
                                                </li>
                                                <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>{{$top4Eco->created_at}}</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-light">
                                            <a href="{!! url('news-detail/'. $top4Eco->id) !!}">{{str_limit($top4Eco->title,70)}}</a>
                                        </h3>
                                    </div>
                                    <a href="{!! url('news-detail/'. $top4Eco->id) !!}">
                                        <img src="{{$top4Eco->photo?$top4Eco->photo->file:'https://via.placeholder.com/600x375'}}" alt="news" class="img-fluid width-100" id="MainEco">
                                    </a>
                                    <div class="topic-box-top-sm">
                                        <div class="topic-box-sm {{$top4Eco->category->color}} mb-20">{{$top4Eco->category->name}}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="topic-border color-techno mb-30 width-100">
                                    <div class="topic-box-lg color-techno">បច្ចេកវិទ្យា</div>
                                </div>
                            </div>
                            @foreach($top6Techno as $top6Techno)
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <div class="media media-none--lg mb-30">
                                    <div class="position-relative width-40">
                                        <div class="position-relative">
                                            <a href="{!! url('news-detail/'. $top6Techno->id) !!}" class="img-opacity-hover">
                                                <img src="{{$top6Techno->photo?$top6Techno->photo->file:'https://via.placeholder.com/600x375'}}" alt="news" class="img-fluid width-100" id="MainTechno">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm {{$top6Techno->category->color}} mb-20">{{$top6Techno->category->name}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body p-mb-none-child media-margin30">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    អត្តបទ៖
                                                   {{$top6Techno->user->name}}
                                                </li>
                                                <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>{{$top6Techno->created_at}}</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-semibold-dark size-lg mb-15">
                                            <a href="{!! url('news-detail/'. $top6Techno->id) !!}">{{str_limit($top6Techno->title,90)}}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                        <div class="sidebar-box">
                            <div class="topic-border color-cod-gray mb-30">
                                <div class="topic-box-lg color-cod-gray">ដៃគូផ្សព្វផ្សាយ</div>
                            </div>
                        </div>
                        <div class="sidebar-box">
                            <div class="ne-banner-layout1 text-center">
                                <div class="fb-page"
                                     data-href="https://www.facebook.com/ENN-Asia-Channel-448905582610301/"
                                     data-width="380"
                                     data-hide-cover="false"
                                     data-show-facepile="false"></div>
                            </div>
                        </div>

                        @foreach($sys6 as $sys6)
                        <div class="sidebar-box">
                            <div class="ne-banner-layout1 text-center">
                                <a href="#">
                                    <img src="{{$sys6->photo?$sys6->photo->file:'https://via.placeholder.com/370x278'}}" alt="ad" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        @endforeach
                        {{--<div class="sidebar-box">--}}
                            {{--<div class="ne-banner-layout1 text-center">--}}
                                {{--<a href="#">--}}
                                    {{--<img src="/img/banner/banner3.jpg" alt="ad" class="img-fluid">--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="sidebar-box">--}}
                            {{--<div class="ne-banner-layout1 text-center">--}}
                                {{--<a href="#">--}}
                                    {{--<img src="/img/banner/banner3.jpg" alt="ad" class="img-fluid">--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="sidebar-box">--}}
                            {{--<div class="ne-banner-layout1 text-center">--}}
                                {{--<a href="#">--}}
                                    {{--<img src="/img/banner/banner3.jpg" alt="ad" class="img-fluid">--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="sidebar-box">--}}
                            {{--<div class="ne-banner-layout1 text-center">--}}
                                {{--<a href="#">--}}
                                    {{--<img src="/img/banner/banner3.jpg" alt="ad" class="img-fluid">--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="sidebar-box">
                            <div class="topic-border color-cod-gray mb-30">
                                <div class="topic-box-lg color-cod-gray">ពត៌មានថ្មីៗ</div>
                            </div>
                            <div class="row">
                                @foreach($popContent as $pop)
                                <div class="col-6">
                                    <div class="mt-30">
                                        <div class="position-relative">
                                            <a href="{!! url('news-detail/'. $pop->id) !!}" class="img-opacity-hover mb-10">
                                                <img src="{{$pop->photo?$pop->photo->file:'https://via.placeholder.com/600x375'}}" alt="news" class="img-fluid width-100" id="PopContent">
                                            </a>
                                            <div class="topic-box-top-xs">
                                                <div class="topic-box-sm {{$pop->category->color}} mb-20">{{$pop->category->name}}</div>
                                            </div>
                                        </div>
                                        <h3 class="title-medium-dark size-md mb-none">
                                            <a href="{!! url('news-detail/'. $pop->id) !!}"> {{str_limit($pop->title,60)}}</a>
                                        </h3>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular News Area End Here -->

    <!-- Latest Article Area Start Here -->
    {{--<section class="container">--}}
        {{--<div class="bg-body box-layout">--}}
            {{--<div class="section-space-less30">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-lg-8 col-md-12">--}}
                        {{--<div class="topic-border color-techno mb-30">--}}
                            {{--<div class="topic-box-lg color-techno">បច្ចេកវិទ្យា</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">--}}
                                {{--<div class="media media-none--lg mb-30">--}}
                                    {{--<div class="position-relative width-40">--}}
                                        {{--<div class="position-relative">--}}
                                            {{--<a href="single-news-1.html" class="img-opacity-hover">--}}
                                                {{--<img src="img/news/news267.jpg" alt="news" class="img-fluid">--}}
                                            {{--</a>--}}
                                            {{--<div class="topic-box-top-xs">--}}
                                                {{--<div class="topic-box-sm color-cod-gray mb-20">Tennies</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="media-body p-mb-none-child media-margin30">--}}
                                        {{--<div class="post-date-dark">--}}
                                            {{--<ul>--}}
                                                {{--<li>--}}
                                                    {{--<span>by</span>--}}
                                                    {{--<a href="single-news-1.html">Adams</a>--}}
                                                {{--</li>--}}
                                                {{--<li>--}}
                                                            {{--<span>--}}
                                                                {{--<i class="fa fa-calendar" aria-hidden="true"></i>--}}
                                                            {{--</span>March 22, 2017</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<h3 class="title-semibold-dark size-lg mb-15">--}}
                                            {{--<a href="single-news-1.html">M-Sport Hits 250 At Happy Hunting Ground</a>--}}
                                        {{--</h3>--}}
                                        {{--<p>Separated they live in Bookmarksgrove right at the coast of the Semantics,--}}
                                            {{--a large language ocean. A river named Duden flows by their place and--}}
                                            {{--...--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- Latest Article Area End Here -->


@stop
