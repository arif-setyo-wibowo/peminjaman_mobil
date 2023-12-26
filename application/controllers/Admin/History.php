<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Peminjaman_M');
    }

    public function index()
    {
        $pengguna = $this->session->userdata('role');
        if ($pengguna == 'User') {
            $data = array(
                'header' => 'template/header_admin',
                'footer' => 'template/footer_admin',
				'history'=> $this->Peminjaman_M->get_one_by_user($this->session->userdata('idpengguna'))
            );

            return $this->load->view('history',$data);
        }else{
            $this->session->set_flashdata('msg','Login sebagai user');
            redirect('/');
        }
    }
}

/* End of file Kategori.php */
