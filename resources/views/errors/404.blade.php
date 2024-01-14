<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 Custom Error Page Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .error-container {
            text-align: center;
        }

        .error-title {
            font-size: 8em;
            color: #dc3545;
            margin-bottom: 10px;
        }

        .error-message {
            font-size: 2em;
            color: #6c757d;
            margin-bottom: 20px;
        }

        .cartoon-image {
            /* Add your cartoon image styles or placeholder here */
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .home-btn {
            /* Bootstrap button styles */
            display: inline-block;
            padding: 10px 20px;
            font-size: 1.5em;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .home-btn:hover {
            background-color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="error-container">
            <!-- Add your cartoon image here -->
            <img style="width: 400px; height: 400px;" src="{{ asset('front/img/404.png') }}" alt="Cartoon Image" class="cartoon-image">
            
            <div class="error-message">Oops! Something is wrong.</div>
            <a href="/" class="home-btn">Go back to Home</a>
        </div>
    </div>
</body>
</html>
