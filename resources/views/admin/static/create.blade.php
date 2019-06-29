<?php
/**
 * Created by PhpStorm.
 * User: AMIS
 * Date: 23-Jun-19
 * Time: 3:20 PM
 */
?>
@extends('layouts.app', ['activePage' => 'icons', 'titlePage' => __('Content')])

@section('content')
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
                    <form method="post" action="{{ route('sys_static.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('post')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add item') }}</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('sys_static.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Item Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="static_name" type="text" placeholder="{{ __('Item Name') }}" required="true" aria-required="true"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Value') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="value_en" type="text" placeholder="{{ __('Value') }}" required="true" aria-required="true"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                                    <input type="file" accept="image/*" name="photo_id"​​ id="photo_id">
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
