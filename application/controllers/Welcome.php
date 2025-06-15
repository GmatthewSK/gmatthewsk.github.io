<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
				$this->load->model('m_kamar');
        }

	public function index()
	{
		$data['row']	= $this->m_kamar->getAll();
		$this->load->view('home',$data);
	}
}
