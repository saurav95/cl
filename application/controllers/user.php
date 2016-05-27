<?php 

class User extends CI_Controller {
	
	public function index() {
		
		
		$this->load->model('userdata');
		$data['users'] = $this->userdata->getUser();
		//print_r($data);
		$this->load->view('user' , $data);
		
	}
	
	
}


?>