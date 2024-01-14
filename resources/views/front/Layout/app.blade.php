<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content goes here -->
</head>
<body>

    @if(session('status'))
        <div class="alert alert-info">
            {{ session('status') }}
        </div>
    @endif

    <!-- Your page content goes here -->

</body>
</html>
