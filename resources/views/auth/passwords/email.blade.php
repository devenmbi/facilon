
@extends('layouts.frontend-header')

@section('content')

<section class="login-form-style4 section-padding" style="background-image:url('https://anvaya.online/facilon/public/frontend/images/banner/2125.jpg');">
        <div class="container ">
          <div class="row align-items-center">
            <div class="col-lg-7 col-md-7 col-sm-12">
              <div class="lgf4_Left_content">
                <h3>Welcome to <span>Facilon Services</span> (‘Facilon’) Forgot Password
  
                </h3>
                <!-- <p>Before we start the registration process we would like to verify your email address & mobile number
  
                </p> -->
              </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
              <div class="login-form-style3-main">
                <div class="login-form-style3-main_full">
                  <div class="login-register_style3-head">
                    <h2>Password Reset</h2>
                  </div>
                  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <div class="login-register3-form-middle">
                    <form action="{{ route('password.email') }}" method="POST" data-bitwarden-watching="1">
                        {{csrf_field()}}
                       
                      <div class="single-field">
                        <label for="username">Email ID: <span class="star-color">*</span>
                        </label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      
                      
                      <div class="single-field mb-0">
                        <button class="button-1" type="submit" name="submit">Send Password Reset Link</button>
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
