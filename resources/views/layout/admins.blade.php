<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Dashboard &mdash; Stisla</title>

    <link rel="stylesheet" href="{{ URL::asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/modules/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/modules/summernote/summernote-lite.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/modules/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item has-icon" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                  <i class="ion ion-log-out"></i>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                 </form>
              </a>
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla Lite</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="{{ URL::asset('assets/img/avatar/avatar-1.jpeg') }}">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name">{{ Auth::user()->name }}</div>
              <div class="user-role">
                Administrator
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::path() === 'admin/dashboard' ? 'active' : '' }}">
              <a href="{{ url('admin/dashboard') }}"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>
            <li class="{{ request()->is('admin/Category*') ? 'active' : '' }}">
              <a href="{{ route('Category.index') }}"><i class="ion ion-funnel"></i><span>Category</span></a>
            </li>
            <li class="{{ request()->is('admin/Rooms*') ? 'active' : '' }}">
              <a href="{{ route('Rooms.index') }}"><i class="ion ion-home"></i><span>Rooms</span></a>
            </li>
            <li class="{{ request()->is('admin/AddRoom*') ? 'active' : '' }}">
              <a href="{{ route('AddRoom.index') }}"><i class="ion ion-ios-home-outline"></i><span>Room setting</span></a>
            </li>
            <li class="{{ request()->is('admin/Booking*') ? 'active' : '' }}">
              <a href="{{ route('Booking.index') }}"><i class="ion ion-android-calendar"></i><span>Booking</span></a>
            </li>
            <li class="{{ request()->is('admin/Staff*') ? 'active' : '' }}">
              <a href="{{ route('Staff.index') }}"><i class="ion ion-ios-people"></i><span>Staff</span></a>
            </li>
            <li class="{{ request()->is('admin/Maintenance*') ? 'active' : '' }}">
              <a href="{{ route('Maintenance.index') }}"><i class="ion ion-settings"></i><span>Maintenance</span></a>
            </li>
        </aside>
      </div>
    </div>
    <main>
      @yield('content')
    </main>
  <footer class="main-footer">
    <div class="footer-left">
      Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://multinity.com/">Multinity</a>
    </div>
    <div class="footer-right"></div>
  </footer>
  </div>



    <script src="{{ URL::asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/modules/popper.js') }}"></script>
    <script src="{{ URL::asset('assets/modules/tooltip.js') }}"></script>
    <script src="{{ URL::asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ URL::asset('assets/modules/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/sa-functions.js') }}"></script>

    <script src="{{ URL::asset('assets/modules/chart.min.js') }}"></script>
    <script src="{{ URL::asset('assets/modules/summernote/summernote-lite.js') }}"></script>

    <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        datasets: [{
        label: 'Statistics',
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: 'rgb(87,75,144)',
        borderColor: 'rgb(87,75,144)',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
        }]
    },
    options: {
        legend: {
        display: false
        },
        scales: {
        yAxes: [{
            ticks: {
            beginAtZero: true,
            stepSize: 150
            }
        }],
        xAxes: [{
            gridLines: {
            display: false
            }
        }]
        },
    }
    });
    </script>
    <script src="{{ URL::asset('assets/js/scripts.js') }}"></script>
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>
</body>
</html>
