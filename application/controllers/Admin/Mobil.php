<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_M');
        $this->load->model('Mobil_M');
    }

    public function index()
    {
		$pengguna = $this->session->userdata('role');
        if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
            $data = array(
				'header' 	=> 'template/header_admin',
				'footer' 	=> 'template/footer_admin',
				'kategori'	=> $this->Kategori_M->getKategori(),
				'mobil'		=> $this->Mobil_M->getMobil(),
			);
	
			return $this->load->view('mobil',$data);
        }else{
            $this->session->set_flashdata('msg','Login sebagai admin');
            redirect('login');
        }
    }

    function insertUpdate(){
		$pengguna = $this->session->userdata('role');
		if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
			if ($this->input->post('proses') == 'Tambah') {

				// Proses Gambar
				$config['upload_path'] 	= './uploads/mobil/';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['overwrite']     = FALSE;
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambar')) {
					$gambar = '';
				} else {
					$dataNama = $this->upload->data();
					$gambar = uniqid() . '_' . $dataNama['file_name'];
				}

				$data = [
					'merk_mobil' 	=> $this->input->post('merk_mobil'),
					'nama_mobil' 	=> $this->input->post('nama_mobil'),
					'idkategori' 	=> $this->input->post('idkategori'),
					'tahun_mobil' 	=> $this->input->post('tahun_mobil'),
					'kapasitas' 	=> $this->input->post('kapasitas'),
					'harga_sewa' 	=> $this->input->post('harga_sewa'),
					'stok' 			=> $this->input->post('stok'),
					'no_plat' 		=> $this->input->post('no_plat'),
					'warna' 		=> $this->input->post('warna'),
					'no_bpkb' 		=> $this->input->post('no_bpkb'),
					'gambar'		=> $gambar
				];
				$this->Mobil_M->insertData($data);
				$this->session->set_flashdata('msg', 'Berhasil Menambah Data Mobil');
				redirect('/mobil');
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
		}else{
			$this->session->set_flashdata('msg','Login sebagai admin');
			redirect('login');
		}
    }

    function edit(){
        
    }

    function update(){
        
    }

    public function delete($id){
		$pengguna = $this->session->userdata('role');
        if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
			$this->Mobil_M->deleteData($id);
			$this->session->set_flashdata('msg', 'Berhasil Menghapus Data Mobil');
			redirect('/mobil');
		}else{
			$this->session->set_flashdata('msg','Login sebagai admin');
			redirect('login');
		}
    }

    function detail($id){
		$pengguna = $this->session->userdata('role');
        if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
			$data = array(
				'header' => 'template/header_admin',
				'footer' => 'template/footer_admin',
				'mobil'  => $this->Mobil_M->get_one($id)
			);

			return $this->load->view('mobil_detail',$data);
		}else{
			$this->session->set_flashdata('msg','Login sebagai admin');
			redirect('login');
		}
    }
}

/* End of file Mobil.php */
