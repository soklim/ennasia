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

          <form method="post" action="{{ route('real_estate.update',$real->id) }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit') }}</h4>
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
                      <input class="form-control" name="title" type="text" value="{{ old('title', $real->title) }}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Type') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select class="form-control" name="type" required>
                        <option value="{{ old('type', $real->type) }}">{{ old('type', $real->RealType->type) }}</option>
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
                        <option value="{{ old('category', $real->category) }}">{{$real->RealCategory->category}}</option>
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
                      <input class="form-control" name="price" value="{{$real->price}}" type="number" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Province') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select class="form-control" name="province" required>
                        <option value="{{ old('province', $real->province) }}">{{$real->Province->province}}</option>
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
                      <input class="form-control" name="location" type="text" value="{{$real->location}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="phone" type="text" value="{{$real->phone}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="email" type="text" value="{{$real->email}}" placeholder="{{ __('Email') }}"  aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <textarea class="form-control" name="description" type="text" placeholder="{{ __('Description') }}" required="true" aria-required="true"/>{{$real->description}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Status') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select class="form-control" name="status" required>
                        <option value="{{$real->status}}">{{$real->Status->status}}</option>
                        @foreach($status as $status)
                          <option value="{{$status->id}}">{{$status->status}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                  <input type="file" accept="image/*" name="photo_id"​​ id="photo_id">
                </div>
                <div class="row">
                  <div class="col-sm-7">
                     <img height="100px;" src="{{$real->photo?$real->photo->file:'https://via.placeholder.com/400x400'}}" alt="">
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
