@extends('layouts.app', ['activePage' => 'icons', 'titlePage' => __('Control Item')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Item List</h4>
            <p class="card-category"> Here is item list</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
                <a href="{{ route('sys_static.create') }}" class="btn btn-sm btn-primary">{{ __('Add item') }}</a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table" id="dataTable">
                <thead class=" text-primary">
                <tr>
                  <th>#</th>
                  <th>Item name</th>
                  <th>Value</th>
                  <th>Photo</th>
                  <th>Create Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($static as $static)
                  <tr>
                    <td scope="row">{{$static->id}}</td>
                    <td>{{$static->static_name}}</td>
                    <td>{{$static->value_en}}</td>
                    <td><img height="50px;" src="{{$static->photo?$static->photo->file:'https://via.placeholder.com/400x400'}}" alt=""></td>
                    <td>{{$static->created_at}}</td>
                    <td class="td-actions text-right">
                      <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('sys_static.edit', $static->id) }}" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection