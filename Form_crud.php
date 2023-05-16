<?php

    define('upload', 'upload');

    class Form_crud extends CI_Controller
    {
        public function index()
        {
            $data['employeeDetails'] = $this->Form_crud_modal->getAllDetails();
            $this->load->view('employee_dashboard',$data);
        }


        public function form(){
            $this->load->view('employee_details_form');
        }

        


        public function addData()
        {
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['upload_path'] = './image';

                $this->load->library('upload',$config);

                if ($this->upload->do_upload('photo')) {
                    
                    $name = $this->input->post('name');
                    $gender = $this->input->post('gender');
                    $email = $this->input->post('email');
                    $father_name= $this->input->post('fname');
                    $dob= $this->input->post('dob');
                    $mobile= $this->input->post('mobile');
                    $persent_address= $this->input->post('address');
                    $persent_pincode= $this->input->post('pin');
                    $persent_city= $this->input->post('city');
                    $permanent_address= $this->input->post('permanent_address');
                    $permanent_pincode= $this->input->post('permanent_pin');
                    $permanent_city=$this->input->post('permanent_city');
                    $marital_status= $this->input->post('mr_status');
                    $doa= $this->input->post('doa');
                    $pan_no= $this->input->post('pan');
                    $img = $this->upload->data();
                    $image= $img['file_name'];
                    $spouse_name= $this->input->post('sname');
                    $passport= $this->input->post('pass_no');
                    $aadhar_no=$this->input->post('aadhar');
                    $employement_id= $this->input->post('employement_id');
                    $designation=$this->input->post('designation');
                    $pc_code= $this->input->post('pc_code');
                    $work_location = $this->input->post('work_location');
                    $report_manager= $this->input->post('rm');
                    $wo_rule= $this->input->post('wo_rule');
                    $notice_period=$this->input->post('np');
                    $dol= $this->input->post('dol');
                    $offer_latter= $this->input->post('offer');
                    $appointment_latter= $this->input->post('appointement');
                    $id_card= $this->input->post('id');
                    $emp_category= $this->input->post('emp_c');
                    $division= $this->input->post('division');
                    $client= $this->input->post('client');
                    $assignement= $this->input->post('assignement');
                    $join_date= $this->input->post('join_date');
                    $official_email= $this->input->post('official_email');
                    $portal_access= $this->input->post('portal');
                    $holiday_zone= $this->input->post('zone');
                    $role_type= $this->input->post('role');
                    $bank= $this->input->post('bank');
                    $account_name= $this->input->post('account_name');
                    $ifsc= $this->input->post('ifsc');
                    $branch= $this->input->post('branch');
                    $account_no= $this->input->post('account_no');
                    $skills = $this->input->post('skills');
                    if (is_array($skills)) {
                        $skills = implode(',', $skills);
                    }
                    $remark= $this->input->post('remark');
                } 
                else {    
                    $error = $this->upload->display_errors();
                    echo $error;
                }     

                $data = array(
                    'name'=> $name,
                    'gender'=> $gender,
                    'email'=> $email,
                    'father_name'=> $father_name,
                    'dob'=> $dob,
                    'mobile'=> $mobile,
                    'persent_address'=> $persent_address,
                    'persent_pincode'=> $persent_pincode,
                    'persent_city'=> $persent_city,
                    'permanent_address'=> $permanent_address,
                    'permanent_pincode'=> $permanent_pincode,
                    'permanent_city'=> $permanent_city,
                    'marital_status'=> $marital_status,
                    'doa'=> $doa,
                    'pan_no'=> $pan_no,
                    'photo'=> $image,
                    'spouse_name'=> $spouse_name,
                    'passport'=> $passport,
                    'aadhar_no'=> $aadhar_no,
                    'employement_id'=> $employement_id,
                    'designation'=> $designation,
                    'pc_code'=> $pc_code,
                    'work_location' => $work_location,
                    'report_manager'=> $report_manager,
                    'wo_rule'=> $wo_rule,
                    'notice_period'=> $notice_period,
                    'dol'=> $dol,
                    'offer_latter'=> $offer_latter,
                    'appointment_latter'=> $appointment_latter,
                    'id_card'=> $id_card,
                    'emp_category'=> $emp_category,
                    'division'=> $division,
                    'client'=> $client,
                    'assignement'=> $assignement,
                    'join_date'=> $join_date,
                    'official_email'=> $official_email,
                    'portal_access'=> $portal_access,
                    'holiday_zone'=> $holiday_zone,
                    'role_type'=> $role_type,
                    'bank'=> $bank,
                    'account_name'=> $account_name,
                    'ifsc'=> $ifsc,
                    'branch'=> $branch,
                    'account_no'=> $account_no,
                    'skills'=> $skills,
                    'remark'=> $remark         
                );

                
                $result = $this->Form_crud_modal->insertData($data);

                if($result){
                    $this->session->set_flashdata('inserted',"Data inserted Successfuly");
                }
                redirect('Form_crud');
        }   


        public function saveQualification(){
            $qualification = $this->input->post('qualification');
            $percentage = $this->input->post('percentage');
            $employee = $this->input->post('employee');
            
            $result = true;
            foreach($qualification as $key => $value){
                $insert_data = array(
                    'qualification' => $value,
                    'percentage' => $percentage[$key],
                    'emp_fk_id' => $employee
                );
                $insert_result = $this->Form_crud_modal->insertQualification($insert_data);
                $result = $result && $insert_result;
            }
            if($result){
                echo "1";
            }
            else{
                echo "0";
            }
        }


        public function deleteQualification()
        {
            $data = array(
                'qualification' => $this->input->post('qualification'),
                'percentage' => $this->input->post('percentage'),
                'employee' => $this->input->post('employee')
            );

            $result = $this->Form_crud_modal->deleteQualification($data);

            if ($result) {
                echo "1";
            } else {
                echo "0";
            }
        }

        

            
        public function delete_data($employee_id)
        {
            $result = $this->Form_crud_modal->delete_item($employee_id);
            if($result){
                $this->session->set_flashdata("deleted","Data deleted");
            }
            redirect('Form_crud');
        }


        public function editData($id){
            $data['employee_details'] = $this->Form_crud_modal->fetch_data($id);
        
            $education = $this->Form_crud_modal->fetchQualification($id);
           
            $data['education'] = $education;
            if (is_string($data['education'])) {
                $data['education'] = json_decode($data['education'], true);
            }
         
            $this->load->view('edit_employee_details_form', $data);
        }
        




        public function updatedata($id)
        {

            $old_img = $this->input->post('old_img');
            $new_photo = $_FILES['photo'];

            if(!empty($_FILES['photo']['name'])){

                $image_path = './image/'.$old_img;
           
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['upload_path'] = './image';

                $this->load->library('upload',$config);

                if ($this->upload->do_upload('photo')) {
                    
                    $name = $this->input->post('name');
                    $gender = $this->input->post('gender');
                    $email = $this->input->post('email');
                    $father_name= $this->input->post('fname');
                    $dob= $this->input->post('dob');
                    $mobile= $this->input->post('mobile');
                    $persent_address= $this->input->post('address');
                    $persent_pincode= $this->input->post('pin');
                    $persent_city= $this->input->post('city');
                    $permanent_address= $this->input->post('permanent_address');
                    $permanent_pincode= $this->input->post('permanent_pin');
                    $permanent_city=$this->input->post('permanent_city');
                    $marital_status= $this->input->post('mr_status');
                    $doa= $this->input->post('doa');
                    $pan_no= $this->input->post('pan');
                    $img = $this->upload->data();
                    $image= $img['file_name'];
                    $spouse_name= $this->input->post('sname');
                    $passport= $this->input->post('pass_no');
                    $aadhar_no=$this->input->post('aadhar');
                    $employement_id= $this->input->post('employement_id');
                    $designation=$this->input->post('designation');
                    $pc_code= $this->input->post('pc_code');
                    $work_location = $this->input->post('work_location');
                    $report_manager= $this->input->post('rm');
                    $wo_rule= $this->input->post('wo_rule');
                    $notice_period=$this->input->post('np');
                    $dol= $this->input->post('dol');
                    $offer_latter= $this->input->post('offer');
                    $appointment_latter= $this->input->post('appointement');
                    $id_card= $this->input->post('id');
                    $emp_category= $this->input->post('emp_c');
                    $division= $this->input->post('division');
                    $client= $this->input->post('client');
                    $assignement= $this->input->post('assignement');
                    $join_date= $this->input->post('join_date');
                    $official_email= $this->input->post('official_email');
                    $portal_access= $this->input->post('portal');
                    $holiday_zone= $this->input->post('zone');
                    $role_type= $this->input->post('role');
                    $bank= $this->input->post('bank');
                    $account_name= $this->input->post('account_name');
                    $ifsc= $this->input->post('ifsc');
                    $branch= $this->input->post('branch');
                    $account_no= $this->input->post('account_no');
                    $skills = $this->input->post('skills');
                    if (is_array($skills)) {
                        $skills = implode(',', $skills);
                    }
                    $remark= $this->input->post('remark');
                } 
                else {    
                    $error = $this->upload->display_errors();
                    echo $error;
                }  
            }
            else{
                $name = $this->input->post('name');
                $gender = $this->input->post('gender');
                $email = $this->input->post('email');
                $father_name= $this->input->post('fname');
                $dob= $this->input->post('dob');
                $mobile= $this->input->post('mobile');
                $persent_address= $this->input->post('address');
                $persent_pincode= $this->input->post('pin');
                $persent_city= $this->input->post('city');
                $permanent_address= $this->input->post('permanent_address');
                $permanent_pincode= $this->input->post('permanent_pin');
                $permanent_city=$this->input->post('permanent_city');
                $marital_status= $this->input->post('mr_status');
                $doa= $this->input->post('doa');
                $pan_no= $this->input->post('pan');
                $image = $this->input->post('old_img');
                $spouse_name= $this->input->post('sname');
                $passport= $this->input->post('pass_no');
                $aadhar_no=$this->input->post('aadhar');
                $employement_id= $this->input->post('employement_id');
                $designation=$this->input->post('designation');
                $pc_code= $this->input->post('pc_code');
                $work_location = $this->input->post('work_location');
                $report_manager= $this->input->post('rm');
                $wo_rule= $this->input->post('wo_rule');
                $notice_period=$this->input->post('np');
                $dol= $this->input->post('dol');
                $offer_latter= $this->input->post('offer');
                $appointment_latter= $this->input->post('appointement');
                $id_card= $this->input->post('id');
                $emp_category= $this->input->post('emp_c');
                $division= $this->input->post('division');
                $client= $this->input->post('client');
                $assignement= $this->input->post('assignement');
                $join_date= $this->input->post('join_date');
                $official_email= $this->input->post('official_email');
                $portal_access= $this->input->post('portal');
                $holiday_zone= $this->input->post('zone');
                $role_type= $this->input->post('role');
                $bank= $this->input->post('bank');
                $account_name= $this->input->post('account_name');
                $ifsc= $this->input->post('ifsc');
                $branch= $this->input->post('branch');
                $account_no= $this->input->post('account_no');
                $skills= implode(',', $this->input->post('skills'));
                $remark= $this->input->post('remark');

            }   

            $data = array(
                'name'=> $name,
                'gender'=> $gender,
                'email'=> $email,
                'father_name'=> $father_name,
                'dob'=> $dob,
                'mobile'=> $mobile,
                'persent_address'=> $persent_address,
                'persent_pincode'=> $persent_pincode,
                'persent_city'=> $persent_city,
                'permanent_address'=> $permanent_address,
                'permanent_pincode'=> $permanent_pincode,
                'permanent_city'=> $permanent_city,
                'marital_status'=> $marital_status,
                'doa'=> $doa,
                'pan_no'=> $pan_no,
                'photo'=> $image,
                'spouse_name'=> $spouse_name,
                'passport'=> $passport,
                'aadhar_no'=> $aadhar_no,
                'employement_id'=> $employement_id,
                'designation'=> $designation,
                'pc_code'=> $pc_code,
                'work_location' => $work_location,
                'report_manager'=> $report_manager,
                'wo_rule'=> $wo_rule,
                'notice_period'=> $notice_period,
                'dol'=> $dol,
                'offer_latter'=> $offer_latter,
                'appointment_latter'=> $appointment_latter,
                'id_card'=> $id_card,
                'emp_category'=> $emp_category,
                'division'=> $division,
                'client'=> $client,
                'assignement'=> $assignement,
                'join_date'=> $join_date,
                'official_email'=> $official_email,
                'portal_access'=> $portal_access,
                'holiday_zone'=> $holiday_zone,
                'role_type'=> $role_type,
                'bank'=> $bank,
                'account_name'=> $account_name,
                'ifsc'=> $ifsc,
                'branch'=> $branch,
                'account_no'=> $account_no,
                'skills'=>$skills,
                'remark'=>$remark        
            );

            $result = $this->Form_crud_modal->updateData($data,$id);

            if($result){
                $this->session->set_flashdata('updated',"Data updated Successfuly");
            }
            redirect('Form_crud');
        }



        public function checkEmail()
        {
            $email = $this->input->post('email');
            $result = $this->Form_crud_modal->emailcheck($email);
            echo $result;
        }


       

    }


?>

