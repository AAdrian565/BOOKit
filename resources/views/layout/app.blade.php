<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>

    <!-- css -->
    <link href="{{ URL::asset('css/style.css'); }} " rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.css'); }} " rel="stylesheet">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar bg-primary navbar-dark navbar-expand-lg shadow sticky-top p-0">
        <a href="/" class="py-4 navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class=" m-0 text-purple"><i class="fa-solid fa-radar me-3"></i>BOOKit</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-1">
                <a href="#" class="nav-item nav-link">About</a>
                <a href="/booking/#" class="nav-item nav-link">Book a room!</a>
                <a href="#" class="nav-item nav-link">Partner With Us</a>
                <a href="#" class="nav-item nav-link">Contact</a>
            </div>
            <a href="/login" class="btn btn-lg-course py-1-5 px-4-5 me-4 d-none d-lg-block ">Login</a>
        </div>

    </nav>
    <div class="content bg-secondary text-primary m-3">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
