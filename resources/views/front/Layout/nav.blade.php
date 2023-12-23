<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-leaf fs-1 text-primary me-3"></i>ECOCRAFT</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About Us</a>
                <a href="menu.html" class="nav-item nav-link">Menu & Pricing</a>
                <a href="team.html" class="nav-item nav-link">Master Chefs</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="service.html" class="dropdown-item">Our Service</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    </div>
                </div>

                
                @if(Route::has('login'))
                                @auth
                                    @if(Auth::user()->role===1)
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">My Account ({{Auth::user()->name}})</a>
                                        <div class="dropdown-menu rounded-0 m-0">
                                            <a href="{{route('products.index')}}" class="dropdown-item">Dashboard</a>
                                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                    @else
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">My Account ({{Auth::user()->name}})</a>
                                        <div class="dropdown-menu rounded-0 m-0">
                                            <a href="#" class="dropdown-item">User Profile</a>
					                        <a class="dropdown-item" href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                    @endif
                                    @else
                                    <div class="navbar-nav ml-auto py-0">
                                        <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
                                        <a href="{{route('register')}}" class="nav-item nav-link">Register</a>
                                    </div>
                                    @endif
                             @endif
            </div>
        </div>
    </nav>
    <!-- Navbar End -->