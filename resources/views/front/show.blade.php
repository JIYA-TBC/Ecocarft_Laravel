
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $product->name }} - Product Details</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- Add additional styles as needed -->
        <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">

    <style>
        .datails {
            margin-top: 4rem; 
        }
    </style>
    
    </head>
    <body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-leaf fs-1 text-success me-3"></i>ECOCRAFT</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="{{route('home.about')}}" class="nav-item nav-link">About Us</a>
                <a href="{{route('home.product')}}" class="nav-item nav-link">Product & Pricing</a>
                <a href="{{route('home.contact')}}" class="nav-item nav-link">Contact Us</a>


                @if(Route::has('login'))
                                @auth 
                                    @if(Auth::user()->utype===1)
                                    <li class="menu-item menu-item-has-children parent" >
                                        <a title="My Account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="submenu curency" >
                                            <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                    @else
                                    <li class="menu-item menu-item-has-children parent" >
                                        <a title="My Account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="submenu curency" >
                                            <li class="menu-item" >
                                                <a title="Dashboard" href="{{route('user.profile')}}">User Profile</a>
                                            </li>
                                            <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                    @endif
                                    @else
                                   
                                        <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
                                        <a href="{{route('register')}}" class="nav-item nav-link">Register</a>
                                    
                                    @endif
                            @endif

            </div>
        </div>
    </nav>
    <!-- Navbar End --> 

<!-- Product details -->
        
       
        <div id="details" class="card mb-3 border-0">
        <div  class="row g-0">
        <div class="col-12 col-sm-6">
            <img src="{{ asset('images') }}/{{ $product->image }}" class="card-img-top img-fluid" alt="{{ $product->name }}" style="margin-top: 4rem; margin-left: 4rem; height: 400px; width: 500px;">
        </div>
        <div class="col-12 col-sm-6 " >
        <div class="card-body" style="margin-top: 4rem; margin-left: 4rem;">
    <h5 style="font-size: 3rem; font-family: 'YourFont', sans-serif;" class="card-title text-uppercase">{{ $product->name }}</h5>
    <p class="card-text">Price: ${{ $product->price }}</p>
    <p class="card-text"><small class="text-body-secondary">Description: {{ $product->description }}</small></p>

    <div class="card-text">
        <form action="{{ route('payment')}}" method="post">
            @csrf
            <input type="hidden" name="amount" id="amount{{ $product->price }}" value="{{ $product->price }}">
            <button type="submit" style="font-size: 1rem; font-family: 'YourFont', sans-serif; font-weight: normal;" class="btn text-uppercase text-dark">Buy Now</button>
        </form>
    </div>

    <p class="card-text">
        <div>
            Average Rating:
            @for($i = 1; $i <= 5; $i++)
                @if($i <= 3) <!-- Adjust the number of stars based on your desired average rating -->
                    ⭐️
                @else
                    ☆
                @endif
            @endfor
        </div>
    </p>

    <p class="card-text">
        <!-- Static stars for individual reviews -->
        <div>
            Rating:
            @for($i = 1; $i <= 5; $i++)
                @if($i <= 4) <!-- Adjust the number of stars for each review -->
                    ⭐️
                @else
                    ☆
                @endif
            @endfor
            </div>
    </p>
            <p class="card-text">
        <!-- Static stars for individual reviews -->
        <div>
            Comment: This is a sample review comment.
        </div>
    </p>
</div>

</div>


        </div>
        </div>
     <!-- Product details ends -->

        <!-- Footer Start -->
<div class="container-fluid bg-img text-secondary" style="margin-top: 90px"> 
        <div class="container">
            <div class="row gx-5"> 
                <div class="col-lg-4 col-md-6 mb-lg-n5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary border-inner p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-leaf fs-1 text-dark me-3"></i>ECOCRAFT</h1>
                        </a>
                        <p class="mt-3">"At Ecocraft, we go beyond simply offering eco-friendly products. We are on a mission to redefine well-being by providing sustainable, health-conscious alternatives that empower individuals to make environmentally responsible choices without compromising on quality or style."</p>
                    </div> 
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Get In Touch</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Thapathali,Kathmandu</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@ecocraft.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+0889889898</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-secondary mb-2" href="{{route('home.about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <!-- <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a> -->
                                <a class="text-secondary" href="{{route('home.contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Newsletter</h4>
                            <p>✨Stay Green and Informed with Ecocraft's Newsletter! 🌎</p>
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-primary py-4" style="background: #111111;">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-black border-bottom" href="#">ECOCRAFT</a>. All Rights Reserved.</p>
        </div>
    </div>
    <!-- Footer End -->
    </body>
    </html>
