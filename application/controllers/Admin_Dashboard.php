<?php
class Admin_Dashboard extends CI_Controller
{	
	// function __construct()
	// {
	// 	 parent::__construct();
	// 	  if(!$this->session->userdata('login_admin')){
	// 	redirect('Login-Page');
	// }
		    
	// $this->load->model('Admin_Category_model','Admin_C');	
	// $this->load->model('Admin_Job_Model','Admin_J');
	// $this->load->model('Admin_Story_Model','Admin_S');
	// $this->load->model('Admin_Company_Model','Admin_Com');
	// $this->load->model('Admin_User_Model','Admin_User');
	
	// }
	public function viewDashbaord()
	{ 
  		$data['class']=$this->db->get('class')->num_rows();
  		$data['subject']=$this->db->get('subject')->num_rows();
  		$data['video']=$this->db->get('video')->num_rows();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/index',$data);
		 // $this->load->view('admin/Layout/footer');
	}
	public function addSubject()
	{ 		
		$data['subjects']=$this->db->get('subject')->result();
		 $this->load->view('admin/Layout/header',$data);
		 $this->load->view('admin/Pages/subject');
		 $this->load->view('admin/Layout/footer');
	}
	public function addVideo()
	{ 	
		$data['class']=$this->db->get('class')->result();
		$data['subject']=$this->db->get('subject')->result();
         $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/addvideo',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function addClass()
	{ 		
		$data['classes']=$this->db->get('class')->result();
         $this->load->view('admin/Layout/header',$data);
		 $this->load->view('admin/Pages/addclass');
		 $this->load->view('admin/Layout/footer');
	}
	public function viewNotes()
	{ 		
       $data['class']=$this->db->get('class')->result();
		$data['subject']=$this->db->get('subject')->result();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/notes',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function viewQuery()
	{ 		
       $data['class']=$this->db->get('class')->result();
		$data['subject']=$this->db->get('subject')->result();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/query',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function InsertSubject(){
	 		$subject=$this->input->post('subject');
	 		$data=array('subject'=>$subject);
	 		 $res=$this->db->insert('subject',$data);
	 		if($res)
	 		{	
	 		 die(json_encode(array('status'=>1,'message'=>"add")));
	 		}
	 		else
	 		{
	 		 die(json_encode(array('status'=>0,'message'=>'Try Again ')));
	 		}
	 	}
 	public function InsertClass(){
	 		$class=$this->input->post('class');
	 		$data=array('class'=>$class);
	 		 $res=$this->db->insert('class',$data);
	 		if($res)
	 		{	
	 		 die(json_encode(array('status'=>1,'message'=>"add")));
	 		}
	 		else
	 		{
	 		 die(json_encode(array('status'=>0,'message'=>'Try Again ')));
	 		}
	 	}
	public function videoupld()
    {

    	$title=$this->input->post('title');
        $class=$this->input->post('class');
         $subject=$this->input->post('subject');
        
         $this->load->helper('string');
        $config['max_size'] = '102400000';
        $config['allowed_types'] = 'mp4'; 
        $config['overwrite'] = FALSE;
        $config['remove_spaces'] = TRUE;
        // $uploadPath = 'assets/video/';
        $config['upload_path'] = 'assetss/video/';
        $video_name =$_FILES['video_image']['name'];
        $config['file_name'] ="video-".date("Y-m-d-H-i-s").$video_name;
        $this->load->library('upload',$config);  
        
        $this->upload->initialize($config); 
    //   print_r( $this->upload->display_errors());
    //   die;
       if (!$this->upload->do_upload('video_image'))
       {
           die(json_encode(array('status'=>0,'msg'=>'file Empty')));
        }
        else 			
        {				
            $data = array('video_url' =>  $config['file_name'],
                            'class_id'=>$class,
                        	'subject_id'=>$subject,
                        	 'title'=>$title);
            // print_r($data);
            // die;
            $this->db->where($data);
            $this->db->insert('video',$data);
            die(json_encode(array('status'=>1,'data'=>'success')));
           
        }    
    } 
	
	public function addNotes()
    {

    	$title=$this->input->post('title');
        $class=$this->input->post('class');
         $subject=$this->input->post('subject');
          $editor1=$this->input->post('editor1');
        
       			
            $data = array('notes' =>  $editor1,
                            'class_id'=>$class,
                        	'subject_id'=>$subject,
                        	 'title'=>$title);
            // print_r($data);
            // die;
           
            $this->db->where($data);
           $res= $this->db->insert('notes',$data);
            if($res){
            	die(json_encode(array('status'=>1,'data'=>'success')));
            }else{
            	  die(json_encode(array('status'=>0,'data'=>'failed')));
            }
          
           
        }     
	
	public function DeleteJobSeeker()
	{
		$data=array('user_id'=>$this->input->post('user_id'));
			$this->db->where($data);
		 $results=$this->db->delete('user_');
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	public function DeleteJobApp()
	{
		$data=array('job_application_id'=>$this->input->post('job_application_id'));
			$this->db->where($data);
		 $results=$this->db->delete('job_application');
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	
}