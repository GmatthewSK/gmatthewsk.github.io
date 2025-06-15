<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
				$this->load->model('m_kamar');
        }
	
	public function index()
	{
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }

		$data['title']	= 'Data Kamar';
		$data['row']	= $this->m_kamar->getAll()->result();
		$this->load->view('backend/list_kamar',$data);
	}

	public function tambah()
	{
		if (isset($_POST['submit'])) {

            $this->load->library('upload');
			$this->upload->initialize($this->set_upload());
			$data = array();
			if ( !$this->upload->do_upload('gambar'))
            {
                $error = array('error' => $this->upload->display_errors());
			}	else
				{
					$fileData = $this->upload->data();
					$data['gambar'] = $fileData['file_name'];
				}
		
		$data['tipe_kamar']	= $this->input->post('tipe_kamar');
		$data['jumlah']	= $this->input->post('jumlah');
		$data['jlh_pesan']	= $this->input->post('jumlah');
		$data['harga']	= $this->input->post('harga');


		$this->db->insert('t_kamar',$data);
		} else{
			$data['title']	= 'Data Kamar';
			$data['row']	= $this->m_kamar->getAll()->result();
			$this->load->view('backend/list_kamar',$data);
		}
		redirect('kamar'); 
	}

	public function edit()
	{
		if (isset($_POST['submit'])) {

            $this->load->library('upload');
			$this->upload->initialize($this->set_upload());
			$data = array();
			if ( !$this->upload->do_upload('gambar'))
            {
                $error = array('error' => $this->upload->display_errors());
			}	else
				{
					$fileData = $this->upload->data();
					$data['gambar'] = $fileData['file_name'];
				}

		$kamar_id			= $this->input->Post('kamar_id');
		$data['tipe_kamar']	= $this->input->Post('tipe_kamar');
		$data['jumlah']		= $this->input->Post('jumlah');
		$data['jlh_pesan']	= $this->input->Post('jumlah');
		$data['harga']		= $this->input->Post('harga');

		$this->db->where('kamar_id', $kamar_id);
		$this->db->update('t_kamar', $data);
		redirect('kamar'); 

		} else{
			$id= $this->uri->segment(3);
			$data['title']	= 'Data Kamar';
			$data['editnya'] = $this->db->get_where('t_kamar', array('kamar_id' => $id))->row();
			$data['row']	= $this->m_kamar->getAll()->result();
			$this->load->view('backend/edit_kamar',$data);
		}
	}

	public function del() 
	{
		$id= $this->uri->segment(3);
		$this->m_kamar->delete($id);
		redirect('kamar'); 
		
	}
	private function set_upload()
	{
		    	$config=array();
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = '10000';
                $config['file_name']          	= 'kamar-'.substr(md5(rand()),0,10);
				return $config;
	}
}
