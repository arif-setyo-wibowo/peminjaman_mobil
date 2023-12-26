<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mobil_M');
        $this->load->model('Pengguna_M');
        $this->load->model('Peminjaman_M');
    }
    

    public function index()
    {
        $data = array(
            'userdata' => $this->Pengguna_M->countAllUser(),
            'peminjamandata' => $this->Peminjaman_M->countAllPeminjaman(),
            'mobildata' => $this->Mobil_M->countAllData(),
            'mobil' => $this->Mobil_M->getMobildanKategori(),
            'header' => 'template/header_admin',
            'footer' => 'template/footer_admin'
        );

        return $this->load->view('dashboard',$data);
    }

    function detail($id){
        $data = array(
            'mobil'  => $this->Mobil_M->get_one($id)
        );

        return $this->load->view('mobil_detail_dashboard',$data);
    }

}

/* End of file Dashboard.php */