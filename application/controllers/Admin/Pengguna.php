<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Pengguna_M');
    }

    public function index()
    {
        $data = array(
            'header' 	=> 'template/header_admin',
            'footer' 	=> 'template/footer_admin',
			'pengguna'	=> $this->Pengguna_M->getPengguna(),
        );

        return $this->load->view('pengguna',$data);
    }

	public function insertUpdate(){
		if ($this->input->post('proses') == 'Tambah') {
            $data = [
				'nama' 		=> $this->input->post('nama'),
				'username' 	=> str_replace(' ', '', strtolower($this->input->post('username'))),
				'email' 	=> $this->input->post('email'),
				'password' 	=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'level' 	=> $this->input->post('level'),
			];
            $this->Pengguna_M->insertData($data);
			$this->session->set_flashdata('msg', 'Berhasil Menambah Data Pengguna');
            redirect('/pengguna');
        }elseif ($this->input->post('proses') == 'Update') {
			if ($this->input->post('password') != NULL) {
				$data = [
					'password' 	=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				];
				$this->Pengguna_M->updateData($this->input->post('idpengguna'),$data);
			}

			$data = [
				'nama' 		=> $this->input->post('nama'),
				'username' 	=> str_replace(' ', '', strtolower($this->input->post('username'))),
				'email' 	=> $this->input->post('email'),
				'level' 	=> $this->input->post('level'),
			];
            $this->Pengguna_M->updateData($this->input->post('idpengguna'),$data);
			$this->session->set_flashdata('msg', 'Berhasil Mengubah Data Pengguna');
            redirect('/pengguna');
        }else{
			redirect('/kategori');
		}
    }

	public function updateStatus($id, $status) {
		$data = [
            'status'     => $status,
        ];
		$this->Pengguna_M->updateData($id,$data);
		$this->session->set_flashdata('msg', 'Berhasil Mengubah Status Pengguna');
        redirect('/pengguna');
	}

    public function delete($id){
        $this->Pengguna_M->deleteData($id);
		$this->session->set_flashdata('msg', 'Berhasil Menghapus Data Pengguna');
        redirect('/pengguna');
    }
}

/* End of file Pengguna.php */