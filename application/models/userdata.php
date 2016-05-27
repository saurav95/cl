<?php 

class Userdata extends CI_Model {
	
	public function getUser() {	
	
	 $this->load->database();
	 $q = $this->db->query("SELECT * FROM user_account");
	 $result = $q->result();
	 return $result;	 
	
	}
	
}

?>