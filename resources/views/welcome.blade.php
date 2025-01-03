@extends('layouts.frontend-header')
@section('content')
<div id="fullpage-1">
    <div id="section0" class="section slider-area services-b-sec fp-auto-height-responsive">
      <!-- Start Slider Area -->
<!-- ======= Hero Section ======= -->
<div id="hero" class="hero">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="layer-1-1 wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
          <h2 class="title1"><span>Are you a service provider looking to connect with overseas investors seeking opportunities in India?  </span></h2>
          <p>Facilon facilitates access, onboarding, and collaboration by leveraging an onshore network of securities service providers.</p>  
<p>Showcase your products and services to global investors on Facilon, our flexible and scalable cloud solutions empower you to expand your reach in the Indian investment landscape. </p>
        </div>
        <!-- layer 2 -->
      </div>
    </div>
  </div>
</div><!-- End Hero Section -->
      <!-- End Slider Area -->
    </div>
    <div id="section1" class="section service-provider-sec fp-auto-height-responsive purpose our-purpose">
      <div class="container">
        <div class="section-heading mb-40">
          <div class="sub-heading">Begin your journey with Facilon</div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="cat-box wow fadeInUp">
              <a href="#" class="bg-tutu">
                <!--<div class="icon-box"><img src="./images/icon/verify.png" alt="icon"></div>-->
                <strong class="title">Sign up & register with Facilon</strong>
                <span class="value">1</span>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="cat-box wow fadeInUp">
              <a href="#" class="bg-tutu">
                <!--<div class="icon-box"><img src="./images/icon/scrutiny.png" alt="icon"></div>-->
                <strong class="title">Set up users on the system</strong>
                <span class="value">2</span>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="cat-box wow fadeInUp">
              <a href="#" class="bg-tutu">
                <!--<div class="icon-box"><img src="./images/icon/appointment.png" alt="icon"></div>-->
                <strong class="title">Set up documentation library</strong>
                <span class="value">3</span>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="cat-box wow fadeInUp">
              <a href="#" class="bg-tutu">
                <!--<div class="icon-box"><img src="./images/icon/kyc.png" alt="icon"></div>-->
                <strong class="title"> Agree on communication templates</strong>
                <span class="value">4</span>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="cat-box wow fadeInUp">
              <a href="#" class="bg-tutu">
                <!--<div class="icon-box"><img src="./images/icon/contract.png" alt="icon"></div>-->
                <strong class="title">
Receive leads from Facilon or / and Introduce investors in the system</strong>
                <span class="value">5</span>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="cat-box wow fadeInUp">
              <a href="#" class="bg-tutu">
                <!--<div class="icon-box"><img src="./images/icon/file.png" alt="icon"></div>-->
                <strong class="title">Obtain information for KYC & supporting documentation from the investor.</strong>
                <span class="value">6</span>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="cat-box wow fadeInUp">
              <a href="#" class="bg-tutu">
                <!--<div class="icon-box"><img src="./images/icon/accountant.png" alt="icon"></div>-->
                <strong class="title">Complete SEBI registration process (If applicable)</strong>
                <span class="value">7</span>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="cat-box wow fadeInUp">
              <a href="#" class="bg-tutu">
                <!--<div class="icon-box"><img src="./images/icon/instructions.png" alt="icon"></div>-->
                <strong class="title">Provide account opening documents & various agreements to the investor</strong>
                <span class="value">8</span>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="cat-box wow fadeInUp">
              <a href="#" class="bg-tutu">
                <!--<div class="icon-box"><img src="./images/icon/report.png" alt="icon"></div>-->
                <strong class="title">Receive executed account opening documents</strong>
                <span class="value">9</span>
              </a>
            </div>
          </div>
                      <div class="col-md-4 col-sm-12">
            <div class="cat-box wow fadeInUp">
              <a href="#" class="bg-tutu">
                <!--<div class="icon-box"><img src="./images/icon/report.png" alt="icon"></div>-->
                <strong class="title">Open accounts & communicate account numbers</strong>
                <span class="value">10</span>
              </a>
            </div>
          </div>
                                  <div class="col-md-4 col-sm-12">
            <div class="cat-box wow fadeInUp">
              <a href="#" class="bg-tutu">
                <!--<div class="icon-box"><img src="./images/icon/report.png" alt="icon"></div>-->
                <strong class="title">Based on client consent provide reports to Facilon</strong>
                <span class="value">11</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="fullpage">
        {{-- <div id="section0" class="section service-provider">
            <div class="container">
                <div class="section-heading mb-40">
                    <div class="sub-heading">Service Providers</div>
                </div>
                <div class="row"> --}}
                    {{-- @foreach($list_service_providers as $list_service_providers_ind)
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
                    --}}
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
                {{-- </div>
            </div>
        </div> --}}

  {{--  <div id="fullpage">
        <div id="section0" class="section slider-area fp-auto-height-responsive">
        	<div id="hero" class="hero" style="background-image:url({{asset('public/admin/assets/images/banner/'.$fetch_banner_details->img_src)}});">
        		<div class="container">
        			<div class="row">
        				<div class="col-md-5">
        					<div class="layer-1-1 wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
        						<h2 class="title1">
        						    <span>{{ $fetch_banner_details->title }}</span><br><br/>
        						    {{ $fetch_banner_details->sub_title_one }}
        						</h2>
        					</div>
        					<blockquote class="wow slideInUp" data-wow-duration="4s" data-wow-delay=".4s">
        						<!--<p><span>Welcome to Facilon</span> Marketplace to appoint Service Providers in India</p>-->
        						<p>{{ $fetch_banner_details->sub_title_two }}</p>
        					</blockquote>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <div id="section1" class="section fp-auto-height-responsive purpose our-purpose">
        	<div class="container">
        		<div class="section-heading mb-40">
        			<div class="sub-heading">Begin your journey with Facilon</div>
        		</div>
        		<div class="row">
        		    @php $sr_no = 1; @endphp
        		    
        		    @foreach($list_key_points AS $list_key_points_ind)
            		    <div class="col-md-4 col-sm-12">
            				<div class="cat-box wow fadeInUp">
            					<a href="{{ $list_key_points_ind->url }}" class="bg-tutu">
            						<div class="icon-box"><img src="{{asset('public/admin/assets/images/key-points/'.$list_key_points_ind->img_src)}}" alt="icon"></div>
            						<strong class="title">{{ $list_key_points_ind->title }}</strong>
            						<span class="value">{{ $sr_no }}</span>
            					</a>
            				</div>
            			</div>
            			
            			 @php $sr_no++; @endphp
            		@endforeach
        		</div>
        	</div>
        </div> --}}
@endsection