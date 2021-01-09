<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {
	public function viewSubject($sub_id){
        $data['subject']=$this->db->get('subject')->result();
        $data['subject_details']=$this->db->where('id',$sub_id)->get('subject')->row();
        $data['subject_videos']=$this->db->where('subject_id',$sub_id)->get('video')->result();
        $this->load->view('website/layout/header',$data);
        $this->load->view('website/pages/courses');
        $this->load->view('website/layout/footer');
    }
    
}
