<?php
 // write your name and student id here
class mahasiswa extends CI_model
{
	function __construct(){
        parent::__construct();
	}
	
	public function getAll($table){
		return $this->db->get($table);
	}

	public function deleteData($id){
		$this->db->where('id',$id);
        return $this->db->delete('mahasiswa');
	}

	public function getOneData($id){
		$this->db->where('id',$id);
        return $this->db->get('mahasiswa')->row_array();
	}

	public function getAllData(){
		return $this->db->get('mahasiswa')->result_array();
	}

	public function updateData($id,$data){
		$this->db->where('id', $id);
		return $this->db->update('mahasiswa',$data);
	}

	public function insertData($data){
		return $this->db->insert('mahasiswa',$data);
	}

}