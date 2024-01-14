@extends('front.master')

@section('content')

<!-- About Start -->
<div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">About Us</h2>
                <h1 class="display-4 text-uppercase">Welcome To ECOCRAFT</h1>
            </div>
            <div class="row gx-5">
        <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('front/img/about1.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
            <div class="col-lg-6 pb-5">
                <h4 class="mb-4">What are we ?.</h4>
                <p class="mb-5">Ecocraft is a pioneering company committed to providing sustainable and eco-friendly products that align with the growing global movement towards environmental responsibility. Established with a vision to make a positive impact on the planet, Ecocraft has become a leading name in the industry, offering a diverse range of products designed to promote a greener and more sustainable lifestyle.</p>
                <div class="row g-5">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4" style="width: 90px; height: 90px;">
                            <i class="fas fa-heartbeat fa-2x text-white"></i> <!-- Assuming you have FontAwesome icons -->
                        </div>
                        <h4 class="text-uppercase">100% Healthy</h4>
                        <p class="mb-0">Choose Ecocraft for a healthier, more sustainable lifestyle.</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4" style="width: 90px; height: 90px;">
                            <i class="fas fa-award fa-2x text-white"></i> <!-- Assuming you have FontAwesome icons -->
                        </div>
                        <h4 class="text-uppercase">Award Winning</h4>
                        <p class="mb-0">Ecocraft is proud to have received prestigious awards for our commitment to sustainability, innovation, and excellence in the eco-friendly product industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->



    <!-- Facts Start -->
    <div class="container-fluid bg-img py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-star text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Our Experience</h6>
                            <h1 class="display-5 text-black mb-0" data-toggle="counter-up">2390</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">sells</h6>
                            <h1 class="display-5 text-black mb-0" data-toggle="counter-up">6754</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Up cycled</h6>
                            <h1 class="display-5 text-black mb-0" data-toggle="counter-up">3490</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary border-inner d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-mug-hot text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-primary text-uppercase">Happy Clients</h6>
                            <h1 class="display-5 text-black mb-0" data-toggle="counter-up">5509</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->
@endsection
