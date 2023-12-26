<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_M');
    }
    
    public function index()
    {
        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->Login_M->validasi($username, $password);

            if ($user) {
                $this->session->set_userdata('idpengguna', $user->idpengguna);
                $this->session->set_userdata('nama', $user->nama);
                $this->session->set_userdata('username', $user->username);
                $this->session->set_userdata('role', $user->level);

                redirect('dashboard');
            }else{
                $this->session->set_flashdata('msg','Password atau username salah');
                redirect('login');
            }
        } else {
            $data = array(
                'header' => 'template/header_admin',
                'footer' => 'template/footer_admin'
            );
    
            return $this->load->view('login/login',$data);
        }
    }

    public function register()
    {
        $data = array(
            'header' => 'template/header_admin',
            'footer' => 'template/footer_admin'
        );

        return $this->load->view('login/register',$data);
    }

    public function logout() {
        $this->session->unset_userdata('idpengguna');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');

        redirect('/');
    }
}



/* End of file Kategori.php */
