@extends('frontend.layouts.app')

@section('title', $scholarship->name)

@section('content')

        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('fontend-assets/img/hero/about.jpg')}}" style="background-image: url({ asset('fontend-assets/img/hero/about.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>{{$scholarship->title}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <div class="job-post-company pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- job single -->
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
                        </div>
                          <!-- job single End -->
                       
                        <div class="job-post-details">
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Scholarship Description</h4>
                                </div>
                                <p>{{$scholarship->description}}</p>
                                <div class="small-section-tittle">
                                    <h4>Eligibility Criteria</h4>
                                </div>
                                <p>{{$scholarship->eligibility}}</p>
                                <div class="small-section-tittle">
                                    <h4>Instructions</h4>
                                </div>
                                <p>{{$scholarship->instructions}}</p>
                            </div>
                        </div>

                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Job Overview</h4>
                           </div>
                          <ul>
                              <li>Posted date : <span>{{$scholarship->created_at->format('d M Y')}}</span></li>
                              <li>Qualification :  <span>{{$scholarship->NOS}}</span></li>
                              <li>Field : <span>{{ucfirst($scholarship->field)}}</span></li>
                              <li>Joining Date : <span>{{date('d M Y', strtotime($scholarship->joining_date))}}</span></li>
                              <li>Application date : <span>{{date('d M Y', strtotime($scholarship->deadline))}}</span></li>
                          </ul>
                         <div class="apply-btn2">
                            <!-- <a href="#" class="btn">Apply Now</a> -->
                         </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->

@endsection