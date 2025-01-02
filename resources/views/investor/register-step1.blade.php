@extends('layouts.frontend-header')
@section('content')

<section class="login-form-style4 section-padding" style="background-image:url('https://anvaya.online/facilon/public/frontend/images/banner/2125.jpg');">
        <div class="container ">
          <div class="row align-items-center">
            <div class="col-lg-7 col-md-7 col-sm-12">
              <div class="lgf4_Left_content">
                <h3>Welcome to <span>Facilon Services</span> (‘Facilon’) Registration Process
  
                </h3>
                <p>Before we start the registration process we would like to verify your email address & mobile number
  
                </p>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
              <div class="login-form-style3-main">
                <div class="login-form-style3-main_full">
                  <div class="login-register_style3-head">
                    <h2>Investor Registration</h2>
                  </div>
                  <div class="login-register3-form-middle">
                    <form action="{{route('investor_register_step1_submit')}}" method="post" data-bitwarden-watching="1">
                        {{csrf_field()}}
                        <input type="hidden" name="ip_address" id="ip_address" value="{{ $ip_address }}">
                       {{-- @if (count($errors) > 0)
                            <div class = "alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif --}}
                      <div class="single-field">
                        <label for="username">Please enter your Email: <span class="star-color">*</span><a href="#"
                            data-toggle="popover" data-trigger="hover" title="Enter Email"
                            data-content="You'll need to have access to the email to be able to receive the OTP."><img
                              src="{{asset('public/frontend/images/information-button.png')}}" /></a>
                        </label>
                        <input type="text" name="email">
                        @error('email')
                            <span style="color: red" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
						@enderror
                      </div>
                      <div class="single-field mobile-no">
                        <label for="username">Please enter your Mobile No: <span class="star-color">*</span><a href="#"
                            data-toggle="popover" data-trigger="hover" title="Enter Mobile No."
                            data-content="You'll need to have access to the mobile no. to be able to receive the OTP."><img
                              src="{{asset('public/frontend/images/information-button.png')}}" /></a>
                        </label>
                        <select name="country_code" id="country_code">
                            @foreach($fetch_country_code as $country_code)
                                <option value="{{$country_code->id}}" {{ $country_code->country_code == $default_country_code ? 'selected' : '' }}>+{{$country_code->code_value}} ({{$country_code->country_name}})</option>
                            @endforeach
                            
                        </select>
                        <input type="text" id="" name="mobile_number">  
                        @error('mobile_number')
                            <span style="color: red" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
						@enderror                    
                      </div>
                      <div class="single-field">
                        <div class="checkbox-wrapper-33">
                          <label class="checkbox">
                            <input class="checkbox__trigger visuallyhidden" type="checkbox" name="agree_for_otp">
                            <span class="checkbox__symbol">
                              <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px" viewBox="0 0 28 28" version="1" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 14l8 7L24 7"></path>
                              </svg>
                            </span>
                            <p class="checkbox__textwrapper">I agree to receive OTP on email and mobile SMS message<span class="star-color">*</span></p>
                          </label>
                        @error('agree_for_otp')
                            <span style="color: red" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
						@enderror 
                        </div>
                        
                      </div>
                      
                      <div class="single-field mb-0">
                        <button class="button-1" type="submit" name="submit">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
@endsection