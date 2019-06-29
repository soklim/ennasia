<?php
/**
 * Created by PhpStorm.
 * User: AMIS
 * Date: 26-Jun-19
 * Time: 2:54 PM
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
                        @foreach($top as $top1)
                        <div class="col-12">
                            <div class="topic-border {{$top1->category->color}} mb-30 width-100">
                                <div class="topic-box-lg {{$top1->category->color}}">{{$top1->category->name}}</div>
                            </div>
                        </div>
                        @endforeach
                        <div class="news-details-layout1">
                            @foreach($category as $cat)
                            <div class="media media-none--lg mb-30">
                                <div class="position-relative width-40">
                                    <div class="position-relative">
                                        <a href="{!! url('news-detail/'. $cat->id) !!}" class="img-opacity-hover">
                                            <img src="{{$cat->photo?$cat->photo->file:'https://via.placeholder.com/600x375'}}" alt="news" class="img-fluid width-100" id="MainTechno">
                                        </a>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm {{$cat->category->color}} mb-20">{{$cat->category->name}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body p-mb-none-child media-margin30">
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                អត្តបទ៖
                                                {{$cat->user->name}}
                                            </li>
                                            <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>{{$cat->created_at}}</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-semibold-dark size-lg mb-15">
                                        <a href="{!! url('news-detail/'. $cat->id) !!}">{{str_limit($cat->title,90)}}</a>
                                    </h3>
                                </div>
                            </div>
                            @endforeach
                                {{ $category->links() }}
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
