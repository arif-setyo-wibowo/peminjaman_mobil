<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function index()
    {
        $data = array(
            'header' => 'template/header_admin',
            'footer' => 'template/footer_admin'
        );

        return $this->load->view('kategori/kategori',$data);
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

/* End of file Kategori.php */