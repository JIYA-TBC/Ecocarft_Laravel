@extends('front.master')

@section('content')

<!-- Add Bootstrap CSS -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->

<!-- Template Stylesheet -->
<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
    
<!-- Add Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style>
        nav svg {
            height: 20px;
        }
        nav .hidden {
            display: block !important;
        }
        .sclist{
            list-style:none;
        }
        .sclist li{
            line-height: 33px;
            border-bottom: 1px solid #ccc;
        }
        .slink i{
            font-size:17px;
            margin-left: 13px;
        }
    </style>

<!-- Page Header Start -->
@if(auth()->check()) <!-- Check if the user is authenticated -->

<!-- resources/views/products/index.blade.php -->


<div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Products & Pricing</h1>
                <a href="/">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Products & Pricing</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

<!-- Sorting form -->
<form class="form-inline mb-4 " action="{{ route('home.menu') }}" method="GET">
    <div class="form-group mx-sm-3">
        <label for="sort" class="mr-2">Sort by:</label>
        <select class="form-control" name="sort" id="sort" onchange="this.form.submit()">
            <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Low to High</option>
            <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>High to Low</option>
        </select>
    </div>
</form>

<div class="container mt-4">
    <div class="row">
        @foreach($products as $product)
            <!-- Display products -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div style="height: 360px; width: 300px">
                    <img style="height: 200px; width: 300px" class="card-img-top" src="{{ asset('images') }}/{{ $product->image }}" alt="{{ $product->name }}">
                    <div class="card-body" style="height: 160px;">
                        <h5 class="card-title text-uppercase text-center" style="font-size: 1.5rem; font-family: 'YourFont', sans-serif;">{{ $product->name }}</h5>
                        <p class="card-title text-uppercase text-center" style="font-size: 2rem; font-family: 'YourFont', sans-serif;">£{{ $product->price }}</p>
                        <p>
                            <a href="#" style="font-size: 1rem; font-family: 'YourFont', sans-serif;" class="btn text-uppercase float-left text-dark">Add to Cart</a>
                            <a href="{{ route('product.details', ['id' => $product->id]) }}" class="btn text-uppercase float-right text-dark">Details</a>

                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="pagination">
        {!! $products->links() !!}
    </div>
</div>


<!-- <div class="container">
    <div class="row">
        @foreach($products as $product)
            <div class="col-lg-4 col-md-6 mb-4">
                <div style="height: 360px; width: 300px">
                    <img style="height: 200px; width: 300px" class="card-img-top" src="{{ asset('images') }}/{{ $product->image }}" alt="{{ $product->name }}">
                    <div class="card-body" style="height: 160px;">
                        <h5 class="card-title text-uppercase text-center" style="font-size: 1.5rem; font-family: 'YourFont', sans-serif;">{{ $product->name }}</h5>
                        <p  class="card-title text-uppercase text-center" style="font-size: 2rem; font-family: 'YourFont', sans-serif;">£{{ $product->price }}</p>
                                <p>
                                <a href="#" style="font-size: 1rem; font-family: 'YourFont', sans-serif;" class="btn text-uppercase float-left text-dark">Add to Cart</a>
                                <a href="#" style="font-size: 1rem; font-family: 'YourFont', sans-serif;" class="btn text-uppercase float-right text-dark">Details</a>
                           
                            </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div> -->



    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title position-relative text-center mx-auto mb-4 pb-3" style="max-width: 600px;">
                        <h2 class="text-primary font-secondary">Special Kombo Pack</h2>
                        <h1 class="display-4 text-uppercase text-white"></h1>
                    </div>
                    <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo lorem. Elitr ut dolores magna sit. Sea dolore sed et.</p>
                    <a href="" class="btn btn-primary border-inner py-3 px-5 me-3">Shop Now</a>
                    <a href="" class="btn btn-dark border-inner py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    
    @else
    <!-- Redirect unauthenticated users to the login page with a message -->
    <script>
        var message = "Please log in to access the Products & Pricing page.";
        alert(message);
        window.location.href = "{{ route('login') }}";
    </script>
    @endif

@endsection
