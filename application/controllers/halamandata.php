<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halamandata extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa');
    }
    
	public function index()
	{
		$this->load->view('viewHalamanData');
    }
	
	public function ambilData(){
        $data = $this->mahasiswa->getAll('mahasiswa')->result();
        echo json_encode($data);
	}
	
}
