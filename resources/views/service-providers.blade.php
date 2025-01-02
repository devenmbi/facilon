@extends('layouts.frontend-header')
@section('content')
    <div id="fullpage">
        <div id="section0" class="section service-provider">
            <div class="container">
                <div class="section-heading mb-40">
                    <div class="sub-heading">Service Providers</div>
                </div>
                <div class="row">
                    @foreach($list_service_providers as $list_service_providers_ind)
                        <div class="col-md-4 col-sm-12">
                            <div class="box-location-v3 hover-img not-overlay hover-btn-view">
                                <div class="img-style">
                                    <img src="{{asset('public/admin/assets/images/service-providers/'.$list_service_providers_ind->img_src)}}" alt="image-location">
                                </div>
                                <div class="content">
                                    <h6><a href="#" class="link">{{ $list_service_providers_ind->title }}</a></h6>
                                    <a href="#" class="btn-view style-1"><span class="text">Explore Now</span> <span class="icon icon-arrow-right2"></span> </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col-md-4 col-sm-12">
                        <div class="box-location-v3 hover-img not-overlay hover-btn-view">
                            <div class="img-style">
                                <img src="./images/icon/people.svg" alt="image-location">
                            </div>
                            <div class="content">
                                <h6><a href="#" class="link">Custodians</a></h6>
                                <a href="#" class="btn-view style-1"><span class="text">Explore Now</span> <span class="icon icon-arrow-right2"></span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="box-location-v3 hover-img not-overlay hover-btn-view">
                            <div class="img-style">
                                <img src="./images/icon/folder-management.svg" alt="image-location">
                            </div>
                            <div class="content">
                                <h6><a href="#" class="link">Portfolio Managers</a></h6>
                                <a href="#" class="btn-view style-1"><span class="text">Explore Now</span> <span class="icon icon-arrow-right2"></span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="box-location-v3 hover-img not-overlay hover-btn-view">
                            <div class="img-style">
                                <img src="./images/icon/bank.svg" alt="image-location">
                            </div>
                            <div class="content">
                                <h6><a href="#" class="link">Banks</a></h6>
                                <a href="#" class="btn-view style-1"><span class="text">Explore Now</span> <span class="icon icon-arrow-right2"></span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="box-location-v3 hover-img not-overlay hover-btn-view">
                            <div class="img-style">
                                <img src="./images/icon/financial.svg" alt="image-location">
                            </div>
                            <div class="content">
                                <h6><a href="#" class="link">Investment Advisors</a></h6>
                                <a href="#" class="btn-view style-1"><span class="text">Explore Now</span> <span class="icon icon-arrow-right2"></span> </a>
                            </div>
                        </div>
                    </div> --}}

                    <!-- <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInUp">
                        <div class="inner-box">
                            <img src="./images/icon/pros-and-cons.png">
                        
                            <h6 class="title">Review and Evaluate list of Service Providers in India​​​</h6>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInUp">
                        <div class="inner-box">
                            <img src="./images/icon/doctor-on-call.png">
                        
                            <h6 class="title">Appoint a Service Provider</h6>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInUp">
                        <div class="inner-box">
                            <img src="./images/icon/customer.png">
                            <h6 class="title">Provide KYC Information & Documentation</h6>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInUp">
                        <div class="inner-box">
                            <img src="./images/icon/registration.png">
                            <h6 class="title">Complete SEBI Registration Process (If applicable)</h6>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInUp">
                        <div class="inner-box">
                            <img src="./images/icon/documents.png">
                        
                            <h6 class="title">Provide account opening documentation​</h6>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInUp">
                        <div class="inner-box">
                            <img src="./images/icon/login.png">
                        
                            <h6 class="title">Obtain account numbers from Service Providers​</h6>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                        <div class="service-block wow fadeInUp">
                        <div class="inner-box">
                            <img src="./images/icon/instructions.png">
                        
                            <h6 class="title">Send Instructions using Facilon Services ​​​</h6>
                        </div>
                        </div>
                        </div> -->
                </div>
            </div>
        </div>
    
@endsection