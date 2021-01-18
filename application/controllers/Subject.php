<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('studentSession')){
            redirect(base_url());
        }
    }
	public function viewSubject($sub_id){
        $studentData=unserialize($this->session->userdata('studentSession'));
        // print_r($studentData);
        // die;
        $data['subject']=$this->db->get('subject')->result();
        $data['subject_details']=$this->db->where('id',$sub_id)->get('subject')->row();
        $data['subject_videos']=$this->db->where('subject_id',$sub_id)->get('video')->result();
        $this->load->view('website/layout/header',$data);
        $this->load->view('website/pages/courses');
        $this->load->view('website/layout/footer');
    }
    
}
