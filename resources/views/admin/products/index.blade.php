<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ECOCRAFT</title>

    <!-- @extends('front.layout.top') -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .row {
            margin-top: 5rem;
            padding: 20px;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a href="/" class="navbar-brand">
            <h1 class="m-0 text-uppercase text-white">
                <img src="{{ asset('front/img/logo2.png') }}" alt="ECOCRAFT Logo" class="logo-img me-3"
                    style="height:50px;">
                ECOCRAFT
            </h1>
        </a>

        <!-- Toggle button for smaller screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0 d-md-flex">
                <!-- <a href="/" class="nav-item nav-link active">Home</a> -->
                <a href="{{route('superadmin.users')}}" class="nav-item nav-link">Manage</a>
                <!-- Add space between Manage and Logout -->
                <div class="mx-2"></div>
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>

        <!-- Bootstrap 5 requires Bootstrap JavaScript and Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    </nav>

    <div class="container-fluid">
        <div class="row">

            <!-- Main Content Start -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content">
                <div class="row" style="margin-top: 5rem;">
                    <div class="col-lg-4 margin-tb">
                        <form type="get" action="{{url('/admin/productsearch')}}">
                            <div class="form-group">
                                <input type="search" name="query" class="form-control" placeholder="Search Products...">
                            </div>
                            <button class="btn btn-primary">Search</button>
                        </form>
                    </div>
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>All Products</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{route('products.create')}}"> Create Products</a>
                        </div>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($products as $key => $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ \Str::limit($value->description, 100) }}</td>
                        <td>{{ $value->price }}</td>
                        <td>{{ $value->category }}</td>
                        <td>
                            <form action="{{ route('products.destroy',$value->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{route('products.edit',$value->id)}}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $products->links() !!}
            </main>
            <!-- Main Content End -->

        </div>
    </div>

</body>

</html>