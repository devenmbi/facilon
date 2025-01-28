<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Registration - Individual</title>
    <!-- Bootstrap 4 or 5 CDN for grid system -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h4 {
  font-size: 20px !important;
}
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            /* font-weight: bold; */
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="tel"], input[type="number"], select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="container">
        <center><u><h4>Client Registration - Individual</h4></u></center>
<br>
        <form action="/submit" method="post">

            <center><h4>Personal Information</h4></center>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first-name">Client Name</label>
                    <input type="text" class="form-control" id="first-name" name="first_name" required>
                </div>
                <div class="col-md-6">
                    <label for="dob">Branch Name</label>
                    <input type="text" class="form-control" id="branch_name" name="branch_name" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="email">Client Code</label>
                    <input type="text" class="form-control" id="client_code" name="client_code" required>
                </div>
                <div class="col-md-6">
                    <label for="phone">Client ID</label>
                    <input type="text" class="form-control" id="client_id" name="client_id" required>
                </div>
            </div>


            <div class="form-group">
                
            </div>
            <center><h4>Central KYC Registry - First Holder</h4></center>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="first-name">First Name</label>
                    <input type="text" class="form-control" id="first-name" name="first_name1" required>
                </div>
                <div class="col-md-4">
                    <label for="middle-name">Middle Name</label>
                    <input type="text" class="form-control" id="middle-name" name="middle_name1">
                </div>
                <div class="col-md-4">
                    <label for="last-name">Last Name</label>
                    <input type="text" class="form-control" id="last-name" name="last_name1" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="first-name">Father / Spouse Name</label>
                    <input type="text" class="form-control" id="father-name" name="father_name1" required>
                </div>
                <div class="col-md-4">
                    <label for="middle-name">Mother Name</label>
                    <input type="text" class="form-control" id="mother-name" name="mother_name1">
                </div>
                <div class="col-md-4">
                    <label for="last-name">DOB</label>
                    <input type="date" class="form-control" id="last-name" name="dob1" required>
                </div>
            </div>
            <div class="form-group row gender-checkboxes">
                <div class="col-md-3">
                    <label for="middle-name">Gender : </label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="Male">Male
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="Female">Female
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="Transgender">Transgender
                    <label class="form-check-label" for="radio1"></label>
                </div>
            </div>
            <div class="form-group row gender-checkboxes">
                <div class="col-md-3">
                    <label for="middle-name">Marital Status : </label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="marital_status" value="Married">Married
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="marital_status" value="Unmarried">Unmarried
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="marital_status" value="Other">Other
                    <label class="form-check-label" for="radio1"></label>
                </div>
            </div>
            <div class="form-group row gender-checkboxes">
                <div class="col-md-3">
                    <label for="middle-name">Citizenship : </label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="citizenship" value="Married">Indian
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="citizenship" value="Other">Other
                    <label class="form-check-label" for="radio1"></label>
                </div>
                
            </div>
            <div class="form-group">
                <label for="middle-name">Residential Status : </label>
            </div>
            <div class="form-group row" style="padding: 0px 1px 1px 19px !important;">
                
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="residential_status" value="Resident Individual">Resident Individual
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="residential_status" value="Non Resident Indian">Non Resident Indian
                    <label class="form-check-label" for="radio1"></label>
                </div>
               
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="residential_status" value="Foreign National">Foreign National
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="residential_status" value="Person of Indian Origin">Person of Indian Origin
                    <label class="form-check-label" for="radio1"></label>
                </div>
            </div>
            <div class="form-group">
                <label for="middle-name">Occupation Type : </label>
            </div>
            <div class="form-group row" style="padding: 0px 1px 1px 19px !important;">
                
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="residential_status" value="Resident Individual">Service
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="residential_status" value="Non Resident Indian">Private Sector
                    <label class="form-check-label" for="radio1"></label>
                </div>
               
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="residential_status" value="Foreign National">Public Sector
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="residential_status" value="Person of Indian Origin">Govt Sector
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="residential_status" value="Resident Individual">others
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="residential_status" value="Non Resident Indian">Professional
                    <label class="form-check-label" for="radio1"></label>
                </div>
               
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="residential_status" value="Foreign National">Self Employed
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="residential_status" value="Person of Indian Origin">Retired
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="residential_status" value="Non Resident Indian">Housewife
                    <label class="form-check-label" for="radio1"></label>
                </div>
               
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="residential_status" value="Foreign National">Student
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="residential_status" value="Person of Indian Origin">Business
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="col-md-3">
                    <input type="radio" class="form-check-input" id="radio1" name="residential_status" value="Person of Indian Origin">Not Categorized
                    <label class="form-check-label" for="radio1"></label>
                </div>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="residence_outside_india" name="residence_outside_india" value="something">
      <label class="form-check-label" for="residence_outside_india">Residence for TAX purposes in Jurisdiction outside India</label>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first-name">ISO 3166 country Code of Jurisdiction</label>
                    <input type="text" class="form-control" id="father-name" name="father_name1" required>
                </div>
                <div class="col-md-6">
                    <label for="middle-name">TAX Identification No.</label>
                    <input type="text" class="form-control" id="mother-name" name="mother_name1">
                </div>
                <div class="col-md-6">
                    <label for="last-name">Place/City of Birth</label>
                    <input type="date" class="form-control" id="last-name" name="dob1" required>
                </div>
                <div class="col-md-6">
                    <label for="last-name">ISO 3166 Country code of Birth</label>
                    <input type="date" class="form-control" id="last-name" name="dob1" required>
                </div>
            </div>
            <div class="form-group">
                <label for="middle-name">Proof of Identity : </label>
            </div>
            <div class="form-group row">
                <div class="col-md-6 form-check">
                    <input type="checkbox" class="form-check-input" id="residence_outside_india" name="residence_outside_india" value="something">
                    <label class="form-check-label" for="residence_outside_india">Passport Number</label>
                </div>
                <div class="col-md-6">
                    
                    <input type="text" class="form-control" id="father-name" name="father_name1" required>
                </div>
                <div class="col-md-6 form-check">
                    <input type="checkbox" class="form-check-input" id="residence_outside_india" name="residence_outside_india" value="something">
                    <label class="form-check-label" for="residence_outside_india">Voter ID Card</label>
                </div>
                <div class="col-md-6">
                    
                    <input type="text" class="form-control" id="father-name" name="father_name1" required>
                </div>
                <div class="col-md-6 form-check">
                    <input type="checkbox" class="form-check-input" id="residence_outside_india" name="residence_outside_india" value="something">
                    <label class="form-check-label" for="residence_outside_india">PAN Card</label>
                </div>
                <div class="col-md-6">
                    
                    <input type="text" class="form-control" id="father-name" name="father_name1" required>
                </div>
                <div class="col-md-6 form-check">
                    <input type="checkbox" class="form-check-input" id="residence_outside_india" name="residence_outside_india" value="something">
                    <label class="form-check-label" for="residence_outside_india">Driving Licence</label>
                </div>
                <div class="col-md-6">
                    
                    <input type="text" class="form-control" id="father-name" name="father_name1" required>
                </div>
                <div class="col-md-6 form-check">
                    <input type="checkbox" class="form-check-input" id="residence_outside_india" name="residence_outside_india" value="something">
                    <label class="form-check-label" for="residence_outside_india">UID(Aadhaar)</label>
                </div>
                <div class="col-md-6">
                    
                    <input type="text" class="form-control" id="father-name" name="father_name1" required>
                </div>
                <div class="col-md-6 form-check">
                    <input type="checkbox" class="form-check-input" id="residence_outside_india" name="residence_outside_india" value="something">
                    <label class="form-check-label" for="residence_outside_india">NREGA Job Card</label>
                </div>
                <div class="col-md-6">
                    
                    <input type="text" class="form-control" id="father-name" name="father_name1" required>
                </div>
            </div>
            
            <!-- Submit -->
            <div class="form-group">
                <input type="submit" class="btn btn-success btn-block" value="Submit">
            </div>

        </form>
    </div>

    <!-- Bootstrap JS, Popper.js and jQuery (Optional but needed for some features like dropdowns) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
