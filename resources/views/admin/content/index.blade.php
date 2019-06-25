@extends('layouts.app', ['activePage' => 'typography', 'titlePage' => __('Content')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Content List</h4>
            <p class="card-category"> Here is content list</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
                <a href="{{ route('content.create') }}" class="btn btn-sm btn-primary">{{ __('Add content') }}</a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table" id="dataTable">
                <thead class=" text-primary">
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Photo</th>
                  <th>Create Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($content as $content)
                  <tr>
                    <td scope="row">{{$content->id}}</td>
                    <td>{{$content->title}}</td>
                    <td>{{$content->category->name}}</td>
                    <td><img height="50px;" src="{{$content->photo?$content->photo->file:'https://via.placeholder.com/400x400'}}" alt=""></td>
                    <td>{{$content->created_at}}</td>
                    <td class="td-actions text-right">
                        <form action="{{ route('content.destroy', $content->id) }}" method="post">
                          @csrf
                          @method('delete')

                          <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('content.edit', $content->id) }}" data-original-title="" title="">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div>
                          </a>
                          <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this content?") }}') ? this.parentElement.submit() : ''">
                            <i class="material-icons">close</i>
                            <div class="ripple-container"></div>
                          </button>
                        </form>
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