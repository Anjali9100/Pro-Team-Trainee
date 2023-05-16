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
        #add_details{
            float:right;
            margin-top:-60px;
            margin-right: 10px;
        }
        
    </style>  
</head>
<body>

<div class="container-xxl" >
    <div class="heading_box">
        <h2 class="main_heading">Employee Details</h2>
        <a href="<?php echo base_url();?>Form_crud/form"><button type="submit" class="btn btn-primary" id="add_details">Add Details</button></a>
        
    </div>

    <div class="row">
    
        <table class="table m-2">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>PinCode</th>
                    <th>Employeement Id</th>
                    <th>Employee Category</th>
                    <th>Designation Id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($employeeDetails as $details): ?> 
                        <tr>
                            <td><?php echo $details->name; ?></td>
                            <td><?php echo $details->email; ?></td>
                            <td><?php echo $details->mobile; ?></td>
                            <td><?php echo $details->persent_address; ?></td>
                            <td><?php echo $details->persent_pincode; ?></td>
                            <td><?php echo $details->employement_id; ?></td>
                            <td><?php echo $details->emp_category; ?></td>
                            <td><?php echo $details->designation; ?></td>
                            <td>
                                <a href="<?php echo base_url();?>Form_crud/editData/<?php echo $details->employee_id; ?>" class="edit-button" data-employee-id="<?php echo $details->employee_id; ?>">
                                    <button type="button" class="btn btn-info">Edit</button>
                                </a>&nbsp;
                                <a href="<?php echo base_url();?>Form_crud/delete_data/<?php echo $details->employee_id ?>" id="delete">
                                    <button type="button" class="btn btn-danger">Danger</button>
                                </a>
                            </td>
                        </tr>    
                    <?php endforeach?>
            </tbody>
        </table>
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

<?php if($this->session->flashdata('inserted')): ?>
    <?php echo $this->session->flashdata('inserted')?>
<?php endif; ?>


<?php if($this->session->flashdata('deleted')): ?>
    <?php echo $this->session->flashdata('deleted')?>
<?php endif; ?>

<?php if($this->session->flashdata('updated')): ?>
    <?php echo $this->session->flashdata('updated')?>
<?php endif; ?>

