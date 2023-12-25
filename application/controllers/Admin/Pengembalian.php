<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {

    public function index()
    {
        $pengguna = $this->session->userdata('role');
        if ($pengguna == 'Petugas') {
            $data = array(
                'header' => 'template/header_admin',
                'footer' => 'template/footer_admin'
            );

            return $this->load->view('pengembalian/pengembalian',$data);
        }else{
			$this->session->set_flashdata('msg','Login sebagai petugas');
			redirect('login');
		}
    }

    function store(){
        
    }

    function edit(){
        
    }

    function update(){
        
    }

    function delete(){
        
    }
}

/* End of file Pengembalian.php */
