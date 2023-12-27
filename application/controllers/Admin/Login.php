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

            $admin = $this->Login_M->validasi($username, $password);

            if ($admin) {
                if ($admin->level == "Admin") {
					$this->session->set_userdata('idpengguna', $admin->idpengguna);
					$this->session->set_userdata('nama', $admin->nama);
					$this->session->set_userdata('username', $admin->username);
					$this->session->set_userdata('role', $admin->level);

					redirect('dashboard');
				}else{
					$this->session->set_flashdata('msg','Anda Bukan Admin');
                	redirect('login-admin');
				}
            }else{
                $this->session->set_flashdata('msg','Password atau username salah');
                redirect('login-admin');
            }
        } else {
            $data = array(
                'header' => 'template/header_login',
                'footer' => 'template/footer_login',
				'judul' => "Login Admin"
            );
    
            return $this->load->view('login/loginadmin',$data);
        }
    }

	public function loginPetugas()
    {
		if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $petugas = $this->Login_M->validasi($username, $password);

            if ($petugas) {
                if ($petugas->level == "Petugas") {
					$this->session->set_userdata('idpengguna', $petugas->idpengguna);
					$this->session->set_userdata('nama', $petugas->nama);
					$this->session->set_userdata('username', $petugas->username);
					$this->session->set_userdata('role', $petugas->level);

					redirect('dashboard');
				}else{
					$this->session->set_flashdata('msg','Anda Bukan Petugas');
                	redirect('login-petugas');
				}
            }else{
                $this->session->set_flashdata('msg','Password atau username salah');
                redirect('login-petugas');
            }
        } else {
			$data = array(
                'header' => 'template/header_login',
                'footer' => 'template/footer_login',
				'judul' => "Login Petugas"
            );
    
            return $this->load->view('login/loginpetugas',$data);
        }
    }

	public function loginUser()
    {
        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->Login_M->validasi($username, $password);

            if ($user) {
                if ($user->level == "User") {
					$this->session->set_userdata('idpengguna', $user->idpengguna);
					$this->session->set_userdata('nama', $user->nama);
					$this->session->set_userdata('username', $user->username);
					$this->session->set_userdata('role', $user->level);

					redirect('dashboard');
				}else{
					$this->session->set_flashdata('msg','Anda Bukan User');
                	redirect('login-user');
				}
            }else{
                $this->session->set_flashdata('msg','Password atau username salah');
                redirect('login-user');
            }
        } else {
			$data = array(
                'header' => 'template/header_login',
                'footer' => 'template/footer_login',
				'judul' => "Login User"
            );
    
            return $this->load->view('login/loginuser',$data);
        }
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