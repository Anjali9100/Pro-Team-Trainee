<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
       
    <style>
        h2{
            text-align:center;
        }
        .form-group {
        border: 1px solid #ccc;
        padding: 10px;
        margin-top: 20px;
        width: 100%;
        }

        .form-group h3 {
        margin-top: -30px;
        background-color: #fff;
        display: inline-block;
        padding: 0 10px;
        }

        label {
        font-weight: bold;
        margin-bottom: 0px;
        }
        h4{
            position: relative;
            left:15px;
            background:lightblue;
            width:calc(100% - 30px);
            top:10px;
            bottom: 10px;
        }
        #issu, #not_issu{
            margin-top:7px;
        }
        #issu{
            margin-left:7px;
        }
       
        .heading_box{
            height: 70px;
            width:100%;
            background:lightblue;
            display: block;
        }
        .main_heading{
            text-align:left;
            line-height:70px;
            margin-left:10px;
        }
        .remove-row{
            display:block;
        }
    </style>  
</head>
<body>

<div class="container-xxl" >
    <div class="heading_box">
        <h2 class="main_heading">Employee Details Form</h2>
    </div>
    <form method="post" action="<?php echo base_url();?>Form_crud/addData" enctype="multipart/form-data" class="bg-ligth border p-5" id="myForm">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <h3>Personal Details</h3>
                    <div class="row">
                        <div class="col-6"> 

                            <label for="name">Full Name:</label>
                            <input type="text" id="name" name="name" class="form-control"><br>
                           
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select><br>
                           
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control"><br>
                            <span id="email-error"></span>

                        </div>

                        <div class="col-6">
                            
                            <label for="fname">Father's Name:</label>
                            <input type="text" id="fname" name="fname" class="form-control"><br>
                             
                            <label for="dob">Date of birth</label>
                            <input type="date" id="dob" name="dob" class="form-control"> <br>                        
                            
                            <label for="mobile">Mobile:</label>
                            <input type="tel" id="mobile" name="mobile" class="form-control" ><br>
                          
                        </div>
                        <h4>Persent Address</h4>
                        <div class="col-6 mt-3">
                            
                                <label for="address">Address</label>
                                <input type="text" id="address" name="address" class="form-control"><br>
                            
                                <label for="dob">Pincode</label>
                                <input type="tel" id="pin" name="pin" class="form-control"><br>
                           
                        </div>
                        <div class="col-6 mt-3" >

                                <label for="city">City</label>
                                <select name="city" id="city" data-live-search="true"  class="form-control">
                                    <option value="delhi">Delhi</option>
                                    <option value="bihar">Bihar</option>
                                    <option value="other">Other</option>
                                </select><br><br>
                           
                        </div>

                        <h4>Permanent Address</h4>
                        <div class="col-6 mt-3">
                            
                                <label for="permanent_address">Address</label>
                                <input type="text" id="permanent_address" name="permanent_address" class="form-control"><br>
                           
                                <label for="permanent_pin">Pincode</label>
                                <input type="tel" id="permanent_pin" name="permanent_pin" class="form-control"><br>
                           
                        </div>
                        <div class="col-6 mt-3" >
                           
                                <label for="permanent_city">City</label>
                                <select name="permanent_city" id="permanent_city" data-live-search="true" class="form-control">
                                    <option value="delhi">Delhi</option>
                                    <option value="bihar">Bihar</option>
                                    <option value="other">Other</option>
                                </select><br><br>
                        </div>

                        <div class="col-6 mt-3">
                            
                                <label for="mr_Status">Marital Status</label>
                                <select name="mr_status" id="mr_status" class="form-control">
                                    <option value="marride">Marride</option>
                                    <option value="unmarride">Un-Marride</option>
                                </select><br>
                           
                                <label for="doa">Date of Anniversary</label>
                                <input type="date" id="doa" name="doa" class="form-control"><br>
                           
                                <label for="pan">PAN Card No.</label>
                                <input type="text" id="pan" name="pan" class="form-control"><br>
                           
                                <label for="photo">Photo</label>
                                <input type="file" id="photo" name="photo" class="form-control"><br>
                           
                        </div>
                        <div class="col-6 mt-3" >
                           
                                <label for="sname">Spouse Name</label>
                                <input type="text" id="sname" name="sname" class="form-control"><br>
                            
                                <label for="pass_no">Passport No.</label>
                                <input type="tel" id="pass_no" name="pass_no" class="form-control"><br>
                           
                                <label for="aadhar">Aadhar No.</label>
                                <input type="tel" id="aadhar" name="aadhar" class="form-control"><br>
                           
                        </div>
                    </div>   
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <h3>Official Status</h3>
                    <div class="row">
                        <div class="col-6">
                           
                                <label for="employement_id">Employee ID</label>
                                <input type="tel" id="employement_id" name="employement_id" class="form-control"><br>
                            
                                <label for="desgination">Designation</label>
                                <select name="designation" id="designation" data-live-search="true" class="form-control">
                                    <option value="associate manager - autit">Associate Manager - Autit</option>
                                    <option value="other">Other</option>
                                </select><br><br>
                           
                                <label for="pc_code">PC Code</label>
                                <select name="pc_code" id="pc_code" class="form-control">
                                    <option value="pan-cmn001">PAN-CMN001</option>
                                    <option value="other">Other</option>
                                </select><br><br>
                           
                                <label for="work_location">Work Loaction</label>
                                <select name="work_location" id="work_location" data-live-search="true" class="form-control">
                                    <option value="noida">Noida</option>
                                    <option value="other">Other</option>
                                </select><br><br>
                           
                                <label for="rm">Reporting Manager</label>
                                <select name="rm" id="rm" class="form-control">
                                    <option value="akhilesh jain">Akhilesh Jain</option>
                                    <option value="other">Other</option>
                                </select><br><br>
                           
                                <label for="wo_rule">WO Rules</label>
                                <select name="wo_rule" id="wo_rule" class="form-control">
                                    <option value="gov">Govt.</option>
                                    <option value="other">Other</option>
                                </select><br><br>
                           
                                <label for="np">Notice Period</label>
                                <input type="tel" id="np" name="np" class="form-control"><br>
                           
                                <label for="dol">Date of Leaving</label>
                                <input type="date" id="dol" name="dol" class="form-control"><br>
                           
                                <label for="issues">Offer Letter</label>
                                <input type="radio" value="issued" id="offer_issued" name="offer" checked><label for="issued">Issued</label>
                                <input type="radio" value="no_issued" id="offer_not_issued" name="offer"><label for="not_issued">Not Issued</label><br>
                           
                                <label for="issued">Appointment Letter</label>
                                <input type="radio" value="issedu" id="appointement_issued" name="appointement" checked><label for="issued">Issued</label>
                                <input type="radio" value="no_issued" id="appointment_not_issued" name="appointement"><label for="not_issued">Not Issued</label><br>
                            
                                <label for="issued">ID Card</label>
                                <input type="radio" value="issued" id="id_issued" name="id" checked><label for="issued">Issued</label><br>
                                <input type="radio" value="no_issued" id="id_not_issued" name="id"><label for="not_issued">Not Issued</label><br>
                           
                        </div>
                        <div class="col-6">
                            
                                <label for="emp_c">Employee Category</label>
                                <select name="emp_c" id="emp_c" class="form-control">
                                    <option value="payroll based employee">Payroll Based Employee</option>
                                    <option value="other">Other</option>
                                </select><br><br>
                            
                                <label for="division">Division/ Region</label>
                                <select name="division" id="division" data-live-search="true" class="form-control">
                                    <option value="pan-process Audit North">PAN-Process Audit North</option>
                                    <option value="other">Other</option>
                                </select><br><br>
                           
                                <label for="client">Client</label>
                                <select name="client" id="client" class="form-control">
                                    <option value="common">Common</option>
                                    <option value="other">Other</option>
                                </select><br><br>
                           
                                <label for="assignement">Assignment</label>
                                <input type="text" id="assignement" name="assignement" class="form-control"><br>
                            
                                <label for="join_date">Joining date</label>
                                <input type="date" id="join_date" name="join_date" class="form-control"><br>
                           
                                <label for="official_email">Official Email Id</label>
                                <input type="email" id="official_email" name="official_email" class="form-control"><br>
                            
                                <label for="portal">Portal Access</label>
                                <select name="portal" id="portal" class="form-control">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select><br><br>
                            
                                <label for="zone">Holiday Zone</label>
                                <select name="zone" id="zone" class="form-control">
                                    <option value="north Zone">North Zone</option>
                                    <option value="south Zone">South Zone</option>
                                </select><br><br>
                            
                                <label for="role">Role Type</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="employee">Employee</option>
                                    <option value="no_employee">other</option>
                                </select><br>
                           
                        </div>
                        <h4>Bank / PF / ESI Information</h4>
                        <div class="col-6 mt-3">
                            
                                <label for="bank">Bank Name</label>
                                <input type="text" id="bank" name="bank" class="form-control"><br>
                            
                                <label for="account_name">Account Name</label>
                                <input type="text" id="account_name" name="account_name" class="form-control"><br>
                           
                                <label for="ifsc">IFSC Code</label>
                                <input type="text" id="ifsc" name="ifsc" class="form-control"><br>

                                <label for="skill">Skills sets</label><br>
                                <select multiple class="selectpicker form-control" name="skills[]">
                                    <option value="java">Java</option>
                                    <option value="python">Python</option>
                                    <option value="c++">C++</option>
                                    <option value="php">PHP</option>
                                    <option value="jquery">Jquery</option>
                                </select>
                            
                        </div>
                        <div class="col-6 mt-3" >
                            
                                <label for="branch">Branch Name</label>
                                <input type="text" id="branch" name="branch" class="form-control"><br>
                           
                                <label for="account_no">Account Number</label>
                                <input type="tel" id="account_no" name="account_no" class="form-control"><br>

                                <label for="account_no">Remark</label><br>
                                <textarea type="text" id="remark" name="remark" class="form-control" rows="5" style="resize: none;"></textarea>

                        </div>
                    </div>   
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
    
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>


