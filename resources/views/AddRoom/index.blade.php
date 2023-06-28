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
                  <a href="{{ route('AddRoom.create') }}" class="btn active ion-plus-circled"> ADD</a>
                </div>
              </div>
              <h4>Room</h4>
            </div>
            <div class="card-body">
              <form action="" method="get">
                @csrf
                <h5>Sort By Room:</h5>
                <div class="dropdown d-inline ">
                  <button class="mb-2 btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-bookmark"></i> Rooms
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a href="{{ route('AddRoom.index') }}" class="dropdown-item">ALL</a>
                      @foreach ($data2 as $index =>$item)
                      <a href="{{ route('AddRoom.index',['RoomNumber' => $item->id]) }}" class="dropdown-item">{{ $item->Name }}</a>              
                      @endforeach
                  </div>
                </div>
              </form>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <tr>
                    <th>#</th>
                    <th>Rooms</th>
                    <th>Capacity</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>Start End</th>
                    <th>Status</th>
                    <th style="width:17%">Action</th>
                  </tr>
                  @foreach ($data as $index => $item )
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->roomStatus->Name }}</td>
                    <td>{{ $item->Capacity }}</td>
                    <td>{{ $item->Description }}</td>
                    <td>{{ $item->Date }}</td>
                    <td>{{ $item->TimeStart }}</td>
                    <td>{{ $item->TimeEnd }}</td>
                    @if($item->category->id == 1)
                      <td><div class="badge badge-success">{{ $item->category->name}}</div></td>
                    @elseif ($item->category->id == 2){
                      <td><div class="badge badge-danger">{{ $item->category->name}}</div></td>                   
                    @else
                      <td><div class="badge badge-secondary">{{ $item->category->name}}</div></td>                   
                    @endif
                    {{-- <td><div class="badge badge-success">{{ $item->category->name}}</div></td> --}}
                    <td><a href="{{ route('AddRoom.edit',$item->id) }}" class="btn btn-outline-warning ion-edit mb-2">Edit</a>
                      <form action="{{ route('AddRoom.destroy',$item->id) }}" method="post" classs="d-inline" onsubmit="return confirm('Are you sure want to delete?')">
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
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <form method="post" class="needs-validation" novalidate="">
            <div class="card">
              <div class="card-header">
                <h4>Quick Draft</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" required>
                  <div class="invalid-feedback">
                    Please fill in the title
                  </div>
                </div>
                <div class="form-group">
                  <label>Content</label>
                  <textarea class="summernote-simple"></textarea>
                </div>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary">Save Draft</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-7 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <div class="float-right">
                <a href="#" class="btn btn-primary">View All</a>
              </div>
              <h4>Latest Posts</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Author</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>                         
                    <tr>
                      <td>
                        Introduction Laravel 5
                        <div class="table-links">
                          in <a href="#">Web Development</a>
                          <div class="bullet"></div>
                          <a href="#">View</a>
                        </div>
                      </td>
                      <td>
                        <a href="#"><img src="../dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                      </td>
                      <td>
                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Laravel 5 Tutorial - Installation
                        <div class="table-links">
                          in <a href="#">Web Development</a>
                          <div class="bullet"></div>
                          <a href="#">View</a>
                        </div>
                      </td>
                      <td>
                        <a href="#"><img src="../dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                      </td>
                      <td>
                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Laravel 5 Tutorial - MVC
                        <div class="table-links">
                          in <a href="#">Web Development</a>
                          <div class="bullet"></div>
                          <a href="#">View</a>
                        </div>
                      </td>
                      <td>
                        <a href="#"><img src="../dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                      </td>
                      <td>
                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Laravel 5 Tutorial - Migration
                        <div class="table-links">
                          in <a href="#">Web Development</a>
                          <div class="bullet"></div>
                          <a href="#">View</a>
                        </div>
                      </td>
                      <td>
                        <a href="#"><img src="../dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                      </td>
                      <td>
                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
