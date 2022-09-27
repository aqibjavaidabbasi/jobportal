@extends('frontend.layouts.app')

@section('title', $job->title)

@section('content')

        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('fontend-assets/img/hero/about.jpg')}}" style="background-image: url({ asset('fontend-assets/img/hero/about.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>{{$job->title}}</h2>
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
                        <div class="single-job-items mb-50">
                            <div class="job-items">
                                <div class="company-img company-img-details">
                                    <a href="#"><img src="{{ asset('fontend-assets/img/icon/job-list1.png')}}" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4>{{$job->title}}</h4>
                                    </a>
                                    <ul>
                                        <li>{{$job->category}}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{$job->location}}</li>
                                        <li>Rs. {{$job->salary}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                          <!-- job single End -->
                       
                        <div class="job-post-details">
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Job Description</h4>
                                </div>
                                <p>{{$job->jobd}}</p>
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
                              <li>Posted date : <span>{{$job->created_at->format('d M Y')}}</span></li>
                              <li>Location : <span>{{$job->location}}</span></li>
                              <li>Vacancy : <span>{{$job->vacancy}}</span></li>
                              <li>Job nature : <span>{{$job->jobt}}</span></li>
                              <li>Salary :  <span>Rs. {{$job->salary}}</span></li>
                              <li>Application date : <span>{{date('d M Y', strtotime($job->ad))}}</span></li>
                          </ul>
                         <div class="apply-btn2">
                            <!-- <a href="#" class="btn">Apply Now</a> -->
                         </div>
                       </div>
                        <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Company Information</h4>
                           </div>
                              <span>{{$job->company_detail->name}}</span>
                              <p>{{$job->company_detail->address}}</p>
                            <ul>
                                <li>Name: <span>{{$job->company_detail->name}} </span></li>
                                <li>Phone : <span> {{$job->company_detail->phone}}</span></li>
                                <li>Email: <span>{{$job->company_detail->email}}</span></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->

@endsection