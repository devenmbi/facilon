@extends('layouts.frontend-header')

@section('content')

<section class="login-form-style4 section-padding" style="background-image:url('https://anvaya.online/facilon/public/frontend/images/banner/2125.jpg');">
        <div class="container ">
          <div class="row align-items-center">
            <div class="col-lg-7 col-md-7 col-sm-12">
              <div class="lgf4_Left_content">
                <h3>Welcome to <span>Facilon Services</span> (‘Facilon’) Login Process
  
                </h3>
                <!-- <p>Before we start the registration process we would like to verify your email address & mobile number
  
                </p> -->
              </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
              <div class="login-form-style3-main">
                <div class="login-form-style3-main_full">
                  <div class="login-register_style3-head">
                    <h2>Investor Login</h2>
                  </div>
                  <div class="login-register3-form-middle">
                    <form action="{{ route('login') }}" method="post" data-bitwarden-watching="1">
                        {{csrf_field()}}
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
                        <label for="username">Email ID: <span class="star-color">*</span>
                        </label>
                        <input type="text" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span style="color: red" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
						@enderror
                      </div>
                      <div class="single-field">
                        <label for="username">Password: <span class="star-color">*</span>
                        </label>
                        <input type="password" name="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span style="color: red" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
						@enderror
                      </div>
                      <div class="single-field">
                        <div class="checkbox-wrapper-33">
                          <label class="checkbox">
                            <input class="checkbox__trigger visuallyhidden" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="checkbox__symbol">
                              <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px" viewBox="0 0 28 28" version="1" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 14l8 7L24 7"></path>
                              </svg>
                            </span>
                            <p class="checkbox__textwrapper">Remember Me</p>
                          </label>
                        
                        </div>
                        
                      </div>
                      <div class="single-field mb-0">
                        <button class="button-1" type="submit" name="submit">Submit</button>
                      </div>
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                        @endif
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
