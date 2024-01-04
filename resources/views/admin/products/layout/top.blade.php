<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ECOCRAFT</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <!-- Font Awesome (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Start -->
        <nav class="col-lg-3 col-md-4 col-sm-12 bg-dark text-white py-3">
            <div class="text-center">
                <h1 class="m-0 text-uppercase"><i class="fa fa-leaf fs-1 text-success me-3"></i>ECOCRAFT</h1>
                <h1 class="m-0 text-uppercase d-none d-lg-block">Dashboard</h1>
            </div>

            <!-- Navigation Links -->
            <ul class="nav flex-column">
                <!-- Logout Link -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- Sidebar End -->

        <!-- Page Content Start -->
        <div class="col-lg-9 col-md-8 col-sm-12">
            <!-- Your content goes here -->
            <div class="container">
                <!-- Add your content here -->
            </div>
        </div>
        <!-- Page Content End -->
    </div>
</div>

<!-- Bootstrap JS (Optional) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.1/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>

</body>
</html>
