<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

    public function index()
    {
        $data = array(
            'header' => 'template/header_admin',
            'footer' => 'template/footer_admin'
        );

        return $this->load->view('mobil/mobil',$data);
    }

    function store(){
        
    }

    function edit(){
        
    }

    function update(){
        
    }

    function delete(){
        
    }

    function detail(){
        $data = array(
            'header' => 'template/header_admin',
            'footer' => 'template/footer_admin'
        );

        return $this->load->view('mobil/mobil_detail',$data);
    }
}

/* End of file Mobil.php */