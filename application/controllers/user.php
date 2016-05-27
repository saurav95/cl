<?php 

class User extends CI_Controller {
	
	public function index() {
		
		
		$this->load->model('userdata');
		$data['users'] = $this->userdata->getUser();
		
		$this->load->view('user' , $data);
		
	}
	
	
}


?>