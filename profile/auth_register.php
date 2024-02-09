<script type="text/javascript">
  function alertifySuccess()
  {
    alertify.alert("Info", "Registration Success", function() {
      window.location = 'auth_login.php';
      alertify.success("Ok");

    });
    return false;
  }
</script>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Premium Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

   <!-- alertifyjs Css -->
    <link href="assets/libs/alertifyjs/build/css/alertify.min.css" rel="stylesheet" type="text/css" />

    <!-- alertifyjs default themes  Css -->
    <link href="assets/libs/alertifyjs/build/css/themes/default.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link
      href="assets/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    
  </head>

  <body class="bg-primary bg-pattern" style = "background-color: #00204a !important">
    <div class="account-pages pt-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <div clas="row">
                <h5 class="font-size-20 text-white mb-3">
                  <img src="assets/images/favicon.ico" height="24" alt="logo" />
                  NovaFinance
                </h5>
              </div>
              <h5 class="font-size-16 text-white-50 mb-3">
                A tradition of trust
              </h5>
            </div>
          </div>
        </div>
        <!-- end row -->

        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Register Here</h4>              
                                
                                        <form class="needs-validation" enctype="multipart/form-data" novalidate>
                                          <h4>Personal Details</h4> <hr>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                  <label for="validationTooltip01">First name</label>
                                                  <input type="text" name="txt_fname" class="form-control" id="validationTooltip01" placeholder="First name" value="" required>
                                                  <div class="valid-feedback">
                                                    Looks good!
                                                  </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                  <label for="validationTooltip02">Last name</label>
                                                  <input type="text" name="txt_lname" class="form-control" id="validationTooltip02" placeholder="Last name" value="" required>
                                                  <div class="valid-feedback">
                                                    Looks good!
                                                  </div>
                                                </div>
                                                
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                  <h5 class="font-size-14 mb-3">Gender</h5>
                                                    
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="txt_gender" value="M" id="custominlineRadio1" name="custominlineRadio" class="custom-control-input" checked>
                                                        <label class="custom-control-label" for="custominlineRadio1">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="txt_gender" value="F" id="custominlineRadio2" name="custominlineRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="custominlineRadio2">Female</label>
                                                    </div>
                                                </div>
                
                                                <div class="col-md-4 mb-3">
                                                  <div class="form-group mb-4">
                                                    <label>Birth Date</label>
                                                    <div class="input-group">
                                                      <input type="text" name="txt_bdate" class="form-control" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true">
                                                      <div class="input-group-append">
                                                          <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                      </div>
                                                    </div><!-- input-group -->
                                                  </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                <label for="validationTooltip01">Mobile</label>
                                                <input type="text" name="txt_mobile" class="form-control" id="validationTooltip01" placeholder="Mobile" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                <label for="validationTooltip02">Email</label>
                                                <input type="text" name="txt_email" class="form-control" id="validationTooltip02" placeholder="Email Id" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                </div>
                                                
                                            </div>


                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                  <label for="validationTooltip03">Address</label>
                                                  <input type="text" name="txt_address" class="form-control" id="validationTooltip03" placeholder="Address" required>
                                                  <div class="invalid-feedback">
                                                    Please provide a valid Address.
                                                  </div>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                  <label for="validationTooltip03">Country</label>
                                                  <select id="countriesDropdown"  name="txt_country" class="custom-select" required>
                                                  </select>
                                                  <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                  </div>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                  <label for="validationTooltip03">City</label>
                                                  <input type="text" name="txt_city" class="form-control" id="validationTooltip03" placeholder="City" required>
                                                  <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                  </div>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                  <label for="validationTooltip04">State</label>
                                                  <input type="text" name="txt_state" class="form-control" id="validationTooltip04" placeholder="State" required>
                                                  <div class="invalid-feedback">
                                                    Please provide a valid state.
                                                  </div>
                                                </div>

                                                <div class="col-md-2 mb-3">
                                                  <label for="validationTooltip04">Zip</label>
                                                  <input type="text" name="txt_zip" class="form-control" id="validationTooltip04" placeholder="Zip" required>
                                                  <div class="invalid-feedback">
                                                    Please provide a valid state.
                                                  </div>
                                                </div>
                                            </div>

                                            <h4>Employment Information</h4> <hr>
                                            <div class="row">
                                                  <div class="col-md-3 mb-3">
                                                    <label>Occupation</label>
                                                    <select name="txt_occupation" class="custom-select" required>
                                                        <option value="">SELECT EMPLOYMENT TYPE</option>
                                                        <option value="self_employed">Self Employed</option>
                                                        <option value="government_office">Public/Government Office</option>
                                                        <option value="private_office">Private/Partnership Office</option>
                                                        <option value="business">Business/Sales</option>
                                                        <option value="trading">Trading/Market</option>
                                                        <option value="military">Military/paramilitary</option>
                                                        <option value="politician">Politician/Celebrity</option>
                                                    </select>
                                                    <div class="invalid-feedback">select employment type</div>
                                                  </div>

                                                  <div class="col-md-3 mb-3">
                                                    <label>Annual Income range</label>
                                                    <select name="txt_annual_income" class="custom-select" required>
                                                        <option value="">SELECT SALARY RANGE</option>
                                                        <option value="$100-$500">$100 - $500</option>
                                                        <option value="$700-$1,000">$700 - $1,000</option>
                                                        <option value="$1,000-$2,000">$1,000 - $2,000</option>
                                                        <option value="$2,000-$5,000">$2,000 - $5,000</option>
                                                        <option value="$5,000-$10,000">$5,000 - $10,000</option>
                                                        <option value="$15,000-$20,000">$15,000 - $20,000</option>
                                                        <!-- <option value="$100-$500">$100 - $500</option> -->
                                                    </select>
                                                    <div class="invalid-feedback">select salary range</div>
                                                  </div>
 
                                            </div>

                                              <h4>Banking Details</h4> <hr>
                                              <div class="row">
                                                <div class="col-md-4 mb-3">
                                                  <label for="validationTooltip03">SSN/TIN(Or equivalence)</label>
                                                  <input type="text" name="txt_ssn" class="form-control" id="validationTooltip03" placeholder="Address" required>
                                                  <div class="invalid-feedback">
                                                    Please provide a valid SSN/TIN(Or equivalence).
                                                  </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                  <label for="validationTooltipUsername">Username</label>
                                                  <div class="input-group">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                                      </div>
                                                      <input type="text" name="txt_username" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                                      <div class="invalid-feedback">
                                                        Please choose a unique and valid username.
                                                      </div>
                                                  </div>
                                                </div>
                                            
                                                <div class="col-md-4 mb-3">
                                                  <label>Password</label>
                                                  <input type="password" name="txt_password" id="pass2" class="form-control" required
                                                            placeholder="Password"/>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                  <label>Confirm Password</label>
                                                  <input type="password" name="txt_repassword" class="form-control" required
                                                            data-parsley-equalto="#pass2"
                                                            placeholder="Re-Type Password"/>
                                                </div>
                                                
                                                  <div class="col-md-3 mb-3">
                                                    <label>Account Type</label>
                                                    <select name="txt_account_type" class="custom-select" required>
                                                        <option value="">SELECT ACCOUNT TYPE</option>
                                                        <option value="CHECKING ACCOUNT">Checking Account</option>
                                                        <option value="SAVING ACCOUNT">Saving Account</option>
                                                        <option value="FIX DEPOSIT ACCOUNT">Fixed Deposit Account</option>
                                                        <option value="CURRENT ACCOUNT">Current Account</option>
                                                        <option value="CRYPTO CURRENCY ACCOUNT">Crypto Currency Account</option>
                                                        <option value="BUSINESS ACCOUNT">Business Account</option>
                                                        <option value="NON RESIDENT ACCOUNT">Non Resident Account</option>
                                                        <option value="COOPERATE BUSINESS ACCOUNT">Cooperate Business Account</option>
                                                        <option value="INVESTMENT ACCOUNT">Investment Account</option>
                                                    </select>
                                                    <div class="invalid-feedback">select account type</div>
                                                  </div>

                                                  <div class="col-md-3 mb-3">
                                                    <label>Transaction Pin</label>
                                                    <input type="number" name="transaction_pin" class="form-control" id="validationTooltipUsername" placeholder="4 digits pin" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-feedback">
                                                    Please choose a valid pin.
                                                    </div>
                                                  </div>

                                                  <div class="col-md-3 mb-3">
                                                    <label>Passport Photograph</label> <br>
                                                    <img id="previewImage" src="assets\images\users\avatar-1.jpg" width="100% ">
                                                    <input type="file" name="file" class="form-control" id="userpassport" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-feedback">
                                                    Please choose a valid file.
                                                    </div>
                                                  </div>
                                              </div>


                                            
                                            
                                            
                                            <button class="btn btn-primary" name="btnSubmit" type="submit">Register</button>
                                            <div class="mt-4 text-right">
                                                    <a href="auth_login.php" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Already have an Account</a>
                                                </div>
                                          </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


   
      </div>
    </div>
    <!-- end Account pages -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

            <!-- validation init -->
        <script src="assets/js/pages/form-validation.init.js"></script>

 <!-- alertifyjs js -->
    <script src="assets/libs/alertifyjs/build/alertify.min.js"></script>
    <script src="assets/js/pages/alertifyjs.init.js"></script>

  <!-- Showing Admin ID in alert after switch to Admin login page-->
    <!-- <script>
      $("#add").submit(function() {
  alertify.alert("Alert Title", "Alert Message!", function() {
    alertify.success("Ok");
    window.location = '/auth-login.php';
  });
  return false;
});

    </script> -->
    

    <script src="assets/js/app.js"></script>
    <script>
    // Fetch the list of countries from the REST Countries API
    fetch('https://restcountries.com/v2/all')
        .then(response => response.json())
        .then(data => {
            const selectElement = document.getElementById("countriesDropdown");

            // Add options to the select element
            data.forEach(country => {
                const option = document.createElement("option");
                option.value = country.name;
                option.text = country.name;
                selectElement.add(option);
            });
        })
        .catch(error => console.error('Error fetching countries:', error));
