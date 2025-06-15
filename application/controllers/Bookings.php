<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookings extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(['url', 'form']);
        $this->load->database(); // pastikan ini aktif
    }

    public function submit()
    {
        // Aturan validasi
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Check-in', 'required');
        $this->form_validation->set_rules('durasi', 'Durasi', 'required|integer|greater_than[0]');
        $this->form_validation->set_rules('pembayaran', 'Metode Pembayaran', 'required');
        $this->form_validation->set_rules('tipe_kamar', 'Tipe Kamar', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, redirect kembali ke halaman dengan pesan error
            $this->session->set_flashdata('error', validation_errors());
            redirect(base_url('home#booking'));
        } else {
            // Ambil data dari form
            $tipe_kamar = $this->input->post('tipe_kamar');
            $durasi = $this->input->post('durasi');

            $data = [
                'nama' => $this->input->post('nama'),
                'tanggal' => $this->input->post('tanggal'),
                'durasi' => $durasi,
                'tipe_kamar' => $tipe_kamar,
                'metode_pembayaran' => $this->input->post('pembayaran'),
                'harga' => $this->hitungHarga($tipe_kamar, $durasi),
                'created_at' => date('Y-m-d H:i:s')
            ];

            // Simpan ke tabel bookings
            $this->db->insert('booking', $data);

            $this->session->set_flashdata('success', 'Booking berhasil disimpan!');
            redirect(base_url('home'));
        }
    }

    // Fungsi untuk menghitung harga berdasarkan tipe kamar dan durasi
    private function hitungHarga($tipe_kamar, $durasi)
    {
        $harga_per_hari = [
            'Standard Room'   => 300000,
            'Deluxe Room'     => 500000,
            'Presendial Room' => 1000000,
            'Ball Room'       => 1500000,
            'Restaurant'      => 1000000,
            'Meeting Room'    => 800000,
        ];

        return ($harga_per_hari[$tipe_kamar] ?? 0) * $durasi;
    }
}
