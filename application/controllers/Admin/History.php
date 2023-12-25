<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

    public function index()
    {
        $data = array(
            'header' => 'template/header_admin',
            'footer' => 'template/footer_admin'
        );

        return $this->load->view('history/history',$data);
    }
}

/* End of file Kategori.php */
