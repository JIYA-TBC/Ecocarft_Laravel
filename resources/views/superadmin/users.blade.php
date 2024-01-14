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
        <a href="index.html" class="navbar-brand">
            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-leaf fs-1 text-success me-3"></i>ECOCRAFT</h1>
        </a>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="{{route('superadmin.users')}}"class="nav-item nav-link">Manage</a>
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">

 <!-- Main Content Start -->
 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content">
    <div class="row" style="margin-top: 5rem;">
        <!-- <div class="col-lg-4 margin-tb"> -->
        <form type="get" action="{{ url('/admin/productsearch') }}">
            <div class="form-group">
                <input type="search" name="query" class="form-control" placeholder="Search Users...">
            </div>
            <button class="btn btn-primary">Search</button>
        </form>
        <!-- </div> -->
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All Products</h2>
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