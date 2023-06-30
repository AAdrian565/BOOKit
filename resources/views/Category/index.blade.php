@extends('layout.admins')

@section('title','home')

@section('content')
  <div class="main-content">
    <section class="section">
      <h1 class="section-header">
        <div>Dashboard</div>
      </h1>
      <div class="row">
        <div class="col-lg-12 col-md-15 col-15 col-sm-15">
          <div class="card">
            <div class="card-header">
              <div class="float-right">
                <div class="btn-group">
                  <a href="{{ route('Category.create') }}" class="btn active ion-plus-circled"> ADD</a>
                </div>
              </div>
              <h4>Category</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th style="width:17%">Action</th>
                  </tr>
                  @foreach ($data as $index => $item )
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td><a href="{{ route('Category.edit',$item->id) }}" class="btn btn-outline-warning ion-edit mb-2">Edit</a>
                      <form action="{{ route('Category.destroy',$item->id) }}" method="post" classs="d-inline" onsubmit="return confirm('Are you sure want to delete?')">
                          @method('delete')
                          @csrf
                          <button class="btn btn-outline-danger ion-trash-b" style="display:block">Delete</button>
                      </form></td>
                  </tr>
                  @endforeach
                </table>
              </div>
              <div class="statistic-details mt-sm-4">
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
@endsection
