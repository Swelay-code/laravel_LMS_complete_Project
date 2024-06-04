@extends('layout.master')
@section('content')
@include('layout.ads')

<!-- Courses Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-9 col-xs-12 col-sm-12">
                <div class="wow fadeInUp">

                    <div class="video-container">
                        <div class="video-playlist-1">
                            <video width="100%" height="auto" controls autoplay>
                                <source src="videos/Chinland Tech.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="mt-2 bg-body2 p-3 wow fadeInUp">
                    <h4>Graphic Design Course Description:</h4>
                    <p style="text-align: justify;">
                        Dive into the dynamic world of Graphic Design with our immersive course. Master design fundamentals, software tools, and typography to create stunning visuals across print and digital platforms. From concept to execution, unleash your creativity and develop a professional portfolio that showcases your unique style and skills.
                    </p>
                    <br>
                    <p>
                        Duration: <i class="alert alert-danger">14 Weeks</i> 2 days per a week.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-3 col-xs-12 col-sm-12">
                <div class="position-sticky top-0 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="playlist-selector">
                        <ul class="list-group border-0 p-0">
                            <a href="">
                            <li class="list-group-item bg-primary  border-0"><span class="fas fa-info-circle"></span> Course Overview</li>
                            </a>
                        </ul>
                        <ul class="list-group border-0 p-0 mt-1">
                            <li class="list-group-item border-0 bg-secondary text-white">graphic Design with Photoshop</li>
                            
                        @foreach ($data as $data )   
                            <button class="btn-sm border-0 active" id="selectVideo1" onclick="changeVideo(this,'storage/{{$data->video}}');">
                                <li class="list-group-item border-0 bg-body2 d-flex justify-content-between align-items-center "><span class="fas fa-play-circle" style="font-size: 25px;"></span><span class="pr-4 pl-4 text-center">
                                {{$data->title}}
                                </span>
                                <img src="storage/{{$data->coverimg}}" class="cllogo" alt="">
                                </li>
                            </button>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses End -->

@endsection