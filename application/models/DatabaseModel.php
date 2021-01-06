<?php
	class DatabaseModel extends CI_Model{

		public function getData($table_name='', $condition='',$extra=''){
			return $this->db->where($condition)->get($table_name)->result();
		}
		public function getDataWithLimit($table_name='', $condition='', $limit=''){
			return $this->db->where($condition)->limit($limit)->get($table_name)->result();
		}
		public function getDataWithOrderBY($table_name='', $condition='', $order_by_col='',$order_by_=''){
			return $this->db->where($condition)->order_by($order_by_col,$order_by_)->get($table_name)->result();
		}
		public function insertData($table_name, $data){
			$response=$this->db->where($data)->get($table_name)->result();
			// print_r($data);
			if(count($response)==0){
				if($this->db->insert($table_name,$data)){
					// echo ' One ';
					return 1;
				}else{
					// echo ' Zero ';
					return 0;
				}
			}else{
				// echo ' Two ';
				return 2;
			}
		}

		public function updateReacord($table_name,$toUpdate){
			if($this->db->update($table_name,$toUpdate)){
				return true;
			}else{
				return false;
			}
		}
		
		public function update_Data($table_name,$toUpdate,$condition){
			if($this->db->where($condition)->update($table_name,$toUpdate)){
				return true;
			}else{
				return false;
			}
		}

		public function getSkillDetial($id){
			return $this->db->where('skill_id',$id)->get('skills_')->row();
		}
		public function getJobsSearch($sh_Query){
			// print_r($sh_Query);
			$skill_name=$sh_Query['skill_name'];
			$city=$sh_Query['city'];
			$condition="";
			if(isset($sh_Query['exp_'])){
				print_r($sh_Query['exp_']);
				// $condition="and "
			}
			if(isset($sh_Query['hours_ago'])){
				// print_r($sh_Query['hours_ago']);
				$days=$sh_Query['hours_ago']/24;
				// echo  $days.' Days Ago';
				$date_raw=date('Y-m-d');
				$toGet=date('Y-m-d', strtotime('-'.$days.' day', strtotime($date_raw)));
				echo $condition="and adde_on > '".$toGet."'";

			}
			if(isset($sh_Query['sal_range'])){
				print_r($sh_Query['sal_range']);
			}
			if(isset($sh_Query['edu_r'])){
				print_r($sh_Query['edu_r']);
			}
			//$edu_r
			//$hours_ago
			//$sal_range
			//exp_
			
			if($skill_name!="" && $city!=""){
				// echo 'both are not null';
				$query="SELECT jobs_added.*, company_.company_name, company_.comp_phone, company_.website_url,  company_.company_email, company_.company_logo, company_.	comp_address   from jobs_added join company_ on company_.company_id= jobs_added.added_by_company_id where (job_title Like '%$skill_name%' AND job_location_ Like '%$city%') $condition order by job_id desc limit 6";
			}else{
				// echo 'One is null';
				$query="SELECT jobs_added.*, company_.company_name, company_.comp_phone, company_.website_url,  company_.company_email, company_.company_logo, company_.	comp_address   from jobs_added join company_ on company_.company_id= jobs_added.added_by_company_id where (job_title Like '%$skill_name%' OR job_location_ Like '%$city%') $condition order by job_id desc limit 6";
			}
			// $data['allskills']=$this->db->get('skills_')->result();
			
			// echo ' || '.$query;
			$jobArray=array();
			$JObs=$this->db->query($query)->result();
			foreach($JObs as $job_details){
				$skillArr=explode(',',$job_details->skills);
				$skills=array();
				foreach ($skillArr as $skiId) {
					$skills[]=$this->getSkillDetial($skiId)->skill_name;
				}
				array_push($jobArray, array("details"=>$job_details,"skills"=>$skills));
			}
			return $jobArray;
			
		}
		public function getJobsSearchTotal($sh_Query){
		
			$skill_name=$sh_Query['skill_name'];
			$city=$sh_Query['city'];
			if($skill_name!="" && $city!=""){
				// echo 'both are not null';
				$query="SELECT jobs_added.*, company_.company_name, company_.comp_phone, company_.website_url,  company_.company_email, company_.company_logo, company_.	comp_address   from jobs_added join company_ on company_.company_id= jobs_added.added_by_company_id where job_title Like '%$skill_name%' AND job_location_ Like '%$city%' order by job_id desc ";
			}else{
				// echo 'One is null';
				$query="SELECT jobs_added.*, company_.company_name, company_.comp_phone, company_.website_url,  company_.company_email, company_.company_logo, company_.	comp_address   from jobs_added join company_ on company_.company_id= jobs_added.added_by_company_id where job_title Like '%$skill_name%' OR job_location_ Like '%$city%' order by job_id desc ";
			}
			// $data['allskills']=$this->db->get('skills_')->result();
			
			// echo ' || '.$query;
			
			$JObs=$this->db->query($query)->result();
			
			return count($JObs);
			
		}
		public function getJobDetails($job_id){
			$query="SELECT jobs_added.*, company_.company_name, company_.comp_phone, company_.website_url,  company_.company_email, company_.company_logo, company_.comp_address   from jobs_added join company_ on company_.company_id= jobs_added.added_by_company_id where jobs_added.job_id=$job_id";
			$jobData=array();
			$job_details=$this->db->query($query)->row();
			$skillArr=explode(',',$job_details->skills);
			$skills=array();
			foreach ($skillArr as $skiId) {
				$skills[]=$this->getSkillDetial($skiId)->skill_name;
			}
			
			
			return array("details"=>$job_details,"skills"=>$skills);
		}
		public function getJobsByCategory($category_id){
			$query="SELECT jobs_added.*, company_.company_name, company_.comp_phone, company_.website_url,  company_.company_email, company_.company_logo, company_.	comp_address   from jobs_added join company_ on company_.company_id= jobs_added.added_by_company_id where job_category='$category_id' order by job_id desc ";
			$jobArray=array();
			$JObs=$this->db->query($query)->result();
			foreach($JObs as $job_details){
				$skillArr=explode(',',$job_details->skills);
				$skills=array();
				foreach ($skillArr as $skiId) {
					$skills[]=$this->getSkillDetial($skiId)->skill_name;
				}
				array_push($jobArray, array("details"=>$job_details,"skills"=>$skills));
			}
			return $jobArray;
		}
		public function getJobsByCategoryTotal($category_id){
			$query="SELECT jobs_added.*, company_.company_name, company_.comp_phone, company_.website_url,  company_.company_email, company_.company_logo, company_.	comp_address   from jobs_added join company_ on company_.company_id= jobs_added.added_by_company_id where job_category='$category_id' order by job_id desc ";
			
			$JObs=$this->db->query($query)->result();
			return count($JObs);
			
		}
	}



?>