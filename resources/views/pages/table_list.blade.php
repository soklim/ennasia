@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

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
                  <th>
                    ID
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Color
                  </th>
                  <th>
                    Create Date
                  </th>
                </thead>
                <tbody>
                  <tr>

                  </tr>
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