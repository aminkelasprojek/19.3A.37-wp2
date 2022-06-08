<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //Model
        $this->load->model('M_User');
    }


    public function index()
    {

        $this->load->view('login');
    }
    public function login()
    {
        $email      = htmlspecialchars($this->input->post('email'));
        $password   = $this->input->post('password');

        $user       = $this->M_user->cekData(['email' => $email])->row_array();

        //jika email terdaftar
        if ($user) {
            //cek keaktifan user
            if ($user['is_active'] == 1) {
                //cek password
                if ($password == $user['password']) {

                    $data = array(
                        'email'     => $user['email'],
                        'nama'      => $user['nama'],
                        'role_id'   => $user['role_id'],
                        'CekUser'  => 1
                    );

                    $this->session->set_userdata($data);

                    redirect("Home");
                } else {
                    $this->session->set_flashdata('pesan', 'Password salah ' . $password . ' == ' . $user['password']);
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', 'User non aktif');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', 'Email tidak ada');
            redirect('auth');
        }
    }

    public function logout()
    {

        $this->session->sess_destroy();

        $this->session->set_flashdata('pesan', 'Logout Berhasil');
        redirect('auth');
    }
}



/* End of file Auth.php */
