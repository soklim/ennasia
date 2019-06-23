@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Category List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Category List</h4>
            <p class="card-category"> Here is category list of content</p>
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table" id="dataTable">
                <thead class=" text-primary">
                 <tr>
                   <th>ID</th>
                   <th>Name</th>
                   <th>Color</th>
                   <th>Crate Date</th>
                   <th>Action</th>
                 </tr>
                </thead>
                <tbody>
                @foreach($cat as $cat)
                  <tr>
                    <td scope="row">{{$cat->id}}</td>
                    <td>{{$cat->name}}</td>
                    <td>{{$cat->color}}</td>
                    <td>{{$cat->created_at}}</td>
                    <td>
                      <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('category.edit', $cat->id) }}" data-original-title="" title="">
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