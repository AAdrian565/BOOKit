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
              <form action="{{ route('Maintenance.update',[$data3->id, 'idRoom' => $data3->room_id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                  <div class="mb-3">
                      <label class="mb-2 font-weight-bold">Rooms</label>
                      <select class="form-select" aria-label="Default select example" name="Rooms">
                          <option selected>Select the Room...</option> 
                          @foreach ($data as $index => $item)
                              <option value="{{ $item->id }}">Room {{ $item->roomStatus->Name }}: {{ $item->TimeStart }} - {{ $item->TimeEnd }}</option>
                          @endforeach 
                      </select>
                  </div>
                  <div class="mb-3">
                    <label class="mb-2 font-weight-bold">Staff</label>
                    <select class="form-select" aria-label="Default select example" name="Staff_id">
                        <option selected>Select the Staff...</option> 
                        @foreach ($data2 as $index => $item)
                            <option value="{{ $item->id }}">{{ $item->Name }}</option>
                        @endforeach
                     </select>
                  </div>
                  <div class="mb-3">
                    <label class="mb-2">Description</label>
                    <textarea class="form-control" rows="5" name="Description"></textarea>
                  </div>
                    <button type="submit" class="btn btn-primary bi bi-save"> Submit</button>
                    <a href="{{ route('Maintenance.index') }}" class="btn btn-warning bi bi-box-arrow-left"> Return</a>
               </form>
              <div class="statistic-details mt-sm-4"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
