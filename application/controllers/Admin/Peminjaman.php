<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Mobil_M');
		$this->load->model('Pengguna_M');
		$this->load->model('Peminjaman_M');
    }

    public function index()
    {
        $pengguna = $this->session->userdata('role');
        if ($pengguna == 'Petugas') {
            $data = array(
                'header' => 'template/header_admin',
                'footer' => 'template/footer_admin',
				'mobil'	 => $this->Mobil_M->getMobil(),
				'pengguna' => $this->Pengguna_M->getPenggunaUser(),
				'peminjaman' => $this->Peminjaman_M->getJoinPinjam(),
            );

            return $this->load->view('peminjaman',$data);
        }else{
			$this->session->set_flashdata('msg','Login sebagai petugas');
			redirect('login');
		}
    }

    function insertUpdate(){
        $pengguna = $this->session->userdata('role');
        if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
            if ($this->input->post('proses') == 'Tambah') {
				$data = [
					'idpengguna' 	=> $this->input->post('idpengguna'),
					'idpetugas' 	=> $this->session->userdata('idpengguna'),
					'idmobil' 		=> $this->input->post('idmobil'),
					'tgl_pinjam' 	=> $this->input->post('tgl_pinjam'),
				];
				$this->Peminjaman_M->insertData($data);
				$this->session->set_flashdata('msg', 'Berhasil Menambah Data Peminjaman');
				redirect('/peminjaman');
            }elseif ($this->input->post('proses') == 'Update') {
                $data = [
					'idpengguna' 	=> $this->input->post('idpengguna'),
					'idpetugas' 	=> $this->session->userdata('idpengguna'),
					'idmobil' 		=> $this->input->post('idmobil'),
					'tgl_pinjam' 	=> $this->input->post('tgl_pinjam'),
				];
                $this->Peminjaman_M->updateData($this->input->post('idpinjam'),$data);
                $this->session->set_flashdata('msg', 'Berhasil Mengubah Data Peminjaman');
                redirect('/peminjaman');
            }else{
                redirect('/peminjaman');
            }
        }else{
            $this->session->set_flashdata('msg','Login sebagai admin');
            redirect('login');
        }
    }

    function Selesai($id){
        $data = [
			'status' => 1,
			'tgl_kembali' => date('Y-m-d'),
		];
		$this->Peminjaman_M->updateData($id,$data);
		$this->session->set_flashdata('msg', 'Berhasil Menyelesaikan Peminjaman');
        redirect('/peminjaman');
    }
}

/* End of file Peminjaman.php */
