
@extends('layout.master')
@section('content')
<!-- Hero Page Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.png" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses</h5>
                            <h1 class="display-3 text-white animated slideInDown">Unlock Your Learning Potential with Chinland Tech Academy.</h1>
                            <p class="fs-5 text-white mb-4 pb-2">"Unlock endless possibilities with our Online Learning platform. Learn, grow, and succeed from anywhere, at any time. Enroll today and take the first step towards a brighter future!"</p>
                            <a href="/curriculum" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="/register" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-3.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses</h5>
                            <h1 class="display-3 text-white animated slideInDown">Unlock Your Learning Potential with Chinland Tech Academy.</h1>
                            <p class="fs-5 text-white mb-4 pb-2">"Unlock endless possibilities with our Online Learning platform. Learn, grow, and succeed from anywhere, at any time. Enroll today and take the first step towards a brighter future!"</p>
                            <a href="/curriculum" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="/register" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses</h5>
                            <h1 class="display-3 text-white animated slideInDown">Unlock Your Learning Potential with Chinland Tech Academy.</h1>
                            <p class="fs-5 text-white mb-4 pb-2">"Unlock endless possibilities with our Online Learning platform. Learn, grow, and succeed from anywhere, at any time. Enroll today and take the first step towards a brighter future!"</p>
                            <a href="/curriculum" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="/register" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
<!-- Hero Page End -->

@include('layout.service')
@include('layout.categories')
@include('layout.pplcourses')
@include('layout.aboutus')
@include('layout.instructors')
@endsection
