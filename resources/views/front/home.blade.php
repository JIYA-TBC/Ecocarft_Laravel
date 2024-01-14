@extends('front.master')
@section('content')

<!-- @if(session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif -->


<!-- Hero Start -->
<div class="container-fluid py-5 mb-5 hero-header" style="background-image: url('front/img/home2.jpg'); background-size: cover; background-position: center;">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="font-secondary text-white mb-4 ">Crafting a Greener Tomorrow</h1>
                <h1 class="display-1 text-uppercase text-white mb-4">EcoCraft Haven</h1>
            </div>
        </div>
    </div>
</div>

    <!-- Hero End -->

    <!-- About Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
            <h2 class="text-primary font-secondary">About Us</h2>
            <h1 class="display-4 text-uppercase">Welcome To ECOCRAFT</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal">
                    Watch Video
                </button>
                <!-- Video Modal Starts -->
                <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content rounded-0">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- 16:9 aspect ratio -->
                                <div class="ratio ratio-16x9" >
                                    <!-- Replace the 'src' attribute with the actual URL of your video -->
                                    <iframe class="embed-responsive-item" src="{{ asset('front/img/video.mp4') }}" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Video Modal End -->
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

<!-- Products Start -->
<!-- <div class="container-fluid about py-5">
    <div class="container">
        <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
            <h2 class="text-primary font-secondary">Products & Pricing</h2>
            <h1 class="display-4 text-uppercase">Explore Our Products</h1>
        </div>
        <div class="tab-class text-center">
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div class="d-flex h-100" style="width: 80%;"> 
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="{{ asset('front/img/img-1.jpg') }}" alt="happy" style="width: 150px; height: 85px;">
                                    <h4 class="bg-dark text-primary p-2 m-0">£5</h4>
                                </div>
                                <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4" style="width: calc(100% - 150px);">
                                    <h5 class="text-uppercase">ty</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Products End -->

    <!-- Service Start -->
    <div class="container-fluid service position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3">SKINCARE</h4>
                        <p>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo amet tempor amet kasd lorem dolor ipsum</p>
                        <a class="text-uppercase text-dark" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3">ETHICAL FASHION</h4>
                        <p>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo amet tempor amet kasd lorem dolor ipsum</p>
                        <a class="text-uppercase text-dark" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3">SUSTAINABLE ART</h4>
                        <p>Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo amet tempor amet kasd lorem dolor ipsum</p>
                        <a class="text-uppercase text-dark" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 text-center">
                    <h1 class="text-uppercase text-light mb-4">30% Discount For This Winter</h1>
                    <a href="" class="btn btn-primary border-inner py-3 px-5">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->


    <!-- Best Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">ECOCRAFTS</h2>
                <h1 class="display-4 text-uppercase">Our Best Items</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="team-item text-center">
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary mb-3">Mithila Arts</h4>
                            <div class="position-relative overflow-hidden">
                                <img class="rounded" src="front/img/img-1.jpg" alt="Art" style="width: 400px; height: 250px;">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item text-center">
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary mb-3">Tea</h4>
                            <div class="position-relative overflow-hidden">
                            <img class="rounded" src="front/img/img-3.jpg" alt="Tea" style="width: 400px; height: 250px;">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item text-center">
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary mb-3">Skincare</h4>
                            <div class="position-relative overflow-hidden">
                            <img class="rounded" src="front/img/img-2.jpg" alt="SKIN CARE" style="width: 400px; height: 250px;">

                                <!-- <img class="img-fluid w-100 h-200 rounded" src="{{ asset('front/img/img-2.jpg') }}" alt="Skincare Image"> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Best End -->


    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title position-relative text-center mx-auto mb-4 pb-3" style="max-width: 600px;">
                        <h2 class="text-primary font-secondary">Special Kombo Pack</h2>
                        <h1 class="display-4 text-uppercase text-white">Zero-Waste Lifestyle Products</h1>
                    </div>
                    <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo lorem. Elitr ut dolores magna sit. Sea dolore sed et.</p>
                    <a href="" class="btn btn-primary border-inner py-3 px-5 me-3">Shop Now</a>
                    <a href="" class="btn btn-dark border-inner py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
  
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Offer End -->
@endsection
