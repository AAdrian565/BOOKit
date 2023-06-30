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
              <h4>Add Room</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('AddRoom.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="mb-3 custom-select">
                        <select class="form-select custom-select" aria-label="Default select example" name="Rooms">
                            <option selected>Select the Room...</option>
                            @foreach ($data as $index => $item)
                                <option class="dropdown-item" value="{{ $item->id }}">{{ $item->Name }}</option>
                            @endforeach
                        </select>
                    </div>
                      <div class="mb-3">
                        <label class="mb-2">Capacity</label>
                        <input type="number" class="form-control" placeholder="Enter Capacity" name='capacity'>
                      </div>
                      <div class="mb-3">
                        <label class="mb-2">Description</label>
                        <textarea class="form-control" rows="5" name="description"></textarea>
                      </div>
                      <div class="mb-3 font-weight-bold">
                        <label class="mb-2">Date</label>
                        <input type="date" class=" form-control" placeholder="Enter Date" name="date">
                      </div>
                      <div class="mb-3 font-weight-bold">
                        <label class="mb-2">Time Start</label>
                        <input type="time" class="form-control" placeholder="Enter time start" name="timeStart">
                      </div>
                      <div class="mb-3 font-weight-bold">
                        <label class="mb-2">Time End</label>
                        <input type="time" class="form-control" placeholder="Enter time end" name="timeEnd">
                      </div>
                      <button type="submit" class="btn btn-primary bi bi-save"> Submit</button>
                      <a href="{{ route('AddRoom.index') }}" class="btn btn-warning bi bi-box-arrow-left"> Return</a>
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
