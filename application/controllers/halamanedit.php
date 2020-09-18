<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halamanedit extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa');
    }
    
	public function index()
	{
        $data['data_mahasiswa'] = $this->mahasiswa->getAllData();
		$this->load->view('viewHalamanEdit',$data);
    }
    
    public function loadHalaman($id){
        $data['data_mahasiswa'] = $this->mahasiswa->getOneData($id);
        $this->load->view('viewEditForm',$data);
    }

    public function delete($id){
        $this->mahasiswa->deleteData($id);
        redirect('halamandata');
    }

    public function edit($id){
        $nama = $this->input->post('inputNama');
        $nim = $this->input->post('inputNIM');
        $data = array(
            'nama' => $nama,
            'nim' => $nim,
        );
        $this->mahasiswa->updateData($id,$data);
        redirect('halamanedit/index');
    }
}
