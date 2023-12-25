<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_M');
    }

    public function index()
    {
        $data = array(
            'header' 	=> 'template/header_admin',
            'footer' 	=> 'template/footer_admin',
			'kategori' 	=> $this->Kategori_M->getKategori(),
        );

        return $this->load->view('kategori',$data);
    }

    public function insertUpdate(){
		if ($this->input->post('proses') == 'Tambah') {
            $data = [
				'kategori' => $this->input->post('kategori'),
			];
            $this->Kategori_M->insertData($data);
			$this->session->set_flashdata('msg', 'Berhasil Menambah Data Kategori');
            redirect('/kategori');
        }elseif ($this->input->post('proses') == 'Update') {
            $data = [
				'kategori' => $this->input->post('kategori'),
			];
            $this->Kategori_M->updateData($this->input->post('idkategori'),$data);
			$this->session->set_flashdata('msg', 'Berhasil Mengubah Data Kategori');
            redirect('/kategori');
        }else{
			redirect('/kategori');
		}
    }

    public function delete($id){
        $this->Kategori_M->deleteData($id);
		$this->session->set_flashdata('msg', 'Berhasil Menghapus Data Kategori');
        redirect('/kategori');
    }
}

/* End of file Kategori.php */