<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 CRUD Application - laravelcode.com</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }

        .sclist {
            list-style: none;
        }

        .sclist li {
            line-height: 33px;
            border-bottom: 1px solid #ccc;
        }

        .slink i {
            font-size: 17px;
            margin-left: 13px;
        }
    </style>
</head>

<body>


    <br>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <br>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>