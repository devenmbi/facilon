@extends('layouts.frontend-header')
@section('content')
<section class="login-form-style4 steps4-sec section-padding align-items-center"
      style="background-image:url('https://anvaya.online/facilon/public/frontend/images/banner/2125.jpg');">
      <div class="container ">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-12 col-sm-12">
            <div class="lgf4_Left_content">
              <h3>Investor <span>Registration</span> </h3>
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
                  <form action="{{route('investor_register_step4_insert_data')}}" data-bitwarden-watching="1" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="unique_code" value="{{ Crypt::decrypt($unique_code)}}">
                    <div class="single-field intro-name">
                      <label for="username"><img src="{{asset('public/frontend/images/icon/presentation.png')}}"/> Introducer Name: <span class="referred-name">@php echo Crypt::decrypt($unique_code); @endphp</span>
                      </label>
                    </div>
                    <div class="single-field self-sec">
                      <label for="username">Are you registering for Self or Legal Entity: <span
                          class="star-color">*</span></label>
                      <div class="radio-box">
                        <label class="radio expander">
                          <input name="Self" type="radio" onclick="change_register()" value="Self">
                          <span>Self</span>
                        </label>
                        <label class="radio">
                          <input name="Self" type="radio" onclick="change_register()" value="Legal Entity">
                          <span>Legal Entity</span>
                        </label>
                      </div>
                    </div>

                    <div class="name-sec" id="section_self_div" style="display:none;">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Full Name: <span class="star-color">*</span>
                            </label>
                            @php
                                $decrypted_code = Crypt::decrypt($unique_code);
                                $fetch_user_name = DB::table('users')
                                                ->where('unique_code','=',$decrypted_code)
                                                ->first();
                            @endphp
                            <input type="text" name="full_name" value="{{$fetch_user_name->name}}" readonly>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-flag"></i> Nationality: <span class="star-color">*</span>
                            </label>
                            <select name="nationality" id="nationality">
                              <option value="select">Select Nationality</option>
                              <option value="Indian">Indian</option>
                              <option value="American">American</option>
                              
                            </select>
                          </div>
                        </div>
                      </div>
                      <div id="other_nationality_div" style="display:none;">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="single-field self-sec1">
                              <label for="username"><i class="fa-solid fa-house-chimney-window"></i> Are you a person of Indian Origin: <span
                                  class="star-color">*</span></label>
                              <div class="radio-box">
                                <label class="radio">
                                  <input name="indian_origin" onclick="change1()" type="radio" value="Yes">
                                  <span>Yes</span>
                                </label>
                                <label class="radio">
                                  <input name="indian_origin" onclick="change1()" type="radio" value="No">
                                  <span>No</span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div id="oci_card_div" style="display:none;">
                            <div class="col-md-12">
                              <div class="single-field self-sec1">
                                <label for="username"><i class="fa-solid fa-address-card"></i> Do you have an OCI Card: <span
                                    class="star-color">*</span></label>
                                <div class="radio-box">
                                  <label class="radio">
                                    <input name="oci_card" id="oci_card" onclick="change2()" type="radio" value="Yes">
                                    <span>Yes</span>
                                  </label>
                                  <label class="radio">
                                    <input name="oci_card" id="oci_card" onclick="change2()" type="radio" value="No">
                                    <span>No</span>
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="nationality_div" style="display:none;">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="single-field self-sec1">
                              <label for="username"><i class="fa-solid fa-house-chimney-window"></i> Are you: <span
                                  class="star-color">*</span></label>
                              <div class="radio-box">
                                <label class="radio">
                                  <input name="Resident" type="radio" value="Yes">
                                  <span>Resident Indian</span>
                                </label>
                                <label class="radio">
                                  <input name="Resident" type="radio" value="No">
                                  <span>Non-Resident Indian</span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="single-field self-sec1">
                              <label for="username"><i class="fa-solid fa-address-card"></i> Do you have a Pan Card: <span
                                  class="star-color">*</span></label>
                              <div class="radio-box">
                                <label class="radio">
                                  <input name="pancard" id="pancard" onclick="change()" type="radio" value="Yes">
                                  <span>Yes</span>
                                </label>
                                <label class="radio">
                                  <input name="pancard" id="pancard" onclick="change()" type="radio" value="No">
                                  <span>No</span>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                          
                      </div>
                    </div>
                    <div class="name-sec" id="section_legal_div" style="display:none;">
                      <div class="row">
                        <div class="col-md-5">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Name of the Entity: <span class="star-color">*</span> <a href="#"
                              data-toggle="popover" data-trigger="hover"
                              data-content="Should Be Same As The Incorporation/formation Documents"><img
                                src="{{asset('public/frontend/images/information-button.png')}}" /></a>
                            </label>
                            <input type="text" name="entity_name">
                          </div>
                        </div>
                        <div class="col-md-7">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-flag"></i> Country of Incorporation/Formation: <span class="star-color">*</span>
                            </label>
                            @php 
                              $fetch_country_name = DB::table('isd_code_values')
                                                  ->get();
                            @endphp
                            <select name="legal_country" id="legal_country">
                              <option value="XX">Select Country</option>
                              @foreach($fetch_country_name as $country_name)
                              <option value="{{$country_name->country_name}}">{{$country_name->country_name}}</option>
                              @endforeach
                              
                            </select>
                          </div>
                        </div>
                      </div>
                        <div id="legal_country_div" style="display:none;">
                          <div class="single-field self-sec1">
                            <label for="username"><i class="fa-solid fa-building"></i> Do you have a PAN card: <span
                                class="star-color">*</span></label>
                            <div class="radio-box">
                              <label class="radio">
                                <input name="legal_pan_card" type="radio" value="Yes">
                                <span>Yes</span>
                              </label>
                              <label class="radio">
                                <input name="legal_pan_card" type="radio" value="No">
                                <span>No</span>
                              </label>

                            </div>
                          </div>
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-users"></i> Name of Entity Representative: <span class="star-color">*</span> <a href="#"
                              data-toggle="popover" data-trigger="hover"
                              data-content="Name Should Match Your Identity Documents"><img
                                src="{{asset('public/frontend/images/information-button.png')}}" /></a>
                            </label>
                            @php
                                $decrypted_code1 = Crypt::decrypt($unique_code);
                                $fetch_user_name1 = DB::table('users')
                                                ->where('unique_code','=',$decrypted_code1)
                                                ->first();
                            @endphp
                            <input type="text" name="entity_rep_name" value="{{$fetch_user_name1->name}}">
                          </div>
                          <div class="single-field self-sec1">
                            <label for="username"><i class="fa-solid fa-building"></i> In what capacity representing company: <span
                                class="star-color">*</span></label>
                            <div class="radio-box">
                              <label class="radio">
                                <input name="rep_capacity" type="radio" value="Director">
                                <span>Director</span>
                              </label>
                              <label class="radio">
                                <input name="rep_capacity" type="radio" value="Employee">
                                <span>Employee</span>
                              </label>
                              <label class="radio">
                                <input name="rep_capacity" type="radio" value="POA Holder">
                                <span>POA Holder</span>
                              </label>
                            </div>
                          </div>
                          <div class="single-field self-sec1">
                            <label for="username"><i class="fa-solid fa-lock"></i> Whether Company is regulated as Securities or Banking Company: <span
                                class="star-color">*</span></label>
                            <div class="radio-box">
                              <label class="radio">
                                <input name="regulation" type="radio" checked value="Yes">
                                <span>Yes</span>
                              </label>
                              <label class="radio">
                                <input name="regulation" type="radio" value="No">
                                <span>No <a href="#"
                                  data-toggle="popover" data-trigger="hover" data-title="Regulated Entity"
                                  data-content="Is the entity regulatd as a securities or banking provider?"><img
                                    src="{{asset('public/frontend/images/information-button.png')}}" /></a></span>
                              </label>
                            </div>
                          </div>
                        </div>
                      
                      
                    </div>



                          <!-- <div class="single-field" id="pan_note_div" style="display:none;">
                            <div class="checkbox-wrapper-33">
                              <label class="checkbox">
                                <p class="checkbox__textwrapper">Note : It is important for you to have a PAN card before appointing any service provider. We will contact you by email and provide you the process for applying for PAN card</p>
                              </label>
                            </div>
                          </div> -->
                          <!-- <div class="single-field" id="oci_card_note_div" style="display:none;">
                            <div class="checkbox-wrapper-33">
                              <label class="checkbox">
                                <p class="checkbox__textwrapper">Note : It is important for you to have an OCI card before appointing any service provider. Please come back once you have the OCI card.</p>
                              </label>
                            </div>
                          </div> -->
                        <div id="note_confirm_div" style="display:none;">
                          <div class="single-field">
                            <div class="checkbox-wrapper-33">
                              <label class="checkbox">
                                <input class="checkbox__trigger visuallyhidden" type="checkbox" name="agree_to_watsapp" value="1">
                                <span class="checkbox__symbol">
                                  <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px" viewBox="0 0 28 28" version="1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 14l8 7L24 7"></path>
                                  </svg>
                                </span>
                                <p class="checkbox__textwrapper">I agree to receive communication on WhatsApp <span class="star-color">*</span></p>
                              </label>
                            </div>
                          </div>
                          <div class="single-field">
                            <div class="checkbox-wrapper-33">
                              <label class="checkbox">
                                <input class="checkbox__trigger visuallyhidden" type="checkbox" name="confirmation" value="1">
                                <span class="checkbox__symbol">
                                  <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px" viewBox="0 0 28 28" version="1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 14l8 7L24 7"></path>
                                  </svg>
                                </span>
                                <p class="checkbox__textwrapper">I hereby confirm that the information provided is accurate, correct and complete <span class="star-color">*</span></p>
                              </label>
                            </div>
                          </div>
                          <div class="single-field">
                            <div class="checkbox-wrapper-33">
                              <label class="checkbox">
                                <input class="checkbox__trigger visuallyhidden" type="checkbox" name="agree_terms" value="1">
                                <span class="checkbox__symbol">
                                  <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px" viewBox="0 0 28 28" version="1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 14l8 7L24 7"></path>
                                  </svg>
                                </span>
                                <p class="checkbox__textwrapper">I have read the Terms and Conditions and provide my consent by submitting the information <span class="star-color">*</span></p>
                              </label>
                            </div>
                          </div>
                        </div>
                      <div id="button_div" style="display:none;">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="single-field mb-0">
                              <button class="button-1" type="submit" name="submit">Submit</button>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="single-field mb-0">
                              <a href="{{route('investor_register_step3_show',['unique_code'=>$unique_code])}}" class="button-1" style="padding: 12px 20px;font-size: 18px;display: inline-block;width: 100%;text-align:center;" type="submit">Cancel</a>
                            </div>
                          </div>
                        </div>
                      </div>  
                    <!-- <div class="single-field text-center confidential">
                      <a href="#">Privileged & Confidential</a>
                    </div> -->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>

    $(document).ready(function(){ 
        $("#legal_country").change(function() {
          
          const selectedVal = $(this).val();
          if(selectedVal == 'India')
          {
            document.getElementById('legal_country_div').style.display = 'block'; 
            document.getElementById('note_confirm_div').style.display = 'block';
            document.getElementById('button_div').style.display = 'block';
          }else{
            document.getElementById('legal_country_div').style.display = 'block';
            document.getElementById('note_confirm_div').style.display = 'block';
            document.getElementById('button_div').style.display = 'block';
          }
        });
      }); 

      function change_register(){
        
          var getSelectedValue = document.querySelector( 'input[name="Self"]:checked');   
          if(getSelectedValue != null) {      
              if(getSelectedValue.value == 'Legal Entity'){
                
                document.getElementById('section_legal_div').style.display = 'block';
                document.getElementById('section_self_div').style.display = 'none';
                // document.getElementById('pan_note_div').style.display = 'block';
                
              }else{
                
                document.getElementById('section_legal_div').style.display = 'none';
                document.getElementById('section_self_div').style.display = 'block';
                // document.getElementById('pan_note_div').style.display = 'none';
                
              }  
          }  
       
      }
      function change(){
          var getSelectedValue = document.querySelector( 'input[name="pancard"]:checked');   
          if(getSelectedValue != null) {      
              if(getSelectedValue.value == 'No'){
                //document.getElementById('pan_note_div').style.display = 'block';
                document.getElementById('note_confirm_div').style.display = 'block';
                document.getElementById('button_div').style.display = 'block';
              }else{
                //document.getElementById('pan_note_div').style.display = 'none';
                document.getElementById('note_confirm_div').style.display = 'block';
                document.getElementById('button_div').style.display = 'block';
              }  
          }  
       
      }

      function change1(){
          var getSelectedValue = document.querySelector( 'input[name="indian_origin"]:checked');   
          if(getSelectedValue != null) {      
              if(getSelectedValue.value == 'Yes'){
                document.getElementById('oci_card_div').style.display = 'block';
                document.getElementById('note_confirm_div').style.display = 'block';
                // document.getElementById('pan_note_div').style.display = 'none';
                document.getElementById('button_div').style.display = 'block';
              }else{
                document.getElementById('oci_card_div').style.display = 'none';
                // document.getElementById('pan_note_div').style.display = 'block';
                document.getElementById('note_confirm_div').style.display = 'block';
                document.getElementById('button_div').style.display = 'block';
              }  
          }  
       
      }
      function change2(){
          var getSelectedValue = document.querySelector( 'input[name="oci_card"]:checked');   
          if(getSelectedValue != null) {      
              if(getSelectedValue.value == 'No'){
                //document.getElementById('oci_card_note_div').style.display = 'block';
                
              }else{
                //document.getElementById('oci_card_note_div').style.display = 'none';
              }  
          }  
       
      }

      $(document).ready(function(){ 
        $("#nationality").change(function() {
          
          const selectedVal = $(this).val();
          if(selectedVal == 'Indian')
          {
            document.getElementById('nationality_div').style.display = 'block'; 
            document.getElementById('other_nationality_div').style.display = 'none';
          }else{
            document.getElementById('nationality_div').style.display = 'none';
            document.getElementById('other_nationality_div').style.display = 'block';
          }
        });
      });
        
    </script>
@endsection