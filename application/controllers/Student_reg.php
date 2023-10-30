<?php
Class Student_reg extends CI_controller{
    public function __construct(){
      parent::__construct();
      $this->load->helper("form");
      $this->load->library('form_validation');
      $this->load->library('session'); 
      $this->load->model('Student_Model');

    }
    public function index(){
        $this->load->view('Student_reg_form');

    }
    public function savedata(){
  
         $this->form_validation->set_rules('studentname','Student Name','required');
         $this->form_validation->set_rules('studentrollnumber','RollNumber','required');
         $this->form_validation->set_rules('studentclass','Class','required');
         $this->form_validation->set_rules('studentmark','Mark','required');
         $this->form_validation->set_rules('studentemail','Email','required|is_unique[student_data.Email]');
         $this->form_validation->set_rules('studentpassword','Password','required');
        

       if ($this->form_validation->run() == FALSE)
       {
        $this->load->view('Student_reg_form'); 
       }
      else{
        extract($_POST);
        $data=[
            'Student_Name'=>$studentname,
            'Student_RollNumber'=>$studentrollnumber,
            'Class'=>$studentclass,
            'Mark'=>$studentmark,
            'Email'=>$studentemail,
            'Password'=>$studentpassword
        ];
        // echo "<pre>";
        // var_dump($data);
        // die();

        $this->load->model('Student_model');
       $result=$this->Student_model->insertdata($data);
       //var_dump($result==true);die();
        if ($result==true){

            $this->load->view('Student_reg_form');
            
         }
    }
    
  }
  public function login(){
   
    if($this->session->has_userdata('id')){
      redirect('Student_reg/Home');
    }
   

    $this->load->view('login_form');
  }
  public function login_user(){
    
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('password','Password','required');
    if ($this->form_validation->run() == FALSE)
    {
     $this->load->view('login_form'); 
    }else{
      $email= $this->input->post('email');
      $password= $this->input->post('password');

      $this->load->model('Student_model');
   
    if($user=$this->Student_model->getuser($email)){

      
      if($user->Password==$password){
        //echo "login seccessfully";
        $this->session->set_userdata('id',$user->id);
        redirect('Student_reg/home',);
        //echo "<pre>";
        //var_dump($user);
        // die();
        

      }else{
        echo "login Error!";

      }
    }else{
      echo "No account exists with this email";

    }

    }
   

  }
  public function Home(){
    $this->load->view('home');
  }

  public function logout(){
    
    $this->session->unset_userdata('id');
    redirect('Student_reg/login');
  }
  public function myprofile(){
    if($this->session->has_userdata('id')){
      $id=$this->session->has_userdata('id');
      
     $result['data']= $this->Student_Model->get_profile_data($id);
     //echo "<pre>";
       // var_dump($result);
       //die();
        
      $this->load->view('My_Profile',$result);


    }
  }
  public function update($id){
     
    $result['data']=$this->Student_Model->getupdatedata($id);
    $this->load->view('update_form',$result);
  

}
public function updatedata($id){
  extract($_POST);
      $data=[
          'Student_Name'=>$studentname,
          'Student_RollNumber'=>$rollnumber,
          'Class'=>$class,
          'Mark'=>$mark
          
      ];
      
     $result=$this->Student_Model->update_records($id,$data);
     if($result){
      redirect(base_url('Student_reg/home/'));
   
}

}
public function change_password(){
  if($this->session->has_userdata('id')){
    $this->load->view('change_password_form');
  }
  else{
    redirect('Student_reg/login');

  }

}
public function update_password(){
  $this->form_validation->set_rules('old_password','Old Password','required');
  $this->form_validation->set_rules('new_password','New Password','required');
  $this->form_validation->set_rules('confirm_password','Confirm Password','required|matches[new_password]');

  if ($this->form_validation->run() == FALSE)
  {
   $this->load->view('change_password_form'); 
  }else{
    $old_password= $this->input->post('old_password');
    $new_password= $this->input->post('new_password');
    $confirm_password= $this->input->post('confirm_password');

    if(strcmp($old_password, $new_password)==0){
      $mesage=" New password shpld be adifferent password";

    }else{
      $id=$this->session->userdata('id');
      if($this->Student_Model->oldPasswordMatches($id,$old_password)){
        $this->Student_Model->changeuserpassword($id,$new_password);
        $message= "Password change successflly";
      }else{
        $message= "Your old password is wrong!";
      }
      

    }
    $this->load->view('change_password_form',array('message'=>$message));
  }
}



}   