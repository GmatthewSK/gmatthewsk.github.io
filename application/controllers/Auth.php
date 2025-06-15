<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function login()
    {
        $this->load->view('login');
    }

    public function signup()
    {
        $this->load->view('signup');
    }

    public function register()
    {
        // Handle register form
        $username = $this->input->post('username');
        $email    = $this->input->post('email');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        $data = [
            'username' => $username,
            'email'    => $email,
            'password' => $password
        ];

        $this->load->model('User_model');
        $this->User_model->insert_user($data);

        // Redirect ke login
        redirect('auth/login');
    }

    public function do_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->load->model('user_model');
        $user = $this->user_model->get_by_username($username);

        if ($user && password_verify($password, $user->password)) {
            // Simpan session
            $this->session->set_userdata([
                'user_id' => $user->id,
                'username' => $user->username
            ]);
            redirect('Kamar'); // ke halaman home
        } else {
            // Jika gagal
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
