<?php 

class Userdata extends CI_Model {
	
	public function getUser() {	
	  return[
		["firstname" => "saurav","lastname" => "Bisht"],
		["firstname" => "gaurav","lastname" => "Bisht"]
		];
	}
	
}

?>