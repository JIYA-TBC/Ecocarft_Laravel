@extends('front.master')

@section('content')
    <!-- Page Header End -->

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
    <div class="container mt-4">
    
    <form class="form-inline mb-4" action="{{ route('home.product') }}" method="GET">
        <div class="form-group">
            <label for="sort" class="mr-2">Sort by:</label>
            <select class="form-control" name="sort" id="sort" onchange="this.form.submit()">
                <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Low to High</option>
                <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>High to Low</option>
            </select>
        </div>
    </form>

    
   
    <form class="form-inline my-4" action="{{ route('front.search') }}" method="GET">
        <div class="input-group">
            <input type="text" class="form-control" name="query" placeholder="Search products" aria-label="Search" aria-describedby="search-btn">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="search-btn">Search</button>
            </div>
        
    </form>
</div>


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
</div>
@endsection
