@extends('layout.master')
@section('content')

<!-- Library Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class=" wow fadeInUp" data-wow-delay="0.1s">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Library E-Book</h1>
                </div>
            
                <div class="row g-4 justify-content-center"> 
            @foreach ($data as $data )
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="storage/{{$data->coverimg}}" alt="">
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="storage/{{$data->bookupload}}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                    <a href="storage/{{$data->bookupload}}" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Download</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h5 class="mb-4">{{$data->title}}</h5>
                            </div>
                        </div>
                    </div>
            @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Library End -->

@endsection