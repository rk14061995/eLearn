<?php
class Admin_Dashboard extends CI_Controller
{	
	function __construct()
	{
		 parent::__construct();
		  if(!$this->session->userdata('login_admin')){
		redirect('admin');
	}
		    
	// $this->load->model('Admin_Category_model','Admin_C');	
	// $this->load->model('Admin_Job_Model','Admin_J');
	// $this->load->model('Admin_Story_Model','Admin_S');
	// $this->load->model('Admin_Company_Model','Admin_Com');
	// $this->load->model('Admin_User_Model','Admin_User');
	}
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
		$data['video']=$this->getVideoDetails();
         $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/addvideo',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function getVideoDetails()
	{
	$data=$this->db->select('class.*,subject.*,video.*,class.id as cl_id,subject.id as sub_id,video.id as vid_id')->join('class','class.id=video.class_id')->join('subject','subject.id=video.subject_id')->from('video')->get()->result();
	return $data;
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
		$data['notes']=$this->getNotesDetails();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/notes',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function getNotesDetails()
	{
	$data=$this->db->select('class.*,subject.*,notes.*,class.id as cl_id,subject.id as sub_id')->join('class','class.id=notes.class_id')->join('subject','subject.id=notes.subject_id')->from('notes')->order_by("note_id", "desc")->get()->result();
	return $data;
	}
	public function EditNotes($noteid)
	{ 		
       $data['class']=$this->db->get('class')->result();
		$data['subject']=$this->db->get('subject')->result();
		$data['notes']=$this->editNotdetails($noteid);
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/editnote',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function EditVideo($videoid)
	{ 		
       $data['class']=$this->db->get('class')->result();
		$data['subject']=$this->db->get('subject')->result();
		$data['video']=$this->editVideodetails($videoid);
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/editvideo',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function editNotdetails($noteid)
	{
		$data=$this->db->select('class.*,subject.*,notes.*,class.id as cl_id,subject.id as sub_id')->join('class','class.id=notes.class_id')->join('subject','subject.id=notes.subject_id')->from('notes')->where("note_id",$noteid)->get()->result();
	return $data;
	}
	public function editVideodetails($videoid)
	{
		$data=$this->db->select('class.*,subject.*,video.*,class.id as cl_id,subject.id as sub_id')->join('class','class.id=video.class_id')->join('subject','subject.id=video.subject_id')->from('video')->where('video.id',$videoid)->get()->result();
	return $data;
	}
	public function viewQuery()
	{ 		
       $data['query']=$this->db->get('user_contacts')->result();
		// $data['subject']=$this->db->get('subject')->result();
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
	 	public function UpdateSubject(){
	 		$subjecname=$this->input->post('subjecname');
	 		$subjectid=$this->input->post('subjectid');
	 		$data=array('subject'=>$subjecname);
	 		$this->db->where('id',$subjectid);
	 		 $res=$this->db->update('subject',$data);
	 		if($res)
	 		{	
	 		 die(json_encode(array('status'=>1,'message'=>"add")));
	 		}else
	 		{
	 		 die(json_encode(array('status'=>0,'message'=>'Try Again ')));
	 		}
	 	}
	 	public function UpdateClass(){
	 		// print_r($_POST);
	 		// die;
	 		$classname=$this->input->post('classname');
	 		$classid=$this->input->post('classid');
	 		$data=array('class'=>$classname);
	 		$this->db->where('id',$classid);
	 		 $res=$this->db->update('class',$data);
	 		if($res)
	 		{	
	 		 die(json_encode(array('status'=>1,'message'=>"add")));
	 		}else
	 		{
	 		 die(json_encode(array('status'=>0,'message'=>'Try Again ')));
	 		}
	 	}
	 	public function UpdateNotes(){		 		
	 	$note_id=$this->input->post('notess_id');
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
	 		$this->db->where('note_id',$note_id);
	 		 $res=$this->db->update('notes',$data);
	 		if($res)
	 		{	
	 		 die(json_encode(array('status'=>1,'message'=>"add")));
	 		}else
	 		{
	 		 die(json_encode(array('status'=>0,'message'=>'Try Again ')));
	 		}
	 	}
	 	public function Updatevideoupld()
   		 {
			$video_id=$this->input->post('video_id');
			$oldpath=$this->input->post('oldpath');
			$title=$this->input->post('title');
			$class=$this->input->post('class');
			$subject=$this->input->post('subject');
        
         $this->load->helper('string');
         if(!empty($_FILES['video_image']['name']))
         {
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
         	if (!$this->upload->do_upload('video_image'))
       		{
       			$error=$this->upload->display_errors();
          	 die(json_encode(array('status'=>0,'msg'=>$error)));
        	}else{
        		$file_name=$config['file_name'];
        		// cho"else loop of files";

        	}				     
         }
         else{
         	$file_name=$oldpath;
         }
        
          $data = array('video_url' =>  $file_name,
                            'class_id'=>$class,
                        	'subject_id'=>$subject,
                        	 'title'=>$title);
            // print_r($data);
            // die;
            $this->db->where('id',$video_id);
            $this->db->update('video',$data);
          die(json_encode(array('status'=>1,'data'=>'success')));     
    } 
	 	public function fetchSubjectData()
	 	{
	 		print_r($_POST);
	 		$subjectid=$this->input->post('subjectid');
	 		print_r($subjectid);
			die;
	 		$this->db->where('id',$subjectid);
			$data=$this->db->get('subject')->result();
			print_r($data);
			die;
	 		die(json_encode(array('data'=>$data)));
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
	public function addUserContact()
    {		

    	$username=$this->input->post('username');
        $email=$this->input->post('email');
         $message=$this->input->post('message');
          
        
       			
            $data = array('username' =>  $username,
                            'email'=>$email,
                        	'message'=>$message);
            // print_r($data);
            // die;
           
            $this->db->where($data);
           $res= $this->db->insert('user_contacts',$data);
            if($res){
            	die(json_encode(array('status'=>1,'data'=>'success')));
            }else{
            	  die(json_encode(array('status'=>0,'data'=>'failed')));
            }
          
           
        }   

	public function DeleteClass()
	{
		$data=array('id'=>$this->input->post('c_id'));
			$this->db->where($data);
		 $results=$this->db->delete('class');
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	public function DeleteSubject()
	{
		$data=array('id'=>$this->input->post('sub_id'));
			$this->db->where($data);
		 $results=$this->db->delete('subject');
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	public function DeleteVideo()
	{
		$data=array('id'=>$this->input->post('vid_id'));
			$this->db->where($data);
		 $results=$this->db->delete('video');
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	public function DeleteNotes()
	{
		$data=array('note_id'=>$this->input->post('note_id'));
			$this->db->where($data);
		 $results=$this->db->delete('notes');
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