</script>
<script>
document.getElementById('userpassport').addEventListener('change', function() {
  var fileInput = this;
  var file = fileInput.files[0];

  if (file) {
    var reader = new FileReader();


    reader.onload = function(e) {
      document.getElementById('previewImage').src = e.target.result;
    };

    reader.readAsDataURL(file);
  }
});
</script>
  </body>
</html>



<?php

  include('connect.php');

  if(isset($_REQUEST['btnSubmit']))
  {
    $first_name = $_REQUEST['txt_fname'];
    $last_name = $_REQUEST['txt_lname'];
    $full_name = $first_name . " " . $last_name;

    $gender = $_REQUEST['txt_gender'];
    $birth_date = $_REQUEST['txt_bdate'];
    $birth_date = date("Y-m-d", strtotime($birth_date) );

    $mobile = $_REQUEST['txt_mobile'];
    $email = $_REQUEST['txt_email'];
    $address = $_REQUEST['txt_address'];
    $country = $_REQUEST['txt_country'];
    $city = $_REQUEST['txt_city'];
    $state = $_REQUEST['txt_state'];
    $zip = $_REQUEST['txt_zip'];
    $username = $_REQUEST['txt_username'];
    $password = $_REQUEST['txt_password'];

    $account_type = $_REQUEST['txt_account_type'];
    $transaction_pin = $_REQUEST['transaction_pin'];

    $occupation = $_REQUEST['txt_occupation'];
    $annual_income = $_REQUEST['txt_annual_income'];

    $ssn = $_REQUEST['txt_ssn'];

$targetFile = "";  
if (isset($_FILES["file"])) {
  $targetDirectory = "uploads/";
  $targetFile = $targetDirectory . basename($_FILES["file"]["name"]);

  // Check if file already exists
  if (file_exists($targetFile)) {
      echo "Sorry, the file already exists.";
  } else {
      // Move the uploaded file to the target directory
      if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
          echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
} else {
  echo "<script> alert ('helllo')  </script>";
}
echo "<script> alert ( ". $targetFile. " )  </script>";



    
    // Query for inesrt record in tbl_account
    $query = "INSERT INTO tbl_account (username, password, transaction_pin, ssn) VALUES ('$username', '$password', '$transaction_pin', '$ssn')";
    $result = mysqli_query($con, $query) or die('SQL Error :: '.mysqli_error($con));
    
    if ($result)
    {
      // get account_no from username
      $query_account_no = "SELECT account_no FROM tbl_account WHERE username='$username'";
      $result_account_no = mysqli_query($con, $query_account_no);
      $account_no = mysqli_fetch_array($result_account_no)[0];  // ! [0] for the first value of array
      
      // query for insert record in tbl_customer
      $query_for_tbl_customer = "INSERT INTO tbl_customer (account_no, full_name, gender, birth_date, mobile, email, passport) VALUES ($account_no,'$full_name', '$gender', '$birth_date','$mobile', '$email','$targetFile')";
      
      $result = mysqli_query($con, $query_for_tbl_customer) or die('SQL Error :: '.mysqli_error($con));

      // insert record in tbl_address
      $query_for_tbl_address = "INSERT INTO tbl_address (account_no, home_address, country ,city, state, pincode) VALUES ($account_no,'$address', '$country' ,'$city','$state',$zip)";

      $result = mysqli_query($con, $query_for_tbl_address) or die('SQL Error :: '.mysqli_error($con));

      
      
      // Query for tbl_account_type
      $query_for_account_type = "INSERT INTO tbl_account_type (account_no,account_type) VALUES ($account_no, '$account_type')";
      $result_of_account_type = mysqli_query($con, $query_for_account_type) or die('SQL Error :: '.mysqli_error($con));

      // Query for tbl_account_bal
      $query_for_account_bal = "INSERT INTO tbl_balance (account_no,account_type,balance) VALUES ($account_no, '$account_type',0)";
      $result_of_account_bal = mysqli_query($con, $query_for_account_bal) or die('SQL Error :: '.mysqli_error($con));

      //Query for tbl_employment
      $query_for_employment = "INSERT INTO tbl_employment (account_no,occupation,annual_income) VALUES ($account_no, '$occupation', '$annual_income')";
      $result_of_employment = mysqli_query($con, $query_for_employment) or die('SQL Error :: '.mysqli_error($con));


      // After Successfully insert all records show alert Dialog Box that Register Successfully
      if ($result)
      {
        echo '<script type="text/JavaScript">  
        alertifySuccess();
       </script>' 
        ;
      }
      else
      {
        print($result);

        echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
      }
      
    } else {
      // todo : Show error -> username already exist
      print("username already Exist");
    }
     
  }
?>