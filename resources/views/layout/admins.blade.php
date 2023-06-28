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
    <link rel="stylesheet" href="{{ URL::asset('assets/css/demo.css') }}">
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
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn" type="submit"><i class="ion ion-search"></i></button>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="ion ion-ios-bell-outline"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">View All</a>
                </div>
              </div>
              <div class="dropdown-list-content">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="{{ ('assets/img/avatar/avatar-1.jpeg') }}" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="../dist/img/avatar/avatar-2.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ujang Maman</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../dist/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../dist/img/avatar/avatar-4.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../dist/img/avatar/avatar-5.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
            </div>
          </li>
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

           

            <li class="menu-header">Components</li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Components</span></a>
              <ul class="menu-dropdown">
                <li><a href="general.html"><i class="ion ion-ios-circle-outline"></i> Basic</a></li>
                <li><a href="components.html"><i class="ion ion-ios-circle-outline"></i> Main Components</a></li>
                <li><a href="buttons.html"><i class="ion ion-ios-circle-outline"></i> Buttons</a></li>
                <li><a href="toastr.html"><i class="ion ion-ios-circle-outline"></i> Toastr</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Icons</span></a>
              <ul class="menu-dropdown">
                <li><a href="ion-icons.html"><i class="ion ion-ios-circle-outline"></i> Ion Icons</a></li>
                <li><a href="fontawesome.html"><i class="ion ion-ios-circle-outline"></i> Font Awesome</a></li>
                <li><a href="flag.html"><i class="ion ion-ios-circle-outline"></i> Flag</a></li>
              </ul>
            </li>
            <li>
              <a href="table.html"><i class="ion ion-clipboard"></i><span>Tables</span></a>
            </li>
            <li>
              <a href="chartjs.html"><i class="ion ion-stats-bars"></i><span>Chart.js</span></a>
            </li>
            <li>
              <a href="simple.html"><i class="ion ion-ios-location-outline"></i><span>Google Maps</span></a>
            </li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-copy-outline"></i><span>Examples</span></a>
              <ul class="menu-dropdown">
                <li><a href="login.html"><i class="ion ion-ios-circle-outline"></i> Login</a></li>
                <li><a href="register.html"><i class="ion ion-ios-circle-outline"></i> Register</a></li>
                <li><a href="forgot.html"><i class="ion ion-ios-circle-outline"></i> Forgot Password</a></li>
                <li><a href="reset.html"><i class="ion ion-ios-circle-outline"></i> Reset Password</a></li>
                <li><a href="404.html"><i class="ion ion-ios-circle-outline"></i> 404</a></li>
              </ul>
            </li>

            <li class="menu-header">More</li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-nutrition"></i> Click Me</a>
              <ul class="menu-dropdown">
                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Menu 1</a></li>
                <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Menu 2</a>
                  <ul class="menu-dropdown">
                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                    <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a>
                      <ul class="menu-dropdown">
                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a></li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 4</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="ion ion-heart"></i> Badges <div class="badge badge-primary">10</div></a>
            </li>
            <li>
              <a href="credits.html"><i class="ion ion-ios-information-outline"></i> Credits</a>
            </li>          </ul>
          <div class="p-3 mt-4 mb-4">
            <a href="http://stisla.multinity.com/" class="btn btn-danger btn-shadow btn-round has-icon has-icon-nofloat btn-block">
              <i class="ion ion-help-buoy"></i> <div>Go PRO!</div>
            </a>
          </div>
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
    <script src="{{ URL::asset('assets/js/demo.js') }}"></script>
</body>
</html>