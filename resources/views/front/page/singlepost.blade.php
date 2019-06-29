<?php
/**
 * Created by PhpStorm.
 * User: AMIS
 * Date: 25-Jun-19
 * Time: 11:47 AM
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
    @foreach($singlecontent as $post)
        <div id="hidecontent" style="display: none">
            {{$post->content}}
        </div>
    <!-- News Details Page Area Start Here -->
    <section class="container">
            <div class="bg-body box-layout">
                <br>
                <div class="row">
                    <div class="col-lg-8 col-md-12 mb-30">
                        <div class="news-details-layout1">
                            {{--<div class="position-relative mb-30">--}}
                                {{--<img src="{{$post->photo?$post->photo->file:'https://via.placeholder.com/750x438'}}" alt="news" class="img-fluid" id="singlepost">--}}
                                {{--<div class="topic-box-top-sm">--}}
                                    {{--<div class="topic-box-sm {{$post->category->color}} mb-20">{{$post->category->name}}</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <h2 class="title-semibold-dark size-c30" style="padding-top: 15px">{{$post->title}}</h2>
                            <ul class="post-info-dark mb-30">
                                <li>
                                        អត្តបទ៖ {{$post->user->name}}</a>
                                </li>
                                <li>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;{{$post->created_at}}
                                </li>
                                <li>
                                        <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;{{$post->visitor}}
                                </li>
                            </ul>

                            <div id="content">

                            </div>

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
    @endforeach
    <!-- News Details Page Area End Here -->
<script>
    var div = document.createElement('div');
    var content = document.getElementById('hidecontent').innerText;
    div.className = 'row';
    div.innerHTML =content;
    document.getElementById('content').appendChild(div);
</script>
@stop
