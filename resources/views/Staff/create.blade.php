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
              <h4>Add Staff</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('Staff.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                        <label class="mb-2">Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name='name'>
                    </div>
                    <div class="mb-3 font-weight-bold">
                      <label class="mb-2">Email</label>
                      <input type="text" class=" form-control" placeholder="Enter Email" name="email">
                    </div>
                    <div class="mb-3 font-weight-bold">
                      <label class="mb-2">Phone</label>
                      <input type="text" class="form-control" placeholder="Enter Phone" name="phone">
                    </div>
                    <button type="submit" class="btn btn-primary bi bi-save"> Submit</button>
                    <a href="{{ route('Staff.index') }}" class="btn btn-warning bi bi-box-arrow-left"> Return</a>
               </form>
              <div class="statistic-details mt-sm-4">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
