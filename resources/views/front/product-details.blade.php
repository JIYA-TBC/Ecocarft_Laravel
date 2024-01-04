@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images') }}/{{ $product->image }}" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase text-center">{{ $product->name }}</h5>
                        <p class="card-text text-center">£{{ $product->price }}</p>
                        <p class="text-center">
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
