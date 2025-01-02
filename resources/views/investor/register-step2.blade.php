@extends('layouts.frontend-header')

@section('content')
<!-- Start Login Register Form -->
    <section class="login-form-style4 section-padding" style="background-image:url('https://anvaya.online/facilon/public/frontend/images/banner/2125.jpg');">
      <div class="container ">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="lgf4_Left_content">
              <h3>Welcome to <span>Facilon Services</span> (‘Facilon’) Registration Process

              </h3>
              <div class="list-type1">
                <ul>
                <li><i class="fa-solid fa-check"></i> An email with a One Time Password has been sent to your email address and mobile no. These OTP’s are valid for 10 mins.</li>
                <li><i class="fa-solid fa-check"></i> Check your spam or junk folder for the email in case you are unable to locate the email</li>
                <li><i class="fa-solid fa-check"></i> In case you have not received OTP on email and/or mobile kindly input/recheck email and phone no.</li>
                </ul>
                </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="login-form-style3-main">
              <div class="login-form-style3-main_full">
                <div class="login-register_style3-head">
                  <h2>Investor Registration</h2>
                </div>
                <div class="login-register3-form-middle">
                  <form action="{{route('investor_register_step2_verify_otp')}}" method="post" data-bitwarden-watching="1">
                    {{csrf_field()}}
                    <input type="hidden" name="unique_code" value="{{$unique_code}}">
                    <div class="single-field">
                      <label for="username">Please enter your Email OTP: <span class="star-color">*</span>
                      </label>
                      <div class="row otp-sec">
                        <div class="col">
                          <input type="text" maxlength="1" required="" autocomplete="off" name="number1">
                          
                        </div>
                        <div class="col">
                          <input type="text" maxlength="1" required="" autocomplete="off" name="number2">
                        </div>
                        <div class="col">
                          <input type="text" maxlength="1" required="" autocomplete="off" name="number3">
                        </div>
                        <div class="col">
                          <input type="text" maxlength="1" required="" autocomplete="off" name="number4">
                        </div>
                      </div>                 
                     </div>
                     @if($errors->has('error'))
                        <p style="color:red;">{{ $errors->first('error') }}</p>
                    @endif
                    <div class="single-field">
                      <label for="username">Please enter your Mobile OTP : <span class="star-color">*</span>
                      </label>
                      <div class="row otp-sec">
                        <div class="col">
                          <input type="text" maxlength="1" required="" autocomplete="off">
                        </div>
                        <div class="col">
                          <input type="text" maxlength="1" required="" autocomplete="off">
                        </div>
                        <div class="col">
                          <input type="text" maxlength="1" required="" autocomplete="off">
                        </div>
                        <div class="col">
                          <input type="text" maxlength="1" required="" autocomplete="off">
                        </div>
                      </div>                     
                    </div>
                    <div class="row">
                      <div class="col-md-8 col-sm-6 col-xs-12">
                        <p>Not received your code? <a href="{{route('investor_register_step2_resend_otp')}}/{{Crypt::encrypt($unique_code)}}" class="otp-link"><u>Resend OTP</u></a></p>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="timer-sec">Timer Left: <span id="timer" class="timer"></span></div>
                      </div>
                    </div>
                    <div class="single-field mb-0">
                      <button class="button-1" type="submit" name="submit">Submit</button>
                      <a href="{{route('investor_register_step1_update_show')}}/{{$unique_code}}" class="button-2" type="submit">ReEnter Email / Mobile</a>

                    </div>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      var redirect_url = "{{ route('investor_register_step1_show') }}";
    </script>
@endsection