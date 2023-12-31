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
    <style>
        .sidebar {
            height: 100vh;
        }

        .sidebar-sticky {
            position: fixed;
            width: 220px;
            padding: 20px;
        }

        .main-content {
            margin-top: 5rem;
        }
    </style>
</head>
<body>

<!-- Container for Sidebar and Content -->
<div class="container-fluid">
    <div class="row">

        <!-- Sidebar Start -->
        <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
            <div class="sidebar-sticky">
                <!-- Brand -->
                <a href="index.html" class="text-white">
                    <h1 class="m-0 text-uppercase"><i class="fa fa-leaf fs-1 text-success me-3"></i>ECOCRAFT</h1>
                </a>
                <hr class="text-white">

                <!-- Dashboard Link -->
                <a href="dashboard.html" class="text-white">
                    <h5 class="m-0 text-uppercase">Dashboard</h5>
                </a>
                <hr class="text-white">

                <!-- Logout Link -->
                <a class="text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </nav>
        <!-- Sidebar End -->

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
