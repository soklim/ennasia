<?php
/**
 * Created by PhpStorm.
 * User: SOKLIM
 * Date: 7/13/2019
 * Time: 8:42 AM
 */
?>
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

    <!-- News Details Page Area Start Here -->
    <section class="container">
        <div class="bg-body box-layout">
            <br>
            <div class="row">
                <div class="col-lg-8 col-md-12 mb-30">
                    <div class="news-details-layout1">
                        @foreach($reals as $real)
                        <div class="col-md-12 col-sm-6 col-12 mb-30">
                            <div class="media item-shadow-gray bg-body media-none--sm">
                                <div class="position-relative width-36 width43-lg">
                                    <a href="{!! url('real_estate/'. $real->id) !!}" class="img-opacity-hover img-overlay-70">
                                        <img src="{{$real->photo?$real->photo->file:'https://via.placeholder.com/560x391'}}" alt="real estate" class="img-fluid width-100" style="height: 150px;">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">{{$real->price}}$</div>
                                    </div>
                                </div>
                                <div class="media-body media-padding30 p-mb-none-child">
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>Location</span>
                                                {{$real->Province->province}}
                                            </li>
                                            <li>
                                                                    <span>
                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                    </span>{{$real->created_At}}</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-semibold-dark size-lg mb-15">
                                        <a href="{!! url('real_estate/'. $real->id) !!}">{{$real->title}}</a>
                                    </h3>
                                    <p>{{str_limit($real->description,80)}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                            {{ $reals->links() }}
                    </div>
                </div>


                <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                    <div class="sidebar-box">
                        <div class="topic-border color-cod-gray mb-30">
                            <div class="topic-box-lg color-cod-gray">ដៃគូផ្សព្វផ្សាយ</div>
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


                </div>
            </div>
        </div>
        </div>
    </section>

@stop

