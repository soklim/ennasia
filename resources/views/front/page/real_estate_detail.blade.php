<?php
/**
 * Created by PhpStorm.
 * User: SOKLIM
 * Date: 7/13/2019
 * Time: 9:04 AM
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
            <div class="row">
                <div class="col-lg-12 col-md-12 mb-30" >
                    <div class="news-details-layout1">
                        @foreach($real as $real)
                            <div id="hidecontent" style="display: none">
                                {{$real->description}}
                            </div>
                        <div class="container">
                            <div class="card">
                                <div class="container-fliud">
                                    <div class="wrapper row">
                                        <div class="preview col-md-6">
                                            <div class="preview-pic tab-content">

                                                <div class="tab-pane active" id="pic-0"><img src="{{$real->photo?$real->photo->file:'https://via.placeholder.com/445x280'}}" alt="real estate" class="img-fluid width-100" style="height: 280px;"></div>
                                                @foreach($thumbnail as $thumb)
                                                <div class="tab-pane" id="pic-{{$thumb->id}}"><img src="{{$thumb->file?$thumb->file:'https://via.placeholder.com/445x280'}}" alt="real estate" class="img-fluid width-100" style="height: 280px;"></div>
                                                @endforeach
                                            </div>
                                            <ul class="preview-thumbnail nav nav-tabs">
                                                <li class="active"><a data-target="#pic-0" data-toggle="tab"><img src="{{$real->photo?$real->photo->file:'https://via.placeholder.com/80x50'}}" alt="real estate" class="img-fluid width-100" style="height: 50px;"></a></li>
                                                @foreach($thumbnail as $thumb)
                                                    <li><a data-target="#pic-{{$thumb->id}}" data-toggle="tab"><img src="{{$thumb->file?$thumb->file:'https://via.placeholder.com/80x50'}}" alt="real estate" class="img-fluid width-100" style="height: 50px;"></a></li>
                                                @endforeach
                                            </ul>

                                        </div>
                                        <div class="details col-md-6">
                                            <h3 class="product-title">{{$real->title}}</h3>
                                            <div class="rating">
                                                <span class="review-no"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;{{$real->visitor}}</span>
                                            </div>

                                            <h4 class="price">តម្លៃ: <span><strong>{{$real->price}}$</strong></span></h4>
                                            <h4 class=""><strong>{{$real->Province->province}}</strong></h4>
                                            <h4 class=""><strong>ទីតាំង:</strong> <span>{{$real->location}}</span></h4>

                                            <h4 class="price">លេខទូរស័ព្ទ: <span>{{$real->phone}}</span></h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="container">
                                <div class="desc">
                                    <div class="container-fliud">
                                        <div class="wrapper row">
                                            <div class="row" id="content">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        var div = document.createElement('div');
        var content = document.getElementById('hidecontent').innerText;
        div.className = 'row';
        div.innerHTML =content;
        document.getElementById('content').appendChild(div);
    </script>
@stop


