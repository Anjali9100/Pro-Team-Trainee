<?php


    class Form_crud_modal extends CI_model{
        public function getAllDetails(){
            $query = $this->db->get('emp_details');
            if($query){
                 return  $query->result();
            }
         }


         public function insertData($data){
            $results = $this->db->insert('emp_details',$data);

            if($results){
                return true;
            }
            else{
                return false;
            }
         }


         public function delete_item($emp_id){
            $this->db->where('employee_id',$emp_id);
            $result = $this->db->delete('emp_details');
            if($result){
                return true;
            }
            else{
                return false;
            }
         }

         public function fetch_data($id)
         {
            $this->db->where('employee_id',$id);
            $query = $this->db->get('emp_details');

            if($query){
                return $query->row();
            }
         }


         public function updateData($data,$id){
            $this->db->where('employee_id',$id);
            $query = $this->db->update('emp_details',$data);

            if($query){
                return true;
            }
            else{
                return false;
            }
         }


        public function emailcheck($email)
        {
            $this->db->where('email',$email);
            $query = $this->db->get('emp_details');
            if($query->num_rows() > 0){
                return 1;
            } else{
                return 0;
            }
        }   


        public function insertQualification($data){
            $result = $this->db->insert('qualification',$data);
        
            if($result){
                return true;
            }
            else{
                echo $this->db->error();
                return false;
            }
        }

        
        
        public function fetchQualification($employeeId) {
            $this->db->select('*');
            $this->db->from('qualification');
            $this->db->where('emp_fk_id', $employeeId);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return false;
            }
        }


        public function deleteQualification(){
            $this->db->where('emp_fk_id',$employee and 'qualification',$qualification);
            $result = $this->db->delete('qualification');

            if($result){
                return true;
            }else{
                return false;
            }
        }
        
        
    }

?>