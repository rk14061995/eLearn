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
        $data['subject']=$this->db->get('subject')->result();
        $data['subject_details']=$this->db->where('id',$sub_id)->get('subject')->row();
        $data['subject_videos']=$this->db->where('subject_id',$sub_id)->get('video')->result();
        $this->load->view('website/layout/header',$data);
        $this->load->view('website/pages/courses');
        $this->load->view('website/layout/footer');
    }
    
    
}