<?php if($this->session->flashdata('error')): ?>
    <?php echo $this->session->flashdata('error')?>
<?php endif; ?>

<script>
    $(document).ready(function(){

        $(function() {
            $('#city, #permanent_city, #division, #designation, #work_location').selectpicker();
        });

        $('#myForm').submit(function(event) {
            event.preventDefault(); // prevent form submission

            var error = false;
            $('form input:not([type="search"], [type="radio"])').each(function() {     
                if (!$(this).val()) { // check if input has no value
                    $(this).next('span.error').remove();
                    $(this).after('<span class="error">Field is required</span>'); // add span after input
                    $(this).next('.error').css('color', 'red');
                    error = true;
                } 
            });
            if (!error) {
                this.submit();
            }
        });


        $('#mobile, #aadhar, #pin, #permanent_pin').on('keyup', function() {
            var inputVal = $(this).val();
            var fieldName = $(this).attr('name');
            
            // check for non-numeric value
            if (!$.isNumeric(inputVal) && inputVal != '') {
                $(this).next('.error').remove();
                $(this).after('<span class="error">Please enter only numbers</span>');
                $(this).next('.error').css('color', 'red');
            }else if ((fieldName == 'pin' || fieldName == 'permanent_pin') && inputVal.length != 6) {
                $(this).next('.error').remove();
                $(this).after('<span class="error">Please enter valid pin code</span>');
                $(this).next('.error').css('color', 'red');
            }
             else {
                $(this).next('.error').remove();         
                // return true;
            }
            
            // check for 12 digits in aadhar field
            if (fieldName == 'aadhar' && inputVal.length != 12) {
                $(this).next('.error').remove();
                $(this).after('<span class="error">Please enter 12 digits only</span>');
                $(this).next('.error').css('color', 'red');
            }
            
            // check for valid mobile number pattern
            if (fieldName == 'mobile' && !/^[6-9]\d{9}$/.test(inputVal)) {
                $(this).next('.error').remove();
                $(this).after('<span class="error">Please enter a valid mobile number</span>');
                $(this).next('.error').css('color', 'red');
            }
                    
        });

        $("#pan").keyup(function(){
            if(($(this).val()).length != 10){
                $(this).next('.error').remove();
                $(this).after('<span class="error">Please enter a valid Pan Card number</span>');
                $(this).next('.error').css('color', 'red');
            } else {
                $(this).next('.error').remove();
                return true;
            }
        })

        $('#email,#official_email').on('keyup', function() {
            var email = $(this).val();
            if (!/\S+@\S+\.\S+/.test(email)) {
                $(this).next('.error').remove();
                $(this).after('<span class="error">Please enter a valid email address</span>');
                $(this).next('.error').css('color', 'red');
            } else {
                $(this).next('.error').remove();
                return true;
            }
        });

        $("#email").on('keyup',function(){
            var email = $(this).val();
            if(email != ''){
                $.ajax({
                    url:"<?php echo base_url();?>Form_crud/checkEmail",
                    method:"POST",
                    data:{email:email},
                    success:function(data){
                        if(data == 1){
                            if($(this).next('.error').length){
                                $(this).after('<span class="error">Email address is exist..</span>');
                                $(this).next('.error').css('color', 'red');
                            } 
                            $("#email-error").html(data); 
                        }
                        else{
                           
                        }
                        
                    }.bind(this) // bind the current context to the success function to access $(this)
                });
            }
            else{
                $(this).next('.error').remove();
            }
            
        });

        $('#dob').on('change', function() {
            var dob = new Date($(this).val());
            var now = new Date();
            var age = Math.floor((now - dob) / (365.25 * 24 * 60 * 60 * 1000));
            if (age < 18) {
                $(this).next('.error').remove();
                $(this).after('<span class="error">You must be at least 18 years old</span>');
                $(this).next('.error').css('color', 'red');
            } else {
                $(this).next('.error').remove();
                return true;
            }
        });

        // remove error message when input is changed
        $('form input').on('input', function() {
            $(this).next('span.error').remove();
            return true;
        });




});

</script>
