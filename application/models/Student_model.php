<?php
Class Student_Model extends CI_Model{

    public function insertdata($data){
        $this->load->database();
       return $this->db->insert('student_data',$data);


    }
    public function getuser($email){
        $this->load->database();
       return $this->db->where('Email',$email)->get('student_data')->row();

    }
    public function get_profile_data($id){
        $this->load->database();
        return $this->db->where('id',$id)->get('student_data')->row();

    }
    public function getupdatedata($id){
        $this->load->database();
        return $this->db->where('id',$id)->get('student_data')->row();
    }
    public function update_records($id,$data){
        $this->load->database();
        return $this->db->where('id',$id)->update('student_data',$data);
    }
    public function changeuserpassword($id,$new_password){
        $this->load->database();
        $this->db->set('Password',$new_password)->where('id',$id)->update('student_data');
    }
    public function oldPasswordMatches($id,$old_password){
       $result= $this->db->where('id',$id)->where('Password',$old_password)->get('student_data');
        if($result->num_rows()>0){
            return true;

        }
        return false;
    }
    
}
