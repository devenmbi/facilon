@extends('layouts.frontend-header')
@section('content')
<section class="login-form-style4 steps4-sec section-padding align-items-center"
      style="background-image:url('https://anvaya.online/facilon/public/frontend/images/banner/2125.jpg');">
      <div class="container ">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-12 col-sm-12">
            <div class="lgf4_Left_content">
              <h3>Broker <span>Registration</span> </h3>
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
                  <form action="{{route('service_provider_register_step2_submit')}}" data-bitwarden-watching="1" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="unique_code" value="{{ $unique_code }}">
                    
                    <div class="single-field intro-name">
                      <label for="username"><span class="referred-name">Primary Contact Details </span>
                      </label>
                    </div>

                    <div class="name-sec" id="section_self_div" >
                      
                      <div class="row">
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Primary Contact 1 - Name: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="primary1_name" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i>Primary Contact 1 - Phone: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="primary1_phone" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Primary Contact 1 - Email: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="primary1_email" value="">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Primary Contact 2 - Name: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="primary2_name" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i>Primary Contact 2 - Phone: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="primary2_phone" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Primary Contact 2 - Email: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="primary2_email" value="">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Primary Contact 3 - Name: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="primary3_name" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i>Primary Contact 3 - Phone: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="primary3_phone" value="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Primary Contact 3 - Email: <span class="star-color">*</span>
                            </label>
                           
                            <input type="text" name="primary3_email" value="">
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