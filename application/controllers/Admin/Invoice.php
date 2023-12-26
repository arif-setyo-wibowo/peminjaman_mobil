<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peminjaman_M');
    }
    
    public function index()
    {
        
        $idpengguna = $this->session->userdata('idpengguna');
        $pengguna = $this->session->userdata('role');
        if ($pengguna == 'User') {
            $data = array(
                'history' => $this->Peminjaman_M->getWherePengguna($idpengguna),
                'header' => 'template/header_admin',
                'footer' => 'template/footer_admin'
            );

            return $this->load->view('invoice',$data);
        }else{
            $this->session->set_flashdata('msg','Login sebagai user');
            redirect('login');
        }
    }
}

/* End of file Kategori.php */
