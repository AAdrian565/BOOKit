@extends('layout.admins')

@section('title','home')

@section('content')

<div class="main-content">
    <section class="section">

        <h1 class="section-header">
            <div>Dashboard</div>
        </h1>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Category</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('admin/Category') }}" class="btn btn-primary">View Category</a>
                        <a href="{{ url('admin/Category/create') }}" class="btn btn-primary">Add Category</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Rooms</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('admin/Rooms') }}" class="btn btn-lg btn-primary">View Rooms</a>
                        <a href="{{ url('admin/Rooms/create') }}" class="btn btn-lg btn-primary">Add Rooms</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Room Settings</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('admin/AddRoom') }}" class="btn btn-primary">View Rooms settings</a>
                        <a href="{{ url('admin/AddRoom/create') }}" class="btn btn-primary">Add Rooms settings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Staff</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('admin/Staff') }}" class="btn btn-primary">View Staff</a>
                        <a href="{{ url('admin/Staff/create') }}" class="btn btn-primary">Add Staff</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Maintenance</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('admin/Maintenance') }}" class="btn btn-lg btn-primary">View Maintenance</a>
                        <a href="{{ url('admin/Maintenance/create') }}" class="btn btn-lg btn-primary">Add Maintenance</a>
                    </div>
                </div>
            </div>
        </div><div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Booking</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('admin/Booking') }}" class="btn btn-lg btn-primary">View Booking</a>
                        <a href="{{ url('admin/Booking/create') }}" class="btn btn-lg btn-primary">Add Booking</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
