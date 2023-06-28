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
              <h4>Add Rooms</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form id="product_form" action="{{ route('Rooms.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <table class="table" id="table">
                      <tr>
                          <th>Name</th>
                          <th style="width:5%">Action</th>
                      </tr>
                      <tr>
                          <td>
                              <input type="text" name="inputs[0][Name]" placeholder="Enter Rooms Name" class="form-control">
                          </td>
                      </tr>
                  </table>
               <button type="submit" class="btn btn-primary bi bi-save">Save</button>
               <button type="button" name="add" id="add" class="btn btn-success bi bi-plus-circle">Add More</button>
               <a href="{{ route('Rooms.index') }}" class="btn btn-warning bi bi-box-arrow-left">Return</a>
              </form>
              </div>
              <div class="statistic-details mt-sm-4">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script>
    var i = 0;
    $('#add').click(function(){
        i++;
        $('#table').append(
            '<tr>\
                <td>\
                    <input type="text" name="inputs['+i+'][Name]" placeholder="Enter Rooms Name" class="form-control">\
                </td>\
                <td>\
                    <button type="button" style="font-size:20px" class="px-3 btn ion-trash-b remove-table-row"></button>\
                </td>\
            </tr>'
        );
    });


    $(document).on('click','.remove-table-row',function(){
        $(this).parents('tr').remove();
    });
</script>
@endsection
