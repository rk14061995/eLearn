<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
    function __construct(){
 		parent::__construct();
 		// $this->load->library('encryption');
 		$this->load->model('DatabaseModel','DTB');

 	}
    public  function studentRegistration(){
		$data['subject']=$this->db->get('subject')->result();
        $this->load->view('website/layout/header',$data);
        $this->load->view('website/pages/form-register');
        $this->load->view('website/layout/footer');
    }
    public  function studentLogin(){
		$data['subject']=$this->db->get('subject')->result();
        $this->load->view('website/layout/header',$data);
        $this->load->view('website/pages/form-login');
        $this->load->view('website/layout/footer');
    }
 	public function validateStudentLogin(){
 		// print_r($_POST);
 		$condition=array("email"=>$this->input->post('user_email'));
		$res=$this->DTB->getData('students',$condition);
		$pwd=trim($this->input->post('pass_code'));
		if(count($res)>0){
			$password=$res[0]->password;
			$decryptPwd=$this->encryption->decrypt($password);
			if($decryptPwd==$pwd){
				echo 'Password Matched.';
				$this->session->set_userdata('studentSession',serialize($res));
				redirect('Website');
			}else{
				echo 'Password Not Match.';
				$this->session->set_flashdata('err','Invalid Password');
				redirect('Website');
			}
		}else{
			echo 'Email Id Not Found.';
			$this->session->set_flashdata('err','Invalid Email Id');
			redirect('Website');
		}
 	}
 	public  function studentLogout(){
		 
 		if($this->session->userdata('studentSession')){
 			$this->session->unset_userdata('studentSession');
 			// $this->session->sess_destroy();
 		}
 		redirect('Website');
 	}

	public function newStudentRegistration(){
		$pwdEncyt=$this->encryption->encrypt(trim($_POST['user_pass_code']));
		$studentData=array(
								"fullname"=>$this->input->post('full_name'),
								"email"=>$this->input->post('email_'),
								"phone_"=>$this->input->post('phone_no'),
								"password"=>$pwdEncyt,
								
							);
		// print_r($studentData);
		$response=$this->DTB->insertData('students', $studentData);
		switch ($response) {
			case 0:
				# code...	
				$this->session->set_flashdata('msg','Failed To Register');
				break;
			case 1:
				# code...
				$this->session->set_flashdata('msg','Registered Successfully');
				break;
			case 2:
				# code...
				$this->session->set_flashdata('msg','Email Id Already Exists');
				break;
			
			default:
				# code...
				$this->session->set_flashdata('msg','Server Error');
				break;
		}
		redirect('Website');
	}
	
}
