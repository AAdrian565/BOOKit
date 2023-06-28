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
              </div>
              <h4>Edit Category</h4>
            </div>
            <div class="card-body">
              @if($errors->any())
                <div class="alert alert-danger">
                    Please fill all the required field:
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
              <form action="{{ route('Staff.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label class="mb-2">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" name='name' value="{{ $data->Name }}">
                </div>
                <div class="mb-3">
                    <label class="mb-2">Email</label>
                    <input type="text" class="form-control" placeholder="Enter Email" name='email' value="{{ $data->Email }}">
                </div>
                <div class="mb-3">
                    <label class="mb-2">Phone</label>
                    <input type="text" class="form-control" placeholder="Enter Phone" name='phone' value="{{ $data->Phone }}">
                </div>
                  <button type="submit" class="btn btn-primary bi bi-save"> Update</button>
                  <a href="{{ route('Staff.index') }}" class="btn btn-warning bi bi-box-arrow-left"> Return</a>
               </form>
              <div class="statistic-details mt-sm-4"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
