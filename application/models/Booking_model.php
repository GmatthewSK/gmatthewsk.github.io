<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    // Tambahkan method get_all()
    public function get_all()
    {
        return $this->db->get('booking')->result();
    }
}
