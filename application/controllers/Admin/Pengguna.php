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
		$pengguna = $this->session->userdata('role');
        if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
			$data = array(
				'header' 	=> 'template/header_admin',
				'footer' 	=> 'template/footer_admin',
				'pengguna'	=> $this->Pengguna_M->getPengguna(),
			);

			return $this->load->view('pengguna',$data);
		}else{
            $this->session->set_flashdata('msg','Login sebagai admin');
            redirect('/');
        }
    }

	public function insertUpdate(){
		$pengguna = $this->session->userdata('role');
        if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
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
				redirect('/pengguna');
			}
		}else{
			$this->session->set_flashdata('msg','Login sebagai admin');
			redirect('/');
		}
    }

	public function updateStatus($id, $status) {
		$pengguna = $this->session->userdata('role');
        if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
			$data = [
				'status'     => $status,
			];
			$this->Pengguna_M->updateData($id,$data);
			$this->session->set_flashdata('msg', 'Berhasil Mengubah Status Pengguna');
			redirect('/pengguna');
		}else{
			$this->session->set_flashdata('msg','Login sebagai admin');
			redirect('/');
		}
	}

    public function delete($id){
		$pengguna = $this->session->userdata('role');
        if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
			$this->Pengguna_M->deleteData($id);
			$this->session->set_flashdata('msg', 'Berhasil Menghapus Data Pengguna');
			redirect('/pengguna');
		}else{
			$this->session->set_flashdata('msg','Login sebagai admin');
			redirect('/');
		}
    }
}

/* End of file Pengguna.php */