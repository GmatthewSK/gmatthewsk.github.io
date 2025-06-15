<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        // Ambil data kamar dari model
        $this->load->model('Kamar_model');
        $data['row'] = $this->Kamar_model->get_all();

        // Tampilkan view
        $this->load->view('home', $data);
    }
}
