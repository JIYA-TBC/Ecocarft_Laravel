<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ECOCRAFT</title>

    <!-- @extends('front.layout.top') -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .row {
            margin-top: 5rem;
            padding: 15px;
            /* background-image: url('/front/img/bg.jpg'); */
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
                <a href="/" class="nav-item nav-link active">Home</a>
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
    <!-- Navigation Bar ends -->

    <div class="container-fluid">
        <div class="row">
            <!-- Main Content Start -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content">
                <div class="row" style="margin-top: 5rem;">
                    <!-- <div class="col-lg-4 margin-tb"> -->

                    <!-- </div> -->
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>All Users</h2>
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
                        <th>Email</th>
                        <th>User Type</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($users as $key => $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <!-- <td>{{ $value->utype }}</td> -->
                        <td>
                            <form action="{{ route('users.update', ['id' => $value->id]) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <select name="utype" class="form-control">
                                        <option value="0" @if($value->utype == '0') selected @endif>0</option>
                                        <option value="1" @if($value->utype == '1') selected @endif>1</option>
                                        <option value="2" @if($value->utype == '2') selected @endif>2</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('users.destroy', $value->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $users->links() !!}
            </main>
            <!-- Main Content End -->
        </div>
    </div>
</body>

</html>