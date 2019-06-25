@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Modify category')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('category.update', $cat->id) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit category') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('category.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', $cat->name) }}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Color') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('color') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" id="input-color" type="text" placeholder="{{ __('Color') }}" value="{{ old('color', $cat->color) }}" required />
                    </div>
                  </div>
                </div>
                {{--<div class="row">--}}
                  {{--<label class="col-sm-2 col-form-label">{{ __('Content') }}</label>--}}
                  {{--<div class="col-sm-7">--}}
                    {{--<div class="form-group{{ $errors->has('color') ? ' has-danger' : '' }}">--}}
                      {{--<textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>--}}
                    {{--</div>--}}
                  {{--</div>--}}
                {{--</div>--}}


              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection