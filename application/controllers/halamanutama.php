<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halamanutama extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa');
    }
    
	public function index()
	{  
		$this->load->view('viewHalamanForm');
	}
	
	public function insert(){
		$nama = $this->input->post('inputNama');
		$nim = $this->input->post('inputNIM');
		$data = array(
			'nama' => $nama,
			'nim' => $nim
		);
		$this->mahasiswa->insertData($data);
		redirect('halamanedit/index');
    }


}
