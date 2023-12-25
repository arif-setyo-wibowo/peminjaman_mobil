<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


    public function index()
    {
        $data = array(
            'header' => 'template/header_admin',
            'footer' => 'template/footer_admin'
        );

        return $this->load->view('dashboard',$data);
    }

}

/* End of file Dashboard.php */