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
        table tbody tr{
            border:1px solid black;
        }
        
    </style>  
</head>
<body>

<div class="container-xxl" >
    <div class="heading_box">
        <h2 class="main_heading">Employee Details Form</h2>
    </div>
    <form method="post" action="<?php echo base_url();?>Form_crud/updateData/<?php echo $employee_details->employee_id?>" class="bg-ligth border p-5" id="myForm" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <h3>Personal Details</h3>
                    <div class="row">
                        <div class="col-6"> 

                            <label for="name">Full Name:</label>
                            <input type="text" id="name" name="name" class="form-control" value="<?php echo $employee_details->name?>"><br>
                           
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="male" <?= ($employee_details->gender=="male" ? "selected" : "");  ?>>Male</option>
                                <option value="female" <?= ($employee_details->gender=="female" ? "selected" : ""); ?>>Female</option>
                                <option value="other" <?= ($employee_details->gender=="other" ? "selected" : "");  ?>>Other</option>
                            </select><br>
                           
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" value="<?php echo $employee_details->email?>"><br>

                        </div>

                        <div class="col-6">
                            
                            <label for="fname">Father's Name:</label>
                            <input type="text" id="fname" name="fname" class="form-control" value="<?php echo $employee_details->father_name?>"><br>
                             
                            <label for="dob">Date of birth</label>
                            <input type="date" id="dob" name="dob" class="form-control" value="<?php echo $employee_details->dob?>"><br>                        
                            
                            <label for="mobile">Mobile:</label>
                            <input type="tel" id="mobile" name="mobile" class="form-control" value="<?php echo $employee_details->mobile?>"><br>
                          
                        </div>
                        <h4>Persent Address</h4>
                        <div class="col-6 mt-3">
                            
                                <label for="address">Address</label>
                                <input type="text" id="address" name="address" class="form-control" value="<?php echo $employee_details->persent_address?>"><br>
                            
                                <label for="dob">Pincode</label>
                                <input type="tel" id="pin" name="pin" class="form-control" value="<?php echo $employee_details->persent_pincode?>"><br>
                           
                        </div>
                        <div class="col-6 mt-3" >

                                <label for="city">City</label>
                                <select name="city" id="city" data-live-search="true"  class="form-control">
                                    <option value="delhi" <?= ($employee_details->persent_city=="delhi" ? "selected" : "");?>>Delhi</option>
                                    <option value="bihar" <?= ($employee_details->persent_city=="bihar" ? "selected" : "");?>>Bihar</option>
                                    <option value="other" <?= ($employee_details->persent_city=="other" ? "selected" : "");?>>Other</option>
                                </select><br>
                           
                        </div>

                        <h4>Permanent Address</h4>
                        <div class="col-6 mt-3">
                            
                                <label for="permanent_address">Address</label>
                                <input type="text" id="permanent_address" name="permanent_address" class="form-control" value="<?php echo $employee_details->permanent_address?>"><br>
                           
                                <label for="permanent_pin">Pincode</label>
                                <input type="tel" id="permanent_pin" name="permanent_pin" class="form-control" value="<?php echo $employee_details->permanent_pincode?>" ><br>
                           
                        </div>
                        <div class="col-6 mt-3" >
                           
                                <label for="permanent_city">City</label>
                                <select name="permanent_city" id="permanent_city" data-live-search="true" class="form-control">
                                    <option value="delhi" <?= ($employee_details->permanent_city=="delhi" ? "selected" : "");?>>Delhi</option>
                                    <option value="bihar" <?= ($employee_details->permanent_city=="bihar" ? "selected" : "");?>>Bihar</option>
                                    <option value="other" <?= ($employee_details->permanent_city=="other" ? "selected" : "");?>>Other</option>
                                </select><br>
                        </div>

                        <div class="col-6 mt-3">
                            
                                <label for="mr_Status">Marital Status</label>
                                <select name="mr_Status" id="mr_status" class="form-control">
                                    <option value="marride" <?= ($employee_details->marital_status=="marride"? "selected":"");?>>Marride</option>
                                    <option value="unmarride" <?= ($employee_details->marital_status=="unmarride"? "selected":"");?>>Un-Marride</option>
                                </select><br>
                           
                                <label for="doa">Date of Anniversary</label>
                                <input type="date" id="doa" name="doa" class="form-control" value="<?php echo $employee_details->doa?>"><br>
                           
                                <label for="pan">PAN Card No.</label>
                                <input type="text" id="pan" name="pan" class="form-control" value="<?php echo $employee_details->pan_no?>"><br>
                           
                                <label for="photo">Photo</label>
                                <?php
                                    $image_name = $employee_details->photo;
                                    $img_path = 'http://localhost/CodeIgniter/image/' . $image_name;
                                ?>    
                                <img src="<?php echo $img_path; ?>" alt="My Image" height="100" />
                                <input type="hidden" value="<?php echo $employee_details->photo ?>" name="old_img" />
                                <input type="file" id="photo" name="photo" class="form-control"><br>
                           
                        </div>
                        <div class="col-6 mt-3" >
                           
                                <label for="sname">Spouse Name</label>
                                <input type="text" id="sname" name="sname" class="form-control" value="<?php echo $employee_details->spouse_name?>"><br>
                            
                                <label for="pass_no">Passport No.</label>
                                <input type="tel" id="pass_no" name="pass_no" class="form-control" value="<?php echo $employee_details->passport?>"><br>
                           
                                <label for="aadhar">Aadhar No.</label>
                                <input type="tel" id="aadhar" name="aadhar" class="form-control" value="<?php echo $employee_details->aadhar_no?>"><br>
                           
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
                                <input type="tel" id="employement_id" name="employement_id" class="form-control" value="<?php echo $employee_details->employement_id?>"><br>
                            
                                <label for="desgination">Designation</label>
                                <select name="designation" id="designation" data-live-search="true" class="form-control">
                                    <option value="associate manager - autit" <?= ($employee_details->designation=="associate manager - autit" ? "selected":"");?>>Associate Manager - Autit</option>
                                    <option value="other" <?= ($employee_details->designation=="other" ? "selected":"");?>>Other</option>
                                </select><br><br>
                           
                                <label for="pc_code">PC Code</label>
                                <select name="pc_code" id="pc_code" class="form-control">
                                    <option value="pan-cmn001" <?= ($employee_details->pc_code=="pan-cmn001" ? "selected": "");?>>PAN-CMN001</option>
                                    <option value="other" <?= ($employee_details->pc_code=="other" ? "selected": "");?>>Other</option>
                                </select><br>
                           
                                <label for="work_location">Work Loaction</label>
                                <select name="work_location" id="work_location" data-live-search="true" class="form-control">
                                    <option value="noida" <?= ($employee_details->work_location=="noida" ? "selected" : "");?>>Noida</option>
                                    <option value="other" <?= ($employee_details->work_location=="other" ? "selected" : "");?>>Other</option>
                                </select><br><br>
                           
                                <label for="rm">Reporting Manager</label>
                                <select name="rm" id="rm" class="form-control">
                                    <option value="akhilesh jain" <?= ($employee_details->report_manager=="akhilesh jain"? "selected":"");?>>Akhilesh Jain</option>
                                    <option value="other" <?= ($employee_details->report_manager=="other"? "selected":"");?>>Other</option>
                                </select><br>
                           
                                <label for="wo_rule">WO Rules</label>
                                <select name="wo_rule" id="wo_rule" class="form-control">
                                    <option value="gov" <?= ($employee_details->wo_rule=="gov"? "selected":"");?>>Govt.</option>
                                    <option value="other" <?= ($employee_details->wo_rule=="other"? "selected":"");?>>Other</option>
                                </select><br>
                           
                                <label for="np">Notice Period</label>
                                <input type="tel" id="np" name="np" class="form-control" value="<?php echo $employee_details->notice_period?>"><br>
                           
                                <label for="dol">Date of Leaving</label>
                                <input type="date" id="dol" name="dol" class="form-control" value="<?php echo $employee_details->dol?>"><br>
                           
                                <label for="issues">Offer Letter</label>
                                <input type="radio" value="issued" name="offer" <?= ($employee_details->offer_latter=="issued"? "checked":"");?>><label for="issued">Issued</label>
                                <input type="radio" value="no_issued" name="offer" <?= ($employee_details->offer_latter=="no_issued"? "checked":"");?>><label for="not_issued">Not Issued</label><br>

                                <label for="issued">Appointment Letter</label>
                                <input type="radio" <?= ($employee_details->appointment_latter=="issued"? "checked":"");?> name="appointement" checked><label for="issued">Issued</label>
                                <input type="radio" <?= ($employee_details->appointment_latter=="no_issued"? "checked":"");?> name="appointement"><label for="not_issued">Not Issued</label><br>
                            
                                <label for="issued">ID Card</label>
                                <input type="radio" <?= ($employee_details->id_card=="issued"? "checked":"");?> name="id" checked><label for="issued">Issued</label><br>
                                <input type="radio" <?= ($employee_details->id_card=="no_issued"? "checked":"");?> name="id"><label for="not_issued">Not Issued</label><br>
                           
                        </div>
                        <div class="col-6">
                            
                                <label for="emp_c">Employee Category</label>
                                <select name="emp_c" id="emp_c" class="form-control">
                                    <option value="payroll based employee" <?= ($employee_details->emp_category=="payroll based employee"? "selected":"");?>>Payroll Based Employee</option>
                                    <option value="other" <?= ($employee_details->emp_category=="other"? "selected":"");?>>Other</option>
                                </select><br>
                            
                                <label for="division">Division/ Region</label>
                                <select name="division" id="division" data-live-search="true" class="form-control">
                                    <option value="pan-process Audit North" <?= ($employee_details->division=="payroll based employee"? "selected":"");?>>PAN-Process Audit North</option>
                                    <option value="other" <?= ($employee_details->division=="other"? "selected":"");?>>Other</option>
                                </select><br><br>
                           
                                <label for="client">Client</label>
                                <select name="client" id="client" class="form-control">
                                    <option value="common" <?= ($employee_details->client=="common"? "selected":"");?>>Common</option>
                                    <option value="other" <?= ($employee_details->client=="other"? "selected":"");?>>Other</option>
                                </select><br>
                           
                                <label for="assignement">Assignment</label>
                                <input type="text" id="assignement" name="assignement" class="form-control" value="<?php echo $employee_details->assignement?>"><br>
                            
                                <label for="join_date">Joining date</label>
                                <input type="date" id="join_date" name="join_date" class="form-control" value="<?php echo $employee_details->join_date?>"><br>
                           
                                <label for="official_email">Official Email Id</label>
                                <input type="email" id="official_email" name="official_email" class="form-control" value="<?php echo $employee_details->official_email?>"><br>
                            
                                <label for="portal">Portal Access</label>
                                <select name="portal" id="portal" class="form-control">
                                    <option value="yes" <?= ($employee_details->portal_access=="yes"? "selected":"");?>>yes</option>
                                    <option value="no" <?= ($employee_details->portal_access=="no"? "selected":"");?>>no</option>
                                </select><br>
                            
                                <label for="zone">Holiday Zone</label>
                                <select name="zone" id="zone" class="form-control">
                                    <option value="north Zone" <?= ($employee_details->holiday_zone=="north Zone"? "selected":"");?>>North Zone</option>
                                    <option value="south Zone" <?= ($employee_details->holiday_zone=="south Zone"? "selected":"");?>>South Zone</option>
                                </select><br>
                            
                                <label for="role">Role Type</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="employee" <?= ($employee_details->role_type=="employee"? "selected":"");?>>Employee</option>
                                    <option value="no_employee" <?= ($employee_details->role_type=="no_employee"? "selected":"");?>>other</option>
                                </select><br>
                           
                        </div>
                        <h4>Bank / PF / ESI Information</h4>
                        <div class="col-6 mt-3">
                            
                                <label for="bank">Bank Name</label>
                                <input type="text" id="bank" name="bank" class="form-control" value="<?php echo $employee_details->bank?>"><br>
                            
                                <label for="account_name">Account Name</label>
                                <input type="text" id="account_name" name="account_name" class="form-control" value="<?php echo $employee_details->account_name?>"><br>
                           
                                <label for="ifsc">IFSC Code</label>
                                <input type="text" id="ifsc" name="ifsc" class="form-control" value="<?php echo $employee_details->ifsc?>"><br>
                            
                                <label for="skill">Skills sets</label><br>
                                <select multiple class="selectpicker form-control" name="skills[]">
                                <option value="java" <?php if(in_array("java", explode(",", $employee_details->skills))) echo "selected"; ?>>Java</option>
                                    <option value="python" <?php if(in_array("python", explode(",", $employee_details->skills))) echo "selected"; ?>>Python</option>
                                    <option value="c++" <?php if(in_array("c++", explode(",", $employee_details->skills))) echo "selected"; ?>>C++</option>
                                    <option value="php" <?php if(in_array("php", explode(",", $employee_details->skills))) echo "selected"; ?>>PHP</option>
                                    <option value="jquery" <?php if(in_array("jquery", explode(",", $employee_details->skills))) echo "selected"; ?>>Jquery</option>
                                </select>
                        </div>
                        <div class="col-6 mt-3" >
                            
                                <label for="branch">Branch Name</label>
                                <input type="text" id="branch" name="branch" class="form-control" value="<?php echo $employee_details->branch?>"><br>
                           
                                <label for="account_no">Account Number</label>
                                <input type="tel" id="account_no" name="account_no" class="form-control" value="<?php echo $employee_details->account_no?>"><br>
                                
                                <label for="account_no">Remark</label><br>
                                <textarea type="text" id="remark" name="remark" class="form-control" rows="5" style="resize: none;"><?php echo $employee_details->remark; ?></textarea>

                        </div>
                    </div>   

            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-secondary" onclick="window.location.href='<?php echo base_url();?>Form_crud'">Cancel</button>

        </div>
    </form>
