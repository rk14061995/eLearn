<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notes extends CI_Controller {
	public function viewNotes($sub_id){
        
        $data['subject']=$this->db->get('subject')->result();
        $data['subject_details']=$this->db->where('id',$sub_id)->get('subject')->row();
        $data['subject_notes']=$this->db->where('subject_id',$sub_id)
                                        ->join('subject','subject_notes.subject_id=subject.id')->get('subject_notes')->result();
        $this->load->view('website/layout/header',$data);
        $this->load->view('website/pages/courses_pdf');
        $this->load->view('website/layout/footer');
    }
    
}
