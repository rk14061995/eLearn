<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notes extends CI_Controller {
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('studentSession')){
            redirect(base_url());
        }
    }
	public function viewNotes($sub_id){
        $studentData=unserialize($this->session->userdata('studentSession'));
        // print_r($studentData);
        $class_id=$studentData[0]->class_id;
        if($class_id!=''){
            $condition=array("subject_id"=>$sub_id,"class_id"=>$class_id);
        }else{
            $condition=array("subject_id"=>$sub_id);
        }
        $data['subject']=$this->db->get('subject')->result();
        $data['subject_details']=$this->db->where('id',$sub_id)->get('subject')->row();
        $data['subject_notes']=$this->db->where($condition)->get('notes')->result();
        $this->load->view('website/layout/header',$data);
        $this->load->view('website/pages/courses_pdf');
        $this->load->view('website/layout/footer');
    }
    public function readNote($note_id){
        $studentData=unserialize($this->session->userdata('studentSession'));
        // print_r($studentData);
        // die;
        $data['studendData']=$studentData[0];
        $data['note_id']=$note_id;
        // $student_name=$studentData[0]->fullname;
        // $student_email=$studentData[0]->email;
        $data['subject']=$this->db->get('subject')->result();
        // $data['subject_details']=$this->db->where('id',$sub_id)->get('subject')->row();
        $data['subject_notes']=$this->db->where('note_id',$note_id)
                                        ->join('subject','subject.id=notes.subject_id')
                                        ->get('notes')->row();
        $this->load->view('website/layout/header',$data);
        $this->load->view('website/pages/course-intro');
        $this->load->view('website/layout/footer');
    }
    public function submitComment(){
        // print_r($_POST);
        $studentData=unserialize($this->session->userdata('studentSession'));
        
        $data=array(
                        "note_id"=>$this->input->post('note_id'),
                        "comment"=>$this->input->post('user_comment'),
                        "student_id"=>$studentData[0]->student_id,
                        
                    );
        if(count($this->db->where($data)->get('comments_note')->result())==0){
            if($this->db->insert('comments_note',$data)){
                $this->session->set_flashdata('msg','Comment Posted Successfully.');
            }else{
                $this->session->set_flashdata('msg','Failed to post comment.');
            }
        }else{
            $this->session->set_flashdata('msg','Comment Already Exists.');
        }
        redirect(base_url('Notes/readNote/').$this->input->post('note_id'));
    }
    
}
