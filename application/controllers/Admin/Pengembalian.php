<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Peminjaman_M');
    }

    public function index()
    {
        $pengguna = $this->session->userdata('role');
        if ($pengguna == 'Petugas') {
            $data = array(
                'header' => 'template/header_admin',
                'footer' => 'template/footer_admin',
				'pengembalian' => $this->Peminjaman_M->getJoinPengembalian()
            );

            return $this->load->view('pengembalian',$data);
        }else{
			$this->session->set_flashdata('msg','Login sebagai petugas');
			redirect('/');
		}
    }

    function Delete($id){
		$pengguna = $this->session->userdata('role');
			if ($pengguna == 'Petugas') {
			$this->Peminjaman_M->deleteData($id);
			$this->session->set_flashdata('msg', 'Berhasil Menghapus Data');
			redirect('pengembalian');
		}else{
			$this->session->set_flashdata('msg','Login sebagai petugas');
			redirect('/');
		}
    }
}

/* End of file Pengembalian.php */
