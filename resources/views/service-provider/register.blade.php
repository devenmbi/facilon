@extends('layouts.frontend-header')
@section('content')
<section class="login-form-style4 steps4-sec section-padding align-items-center"
      style="background-image:url('https://anvaya.online/facilon/public/frontend/images/banner/2125.jpg');">
      <div class="container ">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-12 col-sm-12">
            <div class="lgf4_Left_content">
              <h3>Service Provider <span>Registration</span> </h3>
              <p>Currently we are only registering the expression of interest in the India Securities market</p>
            </div>
          </div>
          <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="login-form-style3-main">
              <div class="login-form-style3-main_full">
                <!-- <div class="login-register_style3-head">
                  <h2>Investor Registration</h2>
                </div> -->
                <div class="login-register3-form-middle">
                   @if($provider_id == 1 || $provider_id == 2 || $provider_id == 3)
                  <form action="{{route('service_provider_registration_step1_submit')}}" data-bitwarden-watching="1" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="unique_code" value="">
                    <input type="hidden" name="provider_id" value="{{$provider_id}}">
                    @php 
                    $get_provider_name = DB::table('service_providers')
                                        ->where('id','=',$provider_id)
                                        ->first();
                    $provider_id
                    @endphp
                    <div class="single-field intro-name">
                      <label for="username"><span class="referred-name">{{$get_provider_name->title}} Details </span>
                      </label>
                    </div>

                    <div class="name-sec" id="section_self_div" >
                      <div class="row">
                        <div class="col-md-12">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Full Name: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="full_name" value="">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i>Corporate Office Address: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="corporate_office_address" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> TEL: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="tel_no" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Fax: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="fax_no" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Website: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="website" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> CIN NO: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="cin_no" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> NSE SEBI Reg No: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="nse_sebi_reg_no" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> NSE F&O SEBI Reg No: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="nse_f_and_o_sebi_reg_no" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> BSE SEBI Reg No: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="bse_sebi_reg_no" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> BSE F&O SEBI Reg No: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="bse_f_and_o_sebi_reg_no" value="">
                          </div>
                        </div>
                        
                      </div>  
                    </div>
                    
                      <div id="button_div">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="single-field mb-0">
                              <button class="button-1" type="submit" name="submit">Next</button>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="single-field mb-0">
                              <a href="" class="button-1" style="padding: 12px 20px;font-size: 18px;display: inline-block;width: 100%;text-align:center;" type="submit">Cancel</a>
                            </div>
                          </div>
                        </div>
                      </div>  
                    
                  </form>
                  @elseif($provider_id == 4)
                  <form action="{{route('service_provider_registration_step1_submit')}}" data-bitwarden-watching="1" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="unique_code" value="">
                    <input type="hidden" name="provider_id" value="{{$provider_id}}">
                    @php 
                    $get_provider_name = DB::table('service_providers')
                                        ->where('id','=',$provider_id)
                                        ->first();
                    $provider_id
                    @endphp
                    <div class="single-field intro-name">
                      <label for="username"><span class="referred-name">{{$get_provider_name->title}} Details </span>
                      </label>
                    </div>

                    <div class="name-sec" id="section_self_div" >
                      <div class="row">
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i>Name of the Bank: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="bank_name" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i>Name of Contact Person: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="contact_person_name" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Address Line 1: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="address_line1" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Address Line 2: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="address_line2" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Country: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="country" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> State: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="state" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> City: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="city" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Pin Code / Zip Code: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="pin_zip_code" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Email: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="email_id" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Phone No (Bank): <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="phone_no" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Phone No (Contact Person): <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="contact_phone_no" value="">
                          </div>
                        </div>
                      </div>  
                    </div>
                    
                      <div id="button_div">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="single-field mb-0">
                              <button class="button-1" type="submit" name="submit">Submit</button>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="single-field mb-0">
                              <a href="" class="button-1" style="padding: 12px 20px;font-size: 18px;display: inline-block;width: 100%;text-align:center;" type="submit">Cancel</a>
                            </div>
                          </div>
                        </div>
                      </div>  
                    
                  </form>
                  @else
                    <form action="{{route('service_provider_registration_step1_submit')}}" data-bitwarden-watching="1" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="provider_id" value="{{$provider_id}}">
                    @php 
                    $get_provider_name = DB::table('service_providers')
                                        ->where('id','=',$provider_id)
                                        ->first();
                    $provider_id
                    @endphp
                    <input type="hidden" name="unique_code" value="">
                    <div class="single-field intro-name">
                      <label for="username">Introducer Details: <span class="referred-name"></span>
                      </label>
                    </div>
                    <div class="single-field self-sec">
                      <label for="username">Are you registering for Natural Person or Legal Entity: <span
                          class="star-color">*</span></label>
                      <div class="radio-box">
                        <label class="radio expander">
                          <input name="natural_person" type="radio" onclick="change_register()" value="Natural Person" checked="checked">
                          <span>Natural Person</span>
                        </label>
                        <label class="radio">
                          <input name="natural_person" type="radio" onclick="change_register()" value="Legal Entity">
                          <span>Legal Entity</span>
                        </label>
                      </div>
                    </div>
                    
                        <div class="row">
                            <div class="name-sec" id="section_natural_person_div">
                                <div class="col-md-6">
                                  <div class="single-field">
                                    <label for="username"><i class="fa-solid fa-user"></i>Name: <span class="star-color">*</span>
                                    </label>
                                   
                                    <input type="text" name="full_name" value="">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="single-field">
                                    <label for="username"><i class="fa-solid fa-user"></i> Email: <span class="star-color">*</span>
                                    </label>
                                   
                                    <input type="text" name="email_id" value="">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="single-field">
                                    <label for="username"><i class="fa-solid fa-user"></i> Mobile No: <span class="star-color">*</span>
                                    </label>
                                   
                                    <input type="text" name="mobile_no" value="">
                                  </div>
                                </div>
                            </div>
                            <div class="name-sec" id="section_legal_div" style="display:none;">
                                <div class="col-md-6">
                                  <div class="single-field">
                                    <label for="username"><i class="fa-solid fa-user"></i>Name of Introducer: <span class="star-color">*</span>
                                    </label>
                                   
                                    <input type="text" name="introducer_name" value="">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="single-field">
                                    <label for="username"><i class="fa-solid fa-user"></i> Introducer Phone: <span class="star-color">*</span>
                                    </label>
                                   
                                    <input type="text" name="introducer_phone" value="">
                                  </div>
                                </div>
                                
                                <div class="col-md-6">
                                  <div class="single-field">
                                    <label for="username"><i class="fa-solid fa-user"></i>Name of Contact Person: <span class="star-color">*</span>
                                    </label>
                                   
                                    <input type="text" name="contact_person_name" value="">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="single-field">
                                    <label for="username"><i class="fa-solid fa-user"></i> Mobile No: <span class="star-color">*</span>
                                    </label>
                                   
                                    <input type="text" name="contact_mobile_no" value="">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="single-field">
                                    <label for="username"><i class="fa-solid fa-user"></i> Email: <span class="star-color">*</span>
                                    </label>
                                   
                                    <input type="text" name="contact_email_id" value="">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="single-field">
                                    <label for="username"><i class="fa-solid fa-user"></i>Designation: <span class="star-color">*</span>
                                    </label>
                                   
                                    <input type="text" name="contact_designation" value="">
                                  </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Address Line 1: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="address_line1" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Address Line 2: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="address_line2" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Country: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="country_code" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> State: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="state" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> City: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="city" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Pin Code / Zip Code: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="pin_zip_code" value="">
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Name of Overseas Regulator: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="overseas_regulator" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> License No: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="license_no" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> License valid: <span class="star-color">*</span>
                            </label>
                           
                            <input type="date" name="license_valid" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> SEBI Reg No: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="sebi_reg_no" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> SEBI Registration Valid Till Date: <span class="star-color">*</span>
                            </label>
                           
                            <input type="date" name="sebi_valid" value="">
                          </div>
                        </div>
                      </div> 
                    
                        <div id="button_div">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="single-field mb-0">
                              <button class="button-1" type="submit" name="submit">Submit</button>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="single-field mb-0">
                              <a href="" class="button-1" style="padding: 12px 20px;font-size: 18px;display: inline-block;width: 100%;text-align:center;" type="submit">Cancel</a>
                            </div>
                          </div>
                        </div>
                      </div> 
                    
                    
                    
                    </form>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>

    // $(document).ready(function(){ 
    //     $("#legal_country").change(function() {
          
    //       const selectedVal = $(this).val();
    //       if(selectedVal == 'India')
    //       {
    //         document.getElementById('legal_country_div').style.display = 'block'; 
    //         document.getElementById('note_confirm_div').style.display = 'block';
    //         document.getElementById('button_div').style.display = 'block';
    //       }else{
    //         document.getElementById('legal_country_div').style.display = 'block';
    //         document.getElementById('note_confirm_div').style.display = 'block';
    //         document.getElementById('button_div').style.display = 'block';
    //       }
    //     });
    //   }); 

      function change_register(){
        
          var getSelectedValue = document.querySelector( 'input[name="natural_person"]:checked');   
          if(getSelectedValue != null) {      
              if(getSelectedValue.value == 'Legal Entity'){
                
                document.getElementById('section_legal_div').style.display = 'block';
                document.getElementById('section_natural_person_div').style.display = 'none';
                // document.getElementById('pan_note_div').style.display = 'block';
                
              }else{
                
                document.getElementById('section_legal_div').style.display = 'none';
                document.getElementById('section_natural_person_div').style.display = 'block';
                // document.getElementById('pan_note_div').style.display = 'none';
                
              }  
          }  
       
      }
    //   function change(){
    //       var getSelectedValue = document.querySelector( 'input[name="pancard"]:checked');   
    //       if(getSelectedValue != null) {      
    //           if(getSelectedValue.value == 'No'){
    //             //document.getElementById('pan_note_div').style.display = 'block';
    //             document.getElementById('note_confirm_div').style.display = 'block';
    //             document.getElementById('button_div').style.display = 'block';
    //           }else{
    //             //document.getElementById('pan_note_div').style.display = 'none';
    //             document.getElementById('note_confirm_div').style.display = 'block';
    //             document.getElementById('button_div').style.display = 'block';
    //           }  
    //       }  
       
    //   }

    //   function change1(){
    //       var getSelectedValue = document.querySelector( 'input[name="indian_origin"]:checked');   
    //       if(getSelectedValue != null) {      
    //           if(getSelectedValue.value == 'Yes'){
    //             document.getElementById('oci_card_div').style.display = 'block';
    //             document.getElementById('note_confirm_div').style.display = 'block';
    //             // document.getElementById('pan_note_div').style.display = 'none';
    //             document.getElementById('button_div').style.display = 'block';
    //           }else{
    //             document.getElementById('oci_card_div').style.display = 'none';
    //             // document.getElementById('pan_note_div').style.display = 'block';
    //             document.getElementById('note_confirm_div').style.display = 'block';
    //             document.getElementById('button_div').style.display = 'block';
    //           }  
    //       }  
       
    //   }
    //   function change2(){
    //       var getSelectedValue = document.querySelector( 'input[name="oci_card"]:checked');   
    //       if(getSelectedValue != null) {      
    //           if(getSelectedValue.value == 'No'){
    //             //document.getElementById('oci_card_note_div').style.display = 'block';
                
    //           }else{
    //             //document.getElementById('oci_card_note_div').style.display = 'none';
    //           }  
    //       }  
       
    //   }

    //   $(document).ready(function(){ 
    //     $("#nationality").change(function() {
          
    //       const selectedVal = $(this).val();
    //       if(selectedVal == 'Indian')
    //       {
    //         document.getElementById('nationality_div').style.display = 'block'; 
    //         document.getElementById('other_nationality_div').style.display = 'none';
    //       }else{
    //         document.getElementById('nationality_div').style.display = 'none';
    //         document.getElementById('other_nationality_div').style.display = 'block';
    //       }
    //     });
    //   });
        
    </script>
@endsection