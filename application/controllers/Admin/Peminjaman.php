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
			redirect('/');
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
					'jumlah'		=> $this->input->post('jumlah'),
				];

				// Update Stok Mobil
				$datamobil = $this->Mobil_M->get_one($data['idmobil']);
				$mobilupdate = [
					'stok' => $datamobil->stok - $data['jumlah'],
				];
				$this->Mobil_M->updateData($data['idmobil'], $mobilupdate);

				$this->Peminjaman_M->insertData($data);
				$this->session->set_flashdata('msg', 'Berhasil Menambah Data Peminjaman');
				redirect('/peminjaman');
            }elseif ($this->input->post('proses') == 'Update') {
                $data = [
					'idpengguna' 	=> $this->input->post('idpengguna'),
					'idpetugas' 	=> $this->session->userdata('idpengguna'),
					'idmobil' 		=> $this->input->post('idmobil'),
					'tgl_pinjam' 	=> $this->input->post('tgl_pinjam'),
					'jumlah'		=> $this->input->post('jumlah'),
				];

				// Mengembalikan stok mobil
				$datapinjam = $this->Peminjaman_M->get_one($this->input->post('idpinjam'));
				$datamobillama = $this->Mobil_M->get_one($datapinjam->idmobil);
				$mobiloldupdate = [
					'stok' => $datamobillama->stok + $datapinjam->jumlah,
				];
				$this->Mobil_M->updateData($datamobillama->idmobil, $mobiloldupdate);

				// Update Stok Mobil
				$datamobil = $this->Mobil_M->get_one($data['idmobil']);
				$mobilupdate = [
					'stok' => $datamobil->stok - $data['jumlah'],
				];
				$this->Mobil_M->updateData($data['idmobil'], $mobilupdate);

                $this->Peminjaman_M->updateData($this->input->post('idpinjam'),$data);
                $this->session->set_flashdata('msg', 'Berhasil Mengubah Data Peminjaman');
                redirect('/peminjaman');
            }else{
                redirect('/peminjaman');
            }
        }else{
            $this->session->set_flashdata('msg','Login sebagai admin');
            redirect('/');
        }
    }

    function Selesai($id){
		$pengguna = $this->session->userdata('role');
        if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
			$data = [
				'status' => 1,
				'tgl_kembali' => date('Y-m-d'),
			];
			
			// Mengembalikan Stok Mobil
			$datapinjam = $this->Peminjaman_M->get_one($id);
			$datamobil = $this->Mobil_M->get_one($datapinjam->idmobil);
			$mobilupdate = [
					'stok' => $datamobil->stok + $datapinjam->jumlah,
				];
			$this->Mobil_M->updateData($datapinjam->idmobil, $mobilupdate);

			$this->Peminjaman_M->updateData($id,$data);
			$this->session->set_flashdata('msg', 'Berhasil Menyelesaikan Peminjaman');
			redirect('/peminjaman');
		}else{
			$this->session->set_flashdata('msg','Login sebagai admin');
			redirect('/');
		}
    }
}

/* End of file Peminjaman.php */