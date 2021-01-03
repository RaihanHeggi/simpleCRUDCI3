<?php
 // write your name and student id here
class video extends CI_model
{
	function __construct(){
        parent::__construct();
	}
	
	public function getAllData(){
		return $this->db->get('videotable')->result_array();
	}
}