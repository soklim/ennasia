<?php
/**
 * Created by PhpStorm.
 * User: AMIS
 * Date: 23-Jun-19
 * Time: 3:20 PM
 */
?>
@extends('layouts.app', ['activePage' => 'typography', 'titlePage' => __('Content')])

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
          <form method="post" action="{{ route('content.update',$content->id) }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit Content') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                    <a href="{{ route('content.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" maxlength="290" name="title" type="text" placeholder="{{ __('Title') }}" value="{{ old('title', $content->title) }}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select class="form-control" name="category_id" required>
                        <option value="{{ old('category', $content->category_id) }}">{{ old('category', $content->category->name) }}</option>
                        @foreach($cat as $cat)
                          <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                      </select>
                      {{--<input class="form-control" name="email" id="category" type="text" placeholder="{{ __('Category') }}" value="{{ old('category') }}" required />--}}
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Feature Image') }}</label>
                  <input type="file" accept="image/*" name="photo_id"​​ id="photo_id">
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <textarea class="form-control" id="summary-ckeditor" name="content" >{{ old('content', $content->content) }}</textarea>
                    </div>
                  </div>
                </div>
                <div class="col-sm-7">
                  <div class="form-group">
                    <div class="card-footer ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary">{{ __('Publish') }}</button>
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

  <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
  <script>
    // CKEDITOR.replace( 'summary-ckeditor' );
    window.onload = function() {
      CKEDITOR.replace( 'summary-ckeditor', {
        filebrowserUploadUrl: '{{ route('upload',['_token' => csrf_token() ]) }}'
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
