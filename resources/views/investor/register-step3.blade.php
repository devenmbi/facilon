@extends('layouts.frontend-header')
@section('content')
<section class="login-form-style4 section-padding align-items-center" style="background-image:url('https://anvaya.online/facilon/public/frontend/images/banner/2125.jpg');">
      <div class="container ">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="lgf4_Left_content">
              <h3>Welcome to <span>Facilon Services</span> (‘Facilon’) Registration Process

              </h3>
              <div class="list-type2">
                <ul>
                <li><i class="fa-solid fa-thumbs-up"></i> We have successfully verified your email address and mobile number</li>
                </ul>
                </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="login-form-style3-main">
              <div class="login-form-style3-main_full">
                <div class="login-register_style3-head">
                  <h2>Investor Registration @php echo Crypt::decrypt($unique_code); @endphp</h2>
                </div>
                <div class="login-register3-form-middle">
                  <form action="{{route('investor_register_step3_enter_full_name')}}" method="post" data-bitwarden-watching="1">
                    {{csrf_field()}}
                    <input type="hidden" name="unique_code" value="{{$unique_code}}">
                    <div class="single-field">
                      <label for="username">Please enter your Full Name <span class="star-color">*</span>
                      </label>  
                      <input type="text" name="full_name">
                        @error('full_name')
                            <span style="color: red" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
						@enderror           
                     </div>
                    <div class="single-field mb-0">
                      <button class="button-1" type="submit" name="submit">Next</button>
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