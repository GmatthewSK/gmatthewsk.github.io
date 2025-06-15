<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

    public function index()
    {
        $this->load->model('Booking_model');
        $data['bookings'] = $this->Booking_model->get_all();

        $this->load->view('Backend_view', $data); // buat file ini juga di folder views
    }
}
