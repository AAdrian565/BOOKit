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
    </section>
  </div>
@endsection
