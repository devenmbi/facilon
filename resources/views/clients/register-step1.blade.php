@extends('layouts.frontend-header')
<style>
    .form-control {
        height: 48px !important;
        border: 1px solid #3a3535 !important;
        border-radius: 5px !important;
    }
</style>
@section('content')
    <section class="login-form-style4 steps4-sec section-padding align-items-center" style="background-image:url('https://anvaya.online/facilon/public/frontend/images/banner/2125.jpg');">
        <div class="container ">
            <div class="row align-items-center">
                {{-- <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="lgf4_Left_content">
                        <h3>Service Provider <span>Registration</span> </h3>
                        <p>Currently we are only registering the expression of interest in the India Securities market</p>
                    </div>
                </div> --}}
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login-form-style3-main">
                        <div class="login-form-style3-main_full">
                            <div class="login-register3-form-middle">
                                <form action="{{ route('submit') }}" data-bitwarden-watching="1" method="post">
                                    @csrf

                                    <div class="name-sec" id="section_self_div">
                                        <div class="row" style="margin-bottom: 40px !important;">
                                            <div class="col-md-4 mb-3">
                                                <label for="username">
                                                    Client Name : <span class="star-color">*</span>
                                                </label>
                                                <input type="text" class="form-control @error('client_name') is-invalid @enderror" id="client_name" name="client_name" value="{{ old('client_name') }}">
                                                @error('client_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-4" style="margin-bottom: 3px !important;">
                                                <label for="username">
                                                    Branch Name : <span class="star-color">*</span>
                                                </label>
                                                <input type="text" class="form-control @error('branch_name') is-invalid @enderror" id="branch_name" name="branch_name" value="{{ old('branch_name') }}">
                                                @error('branch_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-4" style="margin-bottom: 3px !important;">
                                                <label for="client_code">
                                                    Client Code : <span class="star-color">*</span>
                                                </label>
                                                <input type="text" class="form-control @error('client_code') is-invalid @enderror" id="client_code" name="client_code" value="{{ old('client_code') }}">
                                                @error('client_code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-4" style="margin-bottom: 3px !important;">
                                                <label for="client_id">
                                                    Client ID : <span class="star-color">*</span>
                                                </label>
                                                <input type="text" class="form-control @error('client_id') is-invalid @enderror" id="client_id" name="client_id" value="{{ old('client_id') }}">
                                                @error('client_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="row" style="margin-bottom: 40px !important;">
                                            {{-- Add Title --}}
                                            <h2 class="text-danger"><b>Central KYC Registry - First Holder</b></h2>

                                            <div class="col-md-12" style="padding: 6px !important;">
                                                <div class="col-md-4">
                                                    <label for="application_type">Application Type : <span class="text-danger">*</span></label>
                                                    <select class="form-control @error('application_type') is-invalid @enderror" id="application_type" name="application_type">
                                                        <option value="" disabled selected>Select Application Type</option>
                                                        <option value="1" {{ old('application_type') == '1' ? 'selected' : '' }} selected="selected">New</option>
                                                        <option value="2" {{ old('application_type') == '2' ? 'selected' : '' }}>Existing</option>
                                                    </select>
                                                    @error('application_type')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="kyc_number">KYC Number : <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control @error('kyc_number') is-invalid @enderror" id="kyc_number" name="kyc_number" value="{{ old('kyc_number') }}">
                                                    @error('kyc_number')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="account_type">Account Type : <span class="text-danger">*</span></label>
                                                    <select class="form-control @error('account_type') is-invalid @enderror" id="account_type" name="account_type">
                                                        <option value="" disabled selected>Select Account Type</option>
                                                        <option value="1" {{ old('account_type') == '1' ? 'selected' : '' }}>Normal</option>
                                                        <option value="2" {{ old('account_type') == '2' ? 'selected' : '' }}>Simplified(for low risk customer)</option>
                                                        <option value="3" {{ old('account_type') == '3' ? 'selected' : '' }}>Small</option>
                                                    </select>
                                                    @error('account_type')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        {{-- User Details --}}
                                        <div class="row" style="margin-bottom: 40px !important;">
                                            {{-- Add Title --}}
                                            <h2 class="text-danger"><b>Central KYC Registry - First Holder</b></h2>
                                            <div class="col-md-12" style="padding: 6px !important;">
                                                <h3 class="text-dark text-capitalize"><b>[1.] &nbsp;&nbsp;Personal Details</b></h3>
                                                <div class="col-md-12" style="margin-left: 20px !important; margin-bottom: 20px !important;">
                                                    <h4 class="text-dark"><b>Name (Same as ID Proof) : <span class="text-danger">*</span></b></h2>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label for="prefix">Prefix : <span class="text-danger">*</span></label>
                                                            <select class="form-control @error('prefix') is-invalid @enderror" id="prefix" name="prefix">
                                                                <option value="" disabled selected>Select Prefix</option>
                                                                <option value="1" {{ old('prefix') == '1' ? 'selected' : '' }}>Mr.</option>
                                                                <option value="2" {{ old('prefix') == '2' ? 'selected' : '' }}>Mrs.</option>
                                                                <option value="3" {{ old('prefix') == '3' ? 'selected' : '' }}>Shri.</option>
                                                                <option value="4" {{ old('prefix') == '4' ? 'selected' : '' }}>Shrimati</option>
                                                            </select>
                                                            @error('prefix')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="first-name">First Name : <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first-name" name="first_name" value="{{ old('first_name') }}" placeholder="Enter First Name">
                                                            @error('first_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="middle-name">Middle Name : <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control @error('middle_name') is-invalid @enderror" id="middle-name" name="middle_name" value="{{ old('middle_name') }}" placeholder="Enter Middle Name">
                                                            @error('middle_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="last-name">Last Name : <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last-name" name="last_name" value="{{ old('last_name') }}" placeholder="Enter Last Name">
                                                            @error('last_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12" style="margin-left: 20px !important; margin-bottom: 20px !important;">
                                                    <h4 class="text-dark"><b>Maiden Name (if any) : <span class="text-danger">*</span></b></h2>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label for="prefix">Prefix : <span class="text-danger">*</span></label>
                                                            <select class="form-control @error('maiden_prefix') is-invalid @enderror" id="maiden_prefix" name="maiden_prefix">
                                                                <option value="" disabled selected>Select Prefix</option>
                                                                <option value="1" {{ old('maiden_prefix') == '1' ? 'selected' : '' }}>Mr.</option>
                                                                <option value="2" {{ old('maiden_prefix') == '2' ? 'selected' : '' }}>Miss.</option>
                                                                <option value="3" {{ old('maiden_prefix') == '3' ? 'selected' : '' }}>Shri.</option>
                                                                <option value="4" {{ old('maiden_prefix') == '4' ? 'selected' : '' }}>Shrimati</option>
                                                            </select>
                                                            @error('maiden_prefix')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label for="first-name">First Name : <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control @error('maiden_first_name') is-invalid @enderror" id="first-name" name="maiden_first_name" value="{{ old('maiden_first_name') }}" placeholder="Enter First Name">
                                                            @error('maiden_first_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="middle-name">Middle Name : <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control @error('maiden_middle_name') is-invalid @enderror" id="middle-name" name="maiden_middle_name" value="{{ old('maiden_middle_name') }}" placeholder="Enter Middle Name">
                                                            @error('maiden_middle_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="last-name">Last Name : <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control @error('maiden_last_name') is-invalid @enderror" id="last-name" name="maiden_last_name" value="{{ old('maiden_last_name') }}" placeholder="Enter Last Name">
                                                            @error('maiden_last_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12" style="margin-left: 20px !important; margin-bottom: 20px !important;">
                                                    <h4 class="text-dark"><b>Father / Spouse Name : <span class="text-danger">*</span></b></h2>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label for="prefix">Prefix : <span class="text-danger">*</span></label>
                                                            <select class="form-control @error('father_prefix') is-invalid @enderror" id="father_prefix" name="father_prefix">
                                                                <option value="" disabled selected>Select Prefix</option>
                                                                <option value="1" {{ old('father_prefix') == '1' ? 'selected' : '' }}>Mr.</option>
                                                                <option value="2" {{ old('father_prefix') == '2' ? 'selected' : '' }}>Miss.</option>
                                                                <option value="3" {{ old('father_prefix') == '3' ? 'selected' : '' }}>Shri.</option>
                                                                <option value="4" {{ old('father_prefix') == '4' ? 'selected' : '' }}>Shrimati</option>
                                                            </select>
                                                            @error('father_prefix')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label for="first-name">First Name : <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control @error('father_first_name') is-invalid @enderror" id="first-name" name="father_first_name" value="{{ old('father_first_name') }}" placeholder="Enter First Name">
                                                            @error('father_first_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="middle-name">Middle Name : <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control @error('father_middle_name') is-invalid @enderror" id="middle-name" name="father_middle_name" value="{{ old('father_middle_name') }}" placeholder="Enter Middle Name">
                                                            @error('father_middle_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="last-name">Last Name : <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control @error('father_last_name') is-invalid @enderror" id="last-name" name="father_last_name" value="{{ old('father_last_name') }}" placeholder="Enter Last Name">
                                                            @error('father_last_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12" style="margin-left: 20px !important; margin-bottom: 20px !important;">
                                                    <h4 class="text-dark"><b>Mother Name : <span class="text-danger">*</span></b></h2>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label for="prefix">Prefix : <span class="text-danger">*</span></label>
                                                            <select class="form-control @error('mother_prefix') is-invalid @enderror" id="mother_prefix" name="mother_prefix">
                                                                <option value="" disabled selected>Select Prefix</option>
                                                                <option value="1" {{ old('mother_prefix') == '1' ? 'selected' : '' }}>Mr.</option>
                                                                <option value="2" {{ old('mother_prefix') == '2' ? 'selected' : '' }}>Miss.</option>
                                                                <option value="3" {{ old('mother_prefix') == '3' ? 'selected' : '' }}>Shri.</option>
                                                                <option value="4" {{ old('mother_prefix') == '4' ? 'selected' : '' }}>Shrimati</option>
                                                            </select>
                                                            @error('mother_prefix')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label for="first-name">First Name : <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control @error('mother_first_name') is-invalid @enderror" id="first-name" name="mother_first_name" value="{{ old('mother_first_name') }}" placeholder="Enter First Name">
                                                            @error('mother_first_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="middle-name">Middle Name : <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control @error('mother_middle_name') is-invalid @enderror" id="middle-name" name="mother_middle_name" value="{{ old('mother_middle_name') }}" placeholder="Enter Middle Name">
                                                            @error('mother_middle_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="last-name">Last Name : <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control @error('mother_last_name') is-invalid @enderror" id="last-name" name="mother_last_name" value="{{ old('mother_last_name') }}" placeholder="Enter Last Name">
                                                            @error('mother_last_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12" style="margin-left: 20px !important; margin-bottom: 20px !important;">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label for="first-name">Date Of Birth : <span class="text-danger">*</span></label>
                                                            <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" id="first-name" name="date_of_birth" value="{{ old('date_of_birth') }}" placeholder="Enter Date Of Birth">
                                                            @error('date_of_birth')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label for="prefix">Gender : <span class="text-danger">*</span></label>
                                                            <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
                                                                <option value="" disabled selected>Select Gender</option>
                                                                <option value="1" {{ old('gender') == '1' ? 'selected' : '' }}>M - Male</option>
                                                                <option value="2" {{ old('gender') == '2' ? 'selected' : '' }}>F - Femail</option>
                                                                <option value="3" {{ old('gender') == '3' ? 'selected' : '' }}>T - Transgender</option>
                                                            </select>
                                                            @error('gender')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label for="prefix">Marital Status : <span class="text-danger">*</span></label>
                                                            <select class="form-control @error('marital_status') is-invalid @enderror" id="marital_status" name="marital_status">
                                                                <option value="" disabled selected>Select Marital Status</option>
                                                                <option value="1" {{ old('marital_status') == '1' ? 'selected' : '' }}>Married</option>
                                                                <option value="2" {{ old('marital_status') == '2' ? 'selected' : '' }}>Unmarried</option>
                                                                <option value="3" {{ old('marital_status') == '3' ? 'selected' : '' }}>Others</option>
                                                            </select>
                                                            @error('marital_status')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label for="last-name">Citizenship : <span class="text-danger">*</span></label>
                                                            <select class="form-control @error('citizenship') is-invalid @enderror" id="citizenship" name="citizenship">
                                                                <option value="" disabled selected>Select Citizenship</option>
                                                                <option value="1" {{ old('citizenship') == '1' ? 'selected' : '' }}>IN - Indian</option>
                                                                <option value="2" {{ old('citizenship') == '2' ? 'selected' : '' }}>Others</option>
                                                            </select>
                                                            @error('mother_last_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12" style="margin-left: 20px !important; margin-bottom: 20px !important;">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="prefix">Residenital Status : <span class="text-danger">*</span></label>
                                                            <select class="form-control @error('residenital_status') is-invalid @enderror" id="residenital_status" name="residenital_status">
                                                                <option value="" disabled selected>Select Residenital Status</option>
                                                                <option value="1" {{ old('residenital_status') == '1' ? 'selected' : '' }}>Resident Individual</option>
                                                                <option value="2" {{ old('residenital_status') == '2' ? 'selected' : '' }}>Non-Resident Indian</option>
                                                                <option value="3" {{ old('residenital_status') == '3' ? 'selected' : '' }}>Foreign National</option>
                                                                <option value="4" {{ old('residenital_status') == '4' ? 'selected' : '' }}>Person of Indian Origin</option>
                                                            </select>
                                                            @error('residenital_status')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="prefix">Occupation Type : <span class="text-danger">*</span></label>
                                                            <select class="form-control @error('occupation_type') is-invalid @enderror" id="occupation_type" name="occupation_type">
                                                                <option value="" disabled selected>Select Occupation Type</option>
                                                                <option value="1" {{ old('occupation_type') == '1' ? 'selected' : '' }}>S - Service (Private Sector)</option>
                                                                <option value="2" {{ old('occupation_type') == '2' ? 'selected' : '' }}>Public Sector</option>
                                                                <option value="3" {{ old('occupation_type') == '3' ? 'selected' : '' }}>Government Sector</option>
                                                                <option value="4" {{ old('occupation_type') == '4' ? 'selected' : '' }}>O - Others (Professional)</option>
                                                                <option value="5" {{ old('occupation_type') == '5' ? 'selected' : '' }}>Self Employed</option>
                                                                <option value="6" {{ old('occupation_type') == '6' ? 'selected' : '' }}>Retired</option>
                                                                <option value="7" {{ old('occupation_type') == '7' ? 'selected' : '' }}>B - Business</option>
                                                                <option value="8" {{ old('occupation_type') == '8' ? 'selected' : '' }}>Housewife</option>
                                                                <option value="9" {{ old('occupation_type') == '9' ? 'selected' : '' }}>Student</option>
                                                                <option value="10" {{ old('occupation_type') == '10' ? 'selected' : '' }}>X - Not Categorised</option>
                                                            </select>
                                                            @error('occupation_type')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="prefix">Upload Profile Pic : <span class="text-danger">*</label>
                                                            <input type="file" onchange="agentPreviewFile()" accept=".png, .jpg, .jpeg, .webp" class="form-control @error('profile_pic') is-invalid @enderror" id="profile-pic" name="profile_pic" value="{{ old('profile_pic') }}">
                                                            </span><small class="text-secondary"><b>(Files must be JPG/PNG/JPEG/WEBP, Under 2MB.)</b></small>
                                                            <br>
                                                            @error('profile_pic')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <br>
                                                            <div id="preview-container">
                                                                <div id="file-preview"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="button_div" class="mt-80">
                                        <div class="row" style="display: flex; flex-wrap: wrap; align-content: space-between; justify-content: center; justify-content: center;">
                                            <div class="col-md-4">
                                                <div class="single-field mb-0">
                                                    <button class="button-1" type="submit" name="submit">Submit</button>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6">
                                                <div class="single-field mb-0">
                                                    <a href="" class="button-1" style="padding: 12px 20px;font-size: 18px;display: inline-block;width: 100%;text-align:center;" type="submit">Cancel</a>
                                                </div>
                                            </div> --}}
                                        </div>
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