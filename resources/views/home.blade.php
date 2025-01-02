@extends('layouts.frontend-header')

@section('content')
<section class="login-form-2">
        <div class="container ">
          <div class="row align-items-center">
            <div class="login-register_style3-head text-center">
              <h2>Investor Registration</h2>
            </div>
            @php
                    $fetch_investor_details_login_count = DB::table('users')
                                                        ->where('id','=',Auth::user()->id)
                                                        ->first();
                    
            @endphp
            @if($fetch_investor_details_login_count->logged_in_count == 0)
            <div class="tab" role="tabpanel">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                    
                    <li role="presentation" class="active"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Change Password</a></li>
                    <li role="presentation">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" aria-controls="messages" role="tab" data-toggle="tab">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content tabs">
                  
                    <div role="tabpanel" class="tab-pane fade in active" id="Section2">
                        <div class="login-form-style3-main">
                            <div class="login-form-style3-main_full">
                                <div class="login-register3-form-middle">
                                    <form action="{{ route('first_time_password_change') }}" method="post" data-bitwarden-watching="1">
                                    {{csrf_field()}}
                       
                                        <div class="single-field">
                                            <label for="username">Enter New Password: <span class="star-color">*</span>
                                            </label>
                                            <input type="password" name="new_password" class="@error('new_password') is-invalid @enderror" required>
                                            @error('new_password')
                                                <span style="color: red" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="single-field">
                                            <label for="username">Confirm Password: <span class="star-color">*</span>
                                            </label>
                                            <input type="password" name="confirm_password" class="@error('confirm_password') is-invalid @enderror" name="password" required>
                                            @error('confirm_password')
                                                <span style="color: red" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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
            @else
            <div class="tab" role="tabpanel">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Profile Details</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Change Password</a></li>
                    <li role="presentation">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" aria-controls="messages" role="tab" data-toggle="tab">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content tabs">
                  <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                      <table class="table table-bordered table-striped">
                        <tbody>
                            @php 
                                $fetch_investor_details = DB::table('users')
                                                        ->where('id','=',Auth::user()->id)
                                                        ->first();
                                $fetch_country_code = DB::table('isd_code_values')
                                                    ->where('id','=',$fetch_investor_details->isd_code)
                                                    ->first();
                                $fetch_investor_main_details = DB::table('investors')
                                                            ->where('unique_code','=',$fetch_investor_details->unique_code)
                                                            ->first();
                                $fetch_investor_category = DB::table('investor_type_category')
                                                        ->where('id','=',$fetch_investor_main_details->register_as)
                                                        ->first();
                                
                            @endphp
                                <tr>
                                    <th>Unique ID</th>
                                    <td>{{$fetch_investor_details->unique_code}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Investor Type (Registered as)</th>
                                    <td>
                                        
                                        {{$fetch_investor_category->cat_name}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Market</th>
                                    <td>
                                        
                                        India
                                    </td>
                                </tr>
                                <tr>
                                    <th>Full Name</th>
                                    <td>{{$fetch_investor_details->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email ID</th>
                                    <td>{{$fetch_investor_details->email}}</td>
                                </tr>
                                <tr>
                                    <th>Mobile No</th>
                                    <td>+{{$fetch_country_code->code_value}}-{{$fetch_investor_details->mobile_no}}</td>
                                </tr>
                          @if($fetch_investor_category->register_as == 'Self')
                                <tr>
                                    <th>Nationality</th>
                                    <td>
                                        @php 
                                            $fetch_nationality = DB::table('isd_code_values')
                                                                ->where('id','=',$fetch_investor_main_details->nationality)
                                                                ->first();
                                        @endphp
                                        {{$fetch_nationality->nationality}}
                                    </td>
                                </tr>
                            @if($fetch_investor_category->nationality == 'Indian')
                                <tr>
                                    <th>Are you</th>
                                    <td>
                                        @if($fetch_investor_main_details->residence_type == 'Yes')
                                        Resident Indian
                                        @else
                                        Non-Resident Indian
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Do you have a Pan Card</th>
                                    <td>{{$fetch_investor_main_details->pancard_status}}</td>
                                </tr>
                            @else
                                <tr>
                                    <th>Are you a person of Indian Origin</th>
                                    <td>{{$fetch_investor_main_details->indian_origin}}</td>
                                </tr>
                                <tr>
                                    <th>Do you have an OCI Card</th>
                                    <td>{{$fetch_investor_main_details->oci_card_status}}</td>
                                </tr>
                            @endif
                            @else
                                <tr>
                                    <th>Name of the Entity</th>
                                    <td>{{$fetch_investor_main_details->entity_name}}</td>
                                </tr>
                                <tr>
                                    <th>Country of Formation</th>
                                    <td>
                                        @php 
                                            $fetch_country_names = DB::table('isd_code_values')
                                                                ->where('id','=',$fetch_investor_main_details->incorp_country)
                                                                ->first();
                                        @endphp
                                        {{$fetch_country_names->country_name}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Name of Entity Representative:</th>
                                    <td>{{$fetch_investor_main_details->entity_name_representative}}</td>
                                </tr>
                                <tr>
                                    <th>In what capacity representing company</th>
                                    <td>{{$fetch_investor_main_details->company_capacity}}</td>
                                </tr>
                                <tr>
                                    <th>Entity Regulation</th>
                                    <td>{{$fetch_investor_main_details->security_regulated}}</td>
                                </tr>
                                <tr>
                                    <th>Registration ID</th>
                                    <td>{{$fetch_investor_main_details->registration_id}}</td>
                                </tr>
                            @endif
                        </tbody>
                      </table>
                  </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <div class="login-form-style3-main">
                        <div class="login-form-style3-main_full">
                            <div class="login-register3-form-middle">
                            <form action="#" data-bitwarden-watching="1">
                                <div class="single-field">
                                <label for="username">Please enter your Email: <span class="star-color">*</span>
                                </label>
                                <input type="text" name="name">
                                </div>
                                
                                <div class="single-field mb-0">
                                <button class="button-1" type="submit">Login</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>                  
                    </div>
              </div>
            </div>
            @endif
           

            <div class="single-field mb-0">
              <a href="https://anvaya.online/facilon/investor/register/step1/update/202406184658" class="button-2" type="submit">Update</a>
              <button class="button-2" type="submit">Confirm</button>

            </div>
          </div>
        </div>
      </section>
@endsection
