<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Login extends CI_Controller
{

	function __construct(){

		parent::__construct();
		
		// $this->load->model('Admin_Login_model','Admin_L');
	}
	
	public function index()
	{
		$this->load->view('admin/Pages/login');

		 $this->session->sess_destroy();
	}

	public function login_validate()
	{
		$data=array("email"=>$this->input->post('email'),
					"password"=>$this->input->post('password'));
		$this->db->where($data);
		$success=$this->db->get('admin')->result();
		if(count($success)>0){
			$this->session->set_userdata('login_admin',$success);	
			redirect('Admin_Dashboard/viewDashbaord');
		}else{   
		$this->session->set_flashdata('msg','Invalid Email Or Password');
		redirect('Admin_Login/index');
		}	

	}
	public function logOut(){
		$this->session->sess_destroy();
		redirect('admin');
	}



	
	
}