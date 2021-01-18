<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	public function index(){
        $data['subject']=$this->db->get('subject')->result();
        $this->load->view('website/layout/header',$data);
        $this->load->view('website/pages/home');
        $this->load->view('website/layout/footer');
    }
    public function about(){
        $data['subject']=$this->db->get('subject')->result();
        $this->load->view('website/layout/header',$data);
        $this->load->view('website/pages/pages-about');
        $this->load->view('website/layout/footer');
    }
    public function contact_us(){
        $data['subject']=$this->db->get('subject')->result();
        $this->load->view('website/layout/header',$data);
        $this->load->view('website/pages/pages-contact');
        $this->load->view('website/layout/footer');
    }
    public function viewSubject($sub_id){
        $studentData=unserialize($this->session->userdata('studentSession'));
        // print_r($studentData);
        // die;
        $class_id=$studentData[0]->class_id;
        if($class_id!=''){
            $condition=array("subject_id"=>$sub_id,"class_id"=>$class_id);
        }else{
            $condition=array("subject_id"=>$sub_id);
        }
        
        $data['subject']=$this->db->get('subject')->result();
        $data['subject_details']=$this->db->where('id',$sub_id)->get('subject')->row();
        $data['subject_videos']=$this->db->where($condition)->get('video')->result();
        $this->load->view('website/layout/header',$data);
        $this->load->view('website/pages/courses');
        $this->load->view('website/layout/footer');
    }
    public function userProfile(){
        $data['subject']=$this->db->get('subject')->result();
        $data['classess_']=$this->db->get('class')->result();
        $studentData=unserialize($this->session->userdata('studentSession'));
        $data['studentData']=$this->db->where('student_id',$studentData[0]->student_id)->get('students')->row();
        // $data['studentData']=$studentData[0];
        // $data['subject_details']=$this->db->where('id',$sub_id)->get('subject')->row();
        // $data['subject_videos']=$this->db->where($condition)->get('video')->result();
        $this->load->view('website/layout/header',$data);
        $this->load->view('website/pages/user_profile');
        $this->load->view('website/layout/footer');
    }
    public function sendMessage(){
        print_r($_POST);
        // $studentData=unserialize($this->session->userdata('studentSession'));
        // user_contacts`(`id`, `username`, `email`, `message`)
        $data=array(
                        "username"=>$this->input->post('full_name'),
                        "email"=>$this->input->post('email'),
                        "message"=>$this->input->post('message'),
                        
                    );
        if(count($this->db->where($data)->get('user_contacts')->result())==0){
            if($this->db->insert('user_contacts',$data)){
                $this->session->set_flashdata('msg','Message Posted Successfully.');
            }else{
                $this->session->set_flashdata('msg','Failed to post message.');
            }
        }else{
            $this->session->set_flashdata('msg','Message Posted Successfully.');
            // $this->session->set_flashdata('msg','message Already Exists.');
        }
        redirect('Contact-Us');
    }
    public function updateDetails(){
        // print_r($_POST);
        $studentData=unserialize($this->session->userdata('studentSession'));

        // Array ( [full_name] => fasfsdf [mobile_no] => 3333 [class_] => 1 )
        // /tudents`(`student_id`, ``, `email`, ``, `password`, `profile_pic`, `account_type`, ``, `updat
        $condition=array("student_id"=>$studentData[0]->student_id);
        $toUpdate=array(
                        "fullname"=>$this->input->post('full_name'),
                        "phone_"=>$this->input->post('mobile_no'),
                        "class_id"=>$this->input->post('class_'),
                        "updated_at"=>date('d-m-Y h:i:s A')
                        );
        if($this->db->where($condition)->update('students',$toUpdate)){
            $this->session->set_flashdata('msg','Details Updated Successfully.');
        }else{
            $this->session->set_flashdata('msg','Failed to Update Details.');
        }
        redirect('Student-Profile');
    }
    
    
}
