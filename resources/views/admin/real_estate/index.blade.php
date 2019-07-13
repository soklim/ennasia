@extends('layouts.app', ['activePage' => 'real_estate', 'titlePage' => __('Real Estate')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Real Estate List</h4>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
                <a href="{{ route('real_estate.create') }}" class="btn btn-sm btn-primary">{{ __('Add new') }}</a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table" id="dataTables">
                <thead class=" text-primary">
                 <tr>
                   <th>ID</th>
                   <th>Title</th>
                   <th>Type</th>
                   <th>Category</th>
                   <th>Province</th>
                   <th>Phone</th>
                   <th>Status</th>
                   <th>Photo</th>
                   <th>Action</th>
                 </tr>
                </thead>
                <tbody>
                @foreach($estate as $estate)
                  <tr>
                    <td scope="row">{{$estate->id}}</td>
                    <td>{{$estate->title}}</td>
                    <td>{{$estate->RealType->type}}</td>
                    <td>{{$estate->RealCategory->category}}</td>
                    <td>{{$estate->Province->province}}</td>
                    <td>{{$estate->phone}}</td>
                    <td style="color: red"><b>{{$estate->Status->status}}</b></td>
                    <td><img height="50px;" src="{{$estate->photo?$estate->photo->file:'https://via.placeholder.com/400x400'}}" alt=""></td>

                    <td>
                      <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('real_estate.edit', $estate->id) }}" data-original-title="" title="">
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
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables').dataTable( {
            "aaSorting": []
        } );
    });
</script>
@endsection