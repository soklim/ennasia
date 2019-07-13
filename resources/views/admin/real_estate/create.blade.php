<?php
/**
 * Created by PhpStorm.
 * User: AMIS
 * Date: 23-Jun-19
 * Time: 3:20 PM
 */
?>
@extends('layouts.app', ['activePage' => 'real_estate', 'titlePage' => __('Real Estate')])

@section('content')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            Upload Validation Error<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="alert alert-danger" role="alert" style="display: none" id="SizeFile">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Warning</strong> You can not upload file size more than 3MB!!!
                        </div>
                    {{--@if ($message = Session::get('success'))--}}
                        {{--<div class="alert alert-success alert-block">--}}
                            {{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
                            {{--<strong>{{ $message }}</strong>--}}
                        {{--</div>--}}
                        {{--<img src="/images/{{ Session::get('path') }}" width="300" />--}}
                    {{--@endif--}}
                    <form method="post" action="{{ route('real_estate.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('post')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add new') }}</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('real_estate.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="title" type="text" placeholder="{{ __('Title') }}" required="true" aria-required="true"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Type') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <select class="form-control" name="type" required>
                                                <option value="">----select----</option>
                                                @foreach($type as $type)
                                                    <option value="{{$type->id}}">{{$type->type}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <select class="form-control" name="category" required>
                                                <option value="">----select----</option>
                                                @foreach($cat as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->category}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Price') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="price" type="number" placeholder="{{ __('Price') }}" required="true" aria-required="true"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Province') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <select class="form-control" name="province" required>
                                                <option value="">----select----</option>
                                                @foreach($province as $province)
                                                    <option value="{{$province->id}}">{{$province->province}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Detail address') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="location" type="text" placeholder="{{ __('Detail Address') }}" required="true" aria-required="true"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="phone" type="text" placeholder="{{ __('Phone') }}" required="true" aria-required="true"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="email" type="text" placeholder="{{ __('Email') }}"  aria-required="true"/>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="row">--}}
                                    {{--<label class="col-sm-2 col-form-label">{{ __('Description') }}</label>--}}
                                    {{--<div class="col-sm-7">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<textarea class="form-control" name="description" type="text" placeholder="{{ __('Description') }}" required="true" aria-required="true"/></textarea>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Status') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <select class="form-control" name="status" required>
                                                <option value="">----select----</option>
                                                @foreach($status as $status)
                                                    <option value="{{$status->id}}">{{$status->status}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Main image') }}</label>
                                    <input type="file" accept="image/*" name="photo_id"​​ id="photo_id">
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Thumbnail image') }}</label>
                                    <div class="col-sm-7">
                                        <div class="input-group control-group increment" >
                                            <input type="file" name="filename[]" class="form-control">

                                        </div>
                                        <div class="input-group control-group increment" >
                                            <input type="file" name="filename[]" class="form-control">

                                        </div>
                                        <div class="input-group control-group increment" >
                                            <input type="file" name="filename[]" class="form-control">

                                        </div>
                                        <div class="input-group control-group increment" >
                                            <input type="file" name="filename[]" class="form-control">

                                        </div>
                                        {{--<div class="clone hide">--}}
                                            {{--<div class="control-group input-group" style="margin-top:10px">--}}
                                                {{--<input type="file" name="filename[]" class="form-control">--}}
                                                {{--<div class="input-group-btn">--}}
                                                    {{--<button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    </div>
                                </div>

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <div class="card-footer ml-auto mr-auto">
                                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                    </div>
                                    </div>
                                </div>

                            </div>

                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--<script type="text/javascript">--}}

        {{--$(document).ready(function() {--}}

            {{--$(".btn-success").click(function(){--}}
                {{--var html = $(".clone").html();--}}
                {{--$(".increment").after(html);--}}
            {{--});--}}

            {{--$("body").on("click",".btn-danger",function(){--}}
                {{--$(this).parents(".control-group").remove();--}}
            {{--});--}}

        {{--});--}}

    {{--</script>--}}

    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        // CKEDITOR.replace( 'summary-ckeditor' );
        window.onload = function() {
            CKEDITOR.replace( 'summary-ckeditor',{
                toolbar :
                    [
                        { name: 'basicstyles', items : [ 'Bold','Italic' ] },
                        { name: 'paragraph', items : [ 'NumberedList','BulletedList' ] },
                        { name: 'tools', items : [ 'Maximize','-','About' ] }
                    ]
            });
        };
    </script>

    <script>
        var uploadField = document.getElementById("photo_id");

        uploadField.onchange = function() {
            //Allow upload file less than 3MB
            if(this.files[0].size > 30000000){
                document.getElementById("SizeFile").style.display = "block";
                // alert("File is too big! You can not upload file more than 3MB");
                this.value = "";
            };
        };
    </script>

@endsection
