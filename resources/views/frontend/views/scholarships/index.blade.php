@extends('frontend.layouts.app')

@section('title', 'Scholarships Listings')


@section('content')


        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('fontend-assets/img/hero/about.jpg')}}" style="background-image: url({{ asset('fontend-assets/img/hero/about.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Get your Scholarship</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- Job List Area Start -->
        <div class="job-listing-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                            <div class="container">
                                <!-- Count of Job list Start -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="count-job mb-35">
                                            <span>{{number_format(\App\Models\scholarships::count())}} Scholarships found</span>
                                            <!-- Select job items start -->
                                            <!-- <div class="select-job-items">
                                                <span>Sort by</span>
                                                <select name="select" style="display: none;">
                                                    <option value="">None</option>
                                                    <option value="">job list</option>
                                                    <option value="">job list</option>
                                                    <option value="">job list</option>
                                                </select><div class="nice-select" tabindex="0"><span class="current">None</span><ul class="list"><li data-value="" class="option selected">None</li><li data-value="" class="option">job list</li><li data-value="" class="option">job list</li><li data-value="" class="option">job list</li></ul></div>
                                            </div> -->
                                            <!--  Select job items End-->
                                        </div>
                                    </div>
                                </div>
                                <!-- Count of Job list End -->
                                @foreach($scholarships as $scholarship)
                                
                                    <div class="single-job-items mb-30">
                                        <div class="job-items">
                                            <div class="company-img">
                                                <img src="{{ asset('fontend-assets/img/icon/job-list2.png')}}" alt="">
                                            </div>
                                            <div class="job-tittle job-tittle2">
                                                <a href="/scholarship-details/{{$scholarship->id}}">
                                                    <h4>{{$scholarship->name}}</h4>
                                                </a>
                                                <ul>
                                                    <li>Qualification:<br/> {{$scholarship->NOS}}</li>
                                                    <li>Location: <br/><address>{{$scholarship->address}}</address></li>
                                                    <li>Joining Date. <br/>{{date('d-m-Y', strtotime($scholarship->joining_date))}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="items-link items-link2 f-right">
                                            
                                            <a href="javascipt:void(0)">Deadline<br/>{{date('d-m-Y', strtotime($scholarship->deadline))}}</a>
                                            <!-- <span>7 hours ago</span> -->
                                        </div>
                                    </div>
                                
                                @endforeach

                            </div>
                        </section>
                        <!-- Featured_job_end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Job List Area End -->
        <!--Pagination Start  -->
        <div class="pagination-area pb-115 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                                </ul>
                            </nav>
                        </div> -->
                        {{$scholarships->withQueryString()->links('')}}
                    </div>
                </div>
            </div>
        </div>
        <!--Pagination End  -->
        

@endsection