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
                  <a href="{{ route('Booking.create') }}" class="btn active ion-plus-circled"> ADD</a>
                </div>
              </div>
              <h4>Room</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <tr>
                    <th>#</th>
                    <th>Rooms</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Time Start</th>
                    <th>Time End</th>
                    <th style="width:17%">Action</th>
                  </tr>
                  @foreach ($data as $index => $item )
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->roomSettings->Room_id }}</td>
                    <td>{{ $item->Name }}</td>
                    <td>{{ $item->Email }}</td>
                    <td>{{ $item->Phone }}</td>
                    <td>{{ $item->roomSettings->Date }}</td>
                    <td>{{ $item->roomSettings->TimeStart }}</td>
                    <td>{{ $item->roomSettings->TimeEnd }}</td>
                    <td>
                      <form action="{{ route('Booking.destroy',[$item->id ,'idRoom' => $item->room_id]) }}" method="post" classs="d-inline" onsubmit="return confirm('Are you sure want to delete?')">
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