</div>


<div class="row">
        <div class="col-12">
                <div class="form-group">
                    <h3>Qualification</h3>
                    <div class="row">
                        <table class="table m-2 qualification-table">
                            <thead width="100%">
                                <tr><th>Qualification</th><th>Percentage</th><th>Action</th></tr>
                            </thead>
                            <tbody>
                                <?php if (empty($education)): ?>
                                    <!-- Handle the case where there are no qualifications -->
                                <?php else: ?>
                                    <?php foreach ($education as $details): ?> 
                                        <tr>
                                            <td><input type="text" name="update_qualification[]" class="form-control" value="<?php echo $details->qualification; ?>"></td>
                                            <td><input type="text" name="update_percentage[]" class="form-control" value="<?php echo $details->percentage; ?>"></td>
                                            <td><button type="button" class="btn btn-danger" id="remove_update_row">Remove</button></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                
                                <tr>
                                    <td><input type="text" name="qualification[]" class="form-control"></td>
                                    <td><input type="text" name="percentage[]" class="form-control"></td>
                                    <td ><button type="button" class="btn btn-primary add-row">Add More</button><button type="button" class="btn btn-danger remove-row">Remove</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="hidden" name="employee" value="<?php echo $employee_details->employee_id?>">
                    </div>
                    <div class="col-12">
                        <button type="button" class="btn btn-primary" name="save" id="save-data">Save</button>
                    </div>
                </div>
            </div>

        </div>
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
            $('form input:not([type="search"], [type="file"], [type="hidden"])').each(function() {
                              
                if (!$(this).val()) { // check if input has no value
                    $(this).next('span.error').remove();
                    $(this).after('<span class="error">Field is required</span>'); // add span after input
                    $(this).next('.error').css('color', 'red');
                    error = true;
                } 
            });
            if (!error) {
                this.submit();
                // window.location.href = "<?php echo base_url();?>Form_crud/addData";
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



        $(document).ready(function() {
            // var firstRowEmpty = $(".qualification-table tbody tr:first-child input[name='qualification[]']").val().trim() === '';

            // if ($(".qualification-table tbody tr:first-child input[name='qualification[]']").val().trim() === '') {
            //     $(".qualification-table tbody tr:first-child .add-row").show();
            //     $(".qualification-table tbody tr:first-child .remove-row").hide();
            // } else if($(".qualification-table tbody tr:last-child input[name='qualification[]']").val().trim() === '') {
            //     $(".qualification-table tbody tr:first-child .add-row").show();
            //     $(".qualification-table tbody tr:first-child .remove-row").hide();
            // }else{
            //     $(".qualification-table tbody tr:first-child .add-row").hide();
            //     $(".qualification-table tbody tr:first-child .remove-row").show();
            // }

            $(document).on("click", ".add-row", function() {
                var $newRow = $("<tr><td><input type='text' name='qualification[]' class='form-control'></td><td><input type='text' name='percentage[]' class='form-control'></td><td><button type='button' class='btn btn-primary add-row'>Add More</button><button type='button' class='btn btn-danger remove-row'>Remove</button></td></tr>");
                var $lastRow = $(".qualification-table tbody tr:last-child");
                $lastRow.find(".add-row").hide();
                $lastRow.find(".remove-row").show();
                $lastRow.after($newRow);
                $newRow.find(".add-row").show();
                $newRow.find(".remove-row").hide();
            });

            $(document).on("click", ".remove-row", function() {
                var $currentRow = $(this).closest("tr");
                var $prevRow = $currentRow.prev();
                var $nextRow = $currentRow.next();
                $currentRow.remove();

                // Show the add button in the previous row if it exists
                if ($prevRow.length > 0) {
                $prevRow.find(".add-row").show();
                }

                // Hide the remove button in the next row if it exists
                if ($nextRow.length > 0) {
                $nextRow.find(".remove-row").hide();
                }
            });
        });


        $("#save-data").click(function() {
            var qualification = [];
            var percentage = [];
            var employee = $("input[name='employee']").val();

            $(".qualification-table tbody tr").each(function() {
                if ($(this).find("input[name='update_qualification[]']").length === 0 &&
                    $(this).find("input[name='update_percentage[]']").length === 0) {
                    qualification.push($(this).find("input[name='qualification[]']").val());
                    percentage.push($(this).find("input[name='percentage[]']").val());
                }
            });
            var data = {
                qualification: qualification,
                percentage: percentage,
                employee: employee
            };
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>Form_crud/saveQualification",
                data: data,
                success: function(response) {
                    if (response) {
                        alert("Data saved successfully!");
                        $("input").val("");
                    } else {
                        alert("Failed");
                    }
                },
                error: function(xhr, status, error) {
                    alert("Error: " + xhr.responseText);
                }
            });
        });



        $("#remove_update_row").click(function(){
            var qualification = $("input[name='update_qualification']").val();
            var percentage = $("input[name='update_percentage']").val();
            var employee = $("input[name='employee']").val();

            alert(qualification);
            alert(percentage);
            alert(employee);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>Form_crud/deleteQualification",
                data: {qualification:qualification,percentage:percentage,employee:employee},
                success: function(response) {
                    if (response) {
                        alert("Data delete successfully!");
                        $("input").val("");
                    } else {
                        alert("Failed");
                    }
                },
                error: function(xhr, status, error) {
                    alert("Error: " + xhr.responseText);
                }
            });
        })
  
});

</script>
