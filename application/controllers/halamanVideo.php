<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halamanVideo extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('video');
    }
    
	public function index()
	{  
        $data['data_video'] = $this->video->getallData();
		$this->load->view('viewHalamanVideo',$data);
	}
}
