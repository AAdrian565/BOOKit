@extends('layout.app')

@section('content')
<div class="container mt-5 border border-primary rounded-4 p-5" style="width: 50rem;">
    <h1 class="text-center">Room Booking</h1>
    <form>
        <div class="mb-3 row">
            <label class="col-4" for="date">Select a date:</label>
            <input class="col-8 rounded-5" type="date" class="form-control" id="date" name="date">
        </div>

        <div class="mb-3 row">
            <label class="col-4" for="start-time">Select a start time:</label>
            <input class="col-8 rounded-5" type="time" class="form-control" id="start-time" name="start-time">
        </div>

        <div class="mb-3 row">
            <label class="col-4" for="end-time">Select an end time:</label>
            <input class="col-8 rounded-5" type="time" class="form-control" id="end-time" name="end-time">
        </div>

        <div class="mb-3 row">
            <label class="col-4" for="name" class="form-label">Full Name</label>
            <input class="col-8 rounded-5" type="text" class="form-control" id="name" required>
        </div>
        <div class="mb-3 row">
            <label class="col-4" for="email" class="form-label">Email address</label>
            <input class="col-8 rounded-5" type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3 row">
            <label class="col-4" for="roomType" class="form-label">Room capacity</label>
            <select class="col-8 rounded-5" id="roomType" required>
                <option selected disabled value="">Choose...</option>
                <option>4</option>
                <option>6</option>
                <option>8</option>
            </select>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Book Now</button>
        </div>
    </form>
</div>
@endsection
