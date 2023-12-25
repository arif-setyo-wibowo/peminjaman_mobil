<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

    public function index()
    {
        $pengguna = $this->session->userdata('role');
        if ($pengguna == 'User') {
            $data = array(
                'header' => 'template/header_admin',
                'footer' => 'template/footer_admin'
            );

            return $this->load->view('history/history',$data);
        }else{
            $this->session->set_flashdata('msg','Login sebagai user');
            redirect('login');
        }
    }
}

/* End of file Kategori.php */
