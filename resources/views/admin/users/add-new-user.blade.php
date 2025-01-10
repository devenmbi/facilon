@extends('layouts.admin-header')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-xl-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div>
                                <h5 class="mb-1">Add New User</h5>
                            </div>
                            <div class="card-content mt-4">
                                <form action="{{route('admin.new_user_insert')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    @php
                                                        $get_all_service_providers = DB::table('service_providers')
                                                                                    ->get();

                                                    @endphp
                                                    <label>Service Provider Type <span class="text-danger"> *</span></label>
                                                    <select class="form-control" name="service_provider_type" id="service_provider_type">
                                                        <option value="0">Select Service Provider</option>
                                                        @foreach($get_all_service_providers as $all_service_providers)
                                                        <option value="{{$all_service_providers->id}}">{{$all_service_providers->title}}</option>
                                                        @endforeach
                                                    </select>   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <a hrf="" class="btn btn-xs btn-primary" onclick="my_dive_open();" style="margin-top:6% !important;">Proceed</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" id="myDiv" style="display:none;">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-6">
                                                   
                                                    <label>Name<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="full_name">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Tel<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="tel_no">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Fax<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="fax_no">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Website<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="website">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>CIN No<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="cin_no">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>NSE SEBI Reg No<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="nse_sebi_reg_no">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>NSE F&O SEBI Reg No<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="nse_f_and_o_sebi_reg_no">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>BSE SEBI Reg No<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="bse_sebi_reg_no">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>NSE F&O SEBI Reg No<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="bse_f_and_o_sebi_reg_no">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Primary Contact Name1<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="primary1_name">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Primary Contact Phone1 <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="primary1_phone">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Primary Contact Email1<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="primary1_email">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Primary Contact Name2<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="primary2_name">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Primary Contact Phone2 <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="primary2_phone">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Primary Contact Email2<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="primary2_email">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Primary Contact Name3<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="primary3_name">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Primary Contact Phone3 <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="primary3_phone">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Primary Contact Email3<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="primary3_email">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Escalation Contact Name1<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="escalation1_name">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Escalation Contact Phone1 <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="escalation1_phone">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Escalation Contact Email1<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="escalation1_email">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Escalation Contact Name2<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="escalation2_name">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Escalation Contact Phone2 <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="escalation2_phone">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Escalation Contact Email2<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="escalation2_email">  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="myDiv4" style="display:none;">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-6">
                                                   
                                                    <label>Bank Name<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="bank_name">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Contact Person Name <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="contact_person_name">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Address Line 1<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="address_line1">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Address Line 2<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="address_line2">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Email ID<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="email_id">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Phone no<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="bank_phone">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Phone No (Contact Person)<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="contact_phone_no">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Country<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="country">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>State<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="state">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>City<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="city">  
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label>Pincode / Zipcode<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="pin_zip_code">  
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <button type="submit" name="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
    <script>
        function my_dive_open() {
    // Get the selected value of the dropdown
    var selectedValue = document.getElementById("service_provider_type").value;
    //console.log("Selected value: " + selectedValue);
//alert(selectedValue);
    if(selectedValue == 1 || selectedValue == 2 || selectedValue == 3)
    {
        document.getElementById("myDiv").style.display = "block";
        document.getElementById("myDiv4").style.display = "none";

    }else if(selectedValue == '4'){
        document.getElementById("myDiv4").style.display = "block";
        document.getElementById("myDiv").style.display = "none";
    }else{
        alert('');
    }

    // Hide the div
    
}
    </script>
@endsection
